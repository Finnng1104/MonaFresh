<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index'); // Trang chủ
})->name('home');

Route::get('/product', function () {
    return view('client.product'); // Cửa hàng
})->name('product');

Route::get('/directory', function () {
    return view('client.directory'); // Danh bạ nhà nông
})->name('directory');

Route::get('/knowledge', function () {
    return view('client.knowledge'); // Kiến thức
})->name('knowledge');

Route::get('/contact', function () {
    return view('client.contact'); // Liên hệ
})->name('contact');
