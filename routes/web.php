<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// Đường dẫn cho trang chủ
Route::get('/', function () {
    return view('welcome');  // Sử dụng view 'welcome' hoặc view khác bạn đã tạo
})->name('/');

// Đường dẫn cho trang sản phẩm
Route::get('/product', function () {
    return view('product');
})->name('product');

// Đường dẫn cho trang danh bạ
Route::get('/directory', function () {
    return view('directory');
})->name('directory');

// Đường dẫn cho trang kiến thức
Route::get('/knowledge', function () {
    return view('knowledge');
})->name('knowledge');

// Đường dẫn cho trang liên hệ
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
