<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class StoreController extends Controller
{
    // Lấy danh sách tất cả cửa hàng
    public function index(Request $request)
    {
        // Tọa độ của người dùng (có thể lấy từ request nếu cần)
        $userLat = $request->latitude;
        $userLng = $request->longitude;
        $radius = 2; // Bán kính 2km

        // Lấy danh sách cửa hàng trong phạm vi 2km
        $stores = Store::selectRaw("
            *,
            (6371 * acos(
                cos(radians(?)) * cos(radians(latitude)) * cos(radians(longitude) - radians(?)) +
                sin(radians(?)) * sin(radians(latitude))
            )) AS distance", [$userLat, $userLng, $userLat])
            ->having("distance", "<=", $radius)
            ->orderBy("distance", "asc")
            ->get();

        return ApiResponse::success($stores, "Lấy danh sách cửa hàng thành công!");
    }

    // Tạo cửa hàng mới
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'store_name' => 'required|string|max:255|unique:stores,store_name',
                'avatar' => 'nullable|string|url',
                'store_type' => 'required|string|max:100',
                'opening_hours' => 'nullable|string|max:255',
                'status' => 'required|in:active,inactive',
                'contact_email' => 'nullable|email|max:255',
                'contact_phone' => 'nullable|string|max:20',
                'latitude' => 'nullable|numeric',
                'longitude' => 'nullable|numeric',
                'description' => 'nullable|string',
                'user_id' => 'required|exists:users,id',
            ]);

            $store = Store::create($validatedData);
            return ApiResponse::success($store, "Tạo cửa hàng thành công!", 201);
        } catch (ValidationException $e) {
            return ApiResponse::error($e->errors(), "Dữ liệu không hợp lệ!", 422);
        }
    }

    // Lấy thông tin chi tiết của một cửa hàng
        public function show($id)
        {
            $store = Store::find($id);

            if (!$store) {
                return ApiResponse::error(null, "Không tìm thấy cửa hàng!", 404);
            }

            return ApiResponse::success($store, "Lấy thông tin cửa hàng thành công!");
        }



    // Cập nhật cửa hàng
    public function update(Request $request, $id)
    {
        try {
            $store = Store::find($id);
            if (!$store) {
                return ApiResponse::error(null, "Không tìm thấy cửa hàng!", 404);
            }

            $validatedData = $request->validate([
                'store_name' => 'required|string|max:255|unique:stores,store_name,' . $id,
                'avatar' => 'nullable|string|url',
                'store_type' => 'required|string|max:100',
                'opening_hours' => 'nullable|string|max:255',
                'status' => 'required|in:active,inactive',
                'contact_email' => 'nullable|email|max:255',
                'contact_phone' => 'nullable|string|max:20',
                'latitude' => 'nullable|numeric',
                'longitude' => 'nullable|numeric',
                'description' => 'nullable|string',
                'user_id' => 'required|exists:users,id',
            ]);

            $store->update($validatedData);
            return ApiResponse::success($store, "Cập nhật cửa hàng thành công!");
        } catch (ValidationException $e) {
            return ApiResponse::error($e->errors(), "Dữ liệu không hợp lệ!", 422);
        }
    }

    // Xóa cửa hàng (soft delete)
    public function destroy($id)
    {
        $store = Store::find($id);
        if (!$store) {
            return ApiResponse::error(null, "Không tìm thấy cửa hàng!", 404);
        }

        $store->delete();
        return ApiResponse::success(null, "Xóa cửa hàng thành công!");
    }

    // Khôi phục cửa hàng đã bị xóa mềm
    public function restore($id)
    {
        $store = Store::withTrashed()->find($id);
        if (!$store || !$store->trashed()) {
            return ApiResponse::error(null, "Không tìm thấy cửa hàng đã bị xóa!", 404);
        }

        $store->restore();
        return ApiResponse::success($store, "Khôi phục cửa hàng thành công!");
    }

    // Xóa vĩnh viễn cửa hàng
    public function forceDelete($id)
    {
        $store = Store::withTrashed()->find($id);
        if (!$store) {
            return ApiResponse::error(null, "Không tìm thấy cửa hàng!", 404);
        }

        $store->forceDelete();
        return ApiResponse::success(null, "Xóa vĩnh viễn cửa hàng thành công!");
    }
}
