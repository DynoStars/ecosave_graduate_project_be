<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with(['store', 'category'])->get();
        return response()->json($products);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'original_price' => 'required|numeric|min:0',
            'discounted_price' => 'nullable|numeric|min:0',
            'expiration_date' => 'nullable|date',
            'stock_quantity' => 'required|integer|min:0',
            'store_id' => 'required|exists:stores,id',
            'category_id' => 'required|exists:categories,id',
        ]);

        $product = Product::create($request->all());
        return response()->json(['message' => 'Sản phẩm đã được thêm!', 'product' => $product], 201);
    }

    public function show(Product $product)
    {
        return response()->json($product);
    }

}
