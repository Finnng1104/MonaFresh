<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Lấy tất cả sản phẩm
    public function index()
    {
        // Lấy 12 sản phẩm có số lượng bán cao nhất
        $bestSellingProducts = Product::orderBy('quantity_sold', 'desc')->limit(12)->get();

        // Lấy 12 sản phẩm thuộc danh mục "fruit" (giả sử category_id = 1 là fruit)
        $fruitProducts = Product::where('category_id', 1)->limit(12)->get();

        // Trả về view và truyền cả hai danh sách sản phẩm
        return view('index', compact('bestSellingProducts', 'fruitProducts'));
    }
    public function index2()
    {
        $products = Product::all();
        return response()->json([
            'status' => 'success',
            'data' => $products
        ]);
    }

    // Tạo sản phẩm mới
    public function store(Request $request)
    {
        $product = Product::create($request->all());

        return response()->json([
            'status' => 'success',
            'data' => $product
        ], 201);
    }

    // Lấy thông tin của một sản phẩm
    public function show($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json([
                'status' => 'error',
                'message' => 'Product not found'
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $product
        ]);
    }

    // Cập nhật thông tin sản phẩm
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json([
                'status' => 'error',
                'message' => 'Product not found'
            ], 404);
        }

        $product->update($request->all());

        return response()->json([
            'status' => 'success',
            'data' => $product
        ]);
    }

    // Xóa sản phẩm
    public function destroy($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json([
                'status' => 'error',
                'message' => 'Product not found'
            ], 404);
        }

        $product->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Product deleted successfully'
        ]);
    }
}
