<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
// Trang chủ
Route::get('/', [ProductController::class, 'index'])->name('home');
// Cửa hàng
Route::get('/product', function () {
    return view('client.product'); // Trang sản phẩm tổng quát
})->name('product');

// Danh mục sản phẩm
Route::get('/product/category/{category}', function ($category) {
    // Đây là controller xử lý việc hiển thị các sản phẩm theo danh mục
    return view('client.category', ['category' => $category]);
})->name('product.category');

// Danh bạ nhà nông
Route::get('/directory', function () {
    return view('client.directory');
})->name('directory');

// Kiến thức
Route::get('/knowledge', function () {
    return view('client.knowledge');
})->name('knowledge');

// Liên hệ
Route::get('/contact', function () {
    return view('client.contact');
})->name('contact');

Route::get('/search', function () {
    return view('client.search'); // Tạo một view search.blade.php để hiển thị kết quả tìm kiếm
})->name('search');
