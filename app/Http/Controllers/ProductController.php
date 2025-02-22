<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use App\Models\Store;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $user = auth()->user();
        $latitude = $user->latitude;
        $longitude = $user->longitude;

        $products = Product::with(['store', 'category', 'images'])
            ->select('products.*')
            ->selectRaw("
            ( 6371 * acos( cos( radians(?) ) *
            cos( radians( stores.latitude ) )
            * cos( radians( stores.longitude ) - radians(?)
            ) + sin( radians(?) ) *
            sin( radians( stores.latitude ) ) )
            ) AS distance", [$latitude, $longitude, $latitude])
            ->join('stores', 'products.store_id', '=', 'stores.id')
            ->orderBy('distance')
            ->get();

        $formattedProducts = $products->map(function ($product) {
            return [
                'id' => $product->id,
                'name' => $product->name,
                'images' => $product->images->map(function ($image) {
                    return [
                        'url' => $image->image_url,
                        'order' => $image->image_order
                    ];
                }),
                'distance' => round($product->distance, 2),
                'store_name' => explode(' ', $product->store->store_name)[0],
                'product_type' => $product->product_type,
                'original_price' => $product->original_price,
                'discount_price' => $product->discount_price,
                'discount_percent' => $product->discount_percent,
            ];
        });

        return response()->json($formattedProducts);
    }

    public function productDetail($id)
    {
        $product = Product::with(['store', 'category'])->findOrFail($id);

        $formattedProduct = [
            'id' => $product->id,
            'name' => $product->name,
            'description' => $product->description,
            'image' => $product->image,
            'original_price' => $product->original_price,
            'discount_price' => $product->discount_price,
            'discount_percent' => $product->discount_percent,
            'expiration_date' => $product->expiration_date,
            'product_type' => $product->product_type,
            'stock_quantity' => $product->stock_quantity,
            'store' => [
                'id' => $product->store->id,
                'name' => $product->store->store_name,
                'avatar' => $product->store->avatar,
                'store_type' => $product->store->store_type,
                'opening_hours' => $product->store->opening_hours,
                'status' => $product->store->status,
                'contact_email' => $product->store->contact_email,
                'contact_phone' => $product->store->contact_phone,
                'latitude' => $product->store->latitude,
                'longitude' => $product->store->longitude,
                'description' => $product->store->description,
            ],
            'category' => [
                'id' => $product->category->id,
                'name' => $product->category->name,
                'description' => $product->category->description,
            ],
        ];

        return response()->json($formattedProduct);
    }

    private function getUserStore()
    {
        $user = Auth::user();
        if ($user->role !== 3) {
            return null; // Chỉ user có role 3 (store owner) mới có store
        }
        return Store::where('user_id', $user->id)->first();
    }

    private function formatProduct($product)
    {
        return [
            'id' => $product->id,
            'name' => $product->name,
            'description' => $product->description,
            'original_price' => $product->original_price,
            'discount_percent' => $product->discount_percent,
            'discount_price' => $product->discount_price,
            'product_type' => $product->product_type,
            'expiration_date' => $product->expiration_date,
            'stock_quantity' => $product->stock_quantity,
            'category' => $product->category,
            'store' => $product->store,
            'images' => $product->images->map(function ($image) {
                return [
                    'id' => $image->id,
                    'url' => $image->image_url,
                    'order' => $image->image_order
                ];
            }),
            'created_at' => $product->created_at,
            'updated_at' => $product->updated_at,
            'deleted_at' => $product->deleted_at
        ];
    }

    public function getProductsByStore()
    {
        try {
            $store = $this->getUserStore();
            if (!$store) {
                return response()->json(['message' => 'Bạn không có quyền truy cập cửa hàng này'], 403);
            }
            $products = $store->products()->with(['store', 'category', 'images'])->paginate(10);

            $formattedProducts = $products->through(function ($product) {
                return $this->formatProduct($product);
            });

            return response()->json([
                'data' => $formattedProducts->items(),
                'total' => $products->total(),
                'current_page' => $products->currentPage(),
                'per_page' => $products->perPage(),
                'last_page' => $products->lastPage()
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Không thể lấy danh sách sản phẩm', 'message' => $e->getMessage()], 500);
        }
    }

    public function postAddProduct(Request $request)
    {
        try {
            $store = $this->getUserStore();
            if (!$store) {
                return response()->json(['message' => 'Bạn không có quyền thêm sản phẩm vào cửa hàng này'], 403);
            }

            $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'nullable|string',
                'original_price' => 'required|numeric|min:0',
                'discount_percent' => 'required|integer|min:0|max:100',
                'product_type' => 'required|string|max:255',
                'discounted_price' => 'nullable|numeric|min:0',
                'expiration_date' => 'nullable|date',
                'stock_quantity' => 'required|integer|min:0',
                'category_id' => 'required|exists:categories,id',
                'images' => 'nullable|array',
                'images.*.image_url' => 'required|string',
                'images.*.image_order' => 'required|integer|min:0'
            ]);

            $productData = $request->except('images');
            $productData['store_id'] = $store->id;

            $product = Product::create($productData);

            // Handle images if provided
            if ($request->has('images')) {
                foreach ($request->images as $image) {
                    $product->images()->create([
                        'image_url' => $image['image_url'],
                        'image_order' => $image['image_order']
                    ]);
                }
            }

            $product->load(['store', 'category', 'images']);
            return response()->json([
                'message' => 'Sản phẩm đã được thêm!', 
                'product' => $this->formatProduct($product)
            ], 201);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Lỗi khi thêm sản phẩm!', 'message' => $e->getMessage()], 500);
        }
    }

    public function getProductByStore($productId)
    {
        try {
            $store = $this->getUserStore();
            $product = Product::with(['store', 'category', 'images'])
                ->where('store_id', $store->id)
                ->findOrFail($productId);
            
            return response()->json($this->formatProduct($product));
        } catch (\Exception $e) {
            return response()->json(['error' => 'Không thể lấy sản phẩm', 'message' => $e->getMessage()], 500);
        }
    }

    public function putUpdateProduct(Request $request, $productId)
    {
        try {
            $store = $this->getUserStore();
            $product = Product::where('store_id', $store->id)->findOrFail($productId);

            $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'nullable|string',
                'original_price' => 'required|numeric|min:0',
                'discount_percent' => 'required|integer|min:0|max:100',
                'product_type' => 'required|string|max:255',
                'discounted_price' => 'nullable|numeric|min:0',
                'expiration_date' => 'nullable|date',
                'stock_quantity' => 'required|integer|min:0',
                'category_id' => 'required|exists:categories,id',
                'images' => 'nullable|array',
                'images.*.image_url' => 'required|string',
                'images.*.image_order' => 'required|integer|min:0'
            ]);

            $productData = $request->except('images');
            $product->update($productData);

            // Update images if provided
            if ($request->has('images')) {
                // Delete existing images
                $product->images()->delete();
                
                // Add new images
                foreach ($request->images as $image) {
                    $product->images()->create([
                        'image_url' => $image['image_url'],
                        'image_order' => $image['image_order']
                    ]);
                }
            }

            $product->load(['store', 'category', 'images']);
            return response()->json([
                'message' => 'Sản phẩm đã được cập nhật!', 
                'product' => $this->formatProduct($product)
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Lỗi khi cập nhật sản phẩm!', 'message' => $e->getMessage()], 500);
        }
    }

    public function deleteProduct($productId)
    {
        try {
            $store = $this->getUserStore();
            $product = Product::where('store_id', $store->id)->findOrFail($productId);
            $product->delete();
            return response()->json(['message' => 'Sản phẩm đã được xóa mềm!']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Lỗi khi xóa sản phẩm!', 'message' => $e->getMessage()], 500);
        }
    }

    public function getTrashedProductsByStore()
    {
        try {
            $store = $this->getUserStore();
            if (!$store) {
                return response()->json(['message' => 'Bạn không có quyền truy cập cửa hàng này'], 403);
            }
            $products = Product::onlyTrashed()
                ->where('store_id', $store->id)
                ->with(['store', 'category', 'images'])
                ->paginate(10);

            $formattedProducts = $products->through(function ($product) {
                return $this->formatProduct($product);
            });

            return response()->json([
                'data' => $formattedProducts->items(),
                'total' => $products->total(),
                'current_page' => $products->currentPage(),
                'per_page' => $products->perPage(),
                'last_page' => $products->lastPage()
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Lỗi khi lấy danh sách sản phẩm đã xóa!', 'message' => $e->getMessage()], 500);
        }
    }

    public function restoreProduct($productId)
    {
        try {
            $store = $this->getUserStore();
            $product = Product::onlyTrashed()
                ->where('store_id', $store->id)
                ->findOrFail($productId);
            $product->restore();
            
            $product->load(['store', 'category', 'images']);
            return response()->json([
                'message' => 'Sản phẩm đã được khôi phục!', 
                'product' => $this->formatProduct($product)
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Lỗi khi khôi phục sản phẩm!', 'message' => $e->getMessage()], 500);
        }
    }

    public function forceDeleteProduct($productId)
    {
        try {
            $store = $this->getUserStore();
            $product = Product::onlyTrashed()
                ->where('store_id', $store->id)
                ->findOrFail($productId);
            
            // Delete associated images first
            $product->images()->delete();
            
            // Then force delete the product
            $product->forceDelete();
            
            return response()->json(['message' => 'Sản phẩm đã được xóa vĩnh viễn!']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Lỗi khi xóa vĩnh viễn sản phẩm!', 'message' => $e->getMessage()], 500);
        }
    }
}