<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        try {
            $categories = Category::select('id', 'name')->get();
            return response()->json($categories);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Không thể lấy danh sách danh mục',
                'message' => $e->getMessage()
            ], 500);
        }
    }
}