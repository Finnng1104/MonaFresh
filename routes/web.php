<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index'); // Trang chủ
})->name('home');

Route::get('/about', function () {
    return view('client.about'); // Giới thiệu
})->name('about');

Route::get('/store', function () {
    return view('client.store'); // Cửa hàng
})->name('store');

Route::get('/directory', function () {
    return view('client.directory'); // Danh bạ nhà nông
})->name('directory');

Route::get('/knowledge', function () {
    return view('client.knowledge'); // Kiến thức
})->name('knowledge');

Route::get('/contact', function () {
    return view('client.contact'); // Liên hệ
})->name('contact');
