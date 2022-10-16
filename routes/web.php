<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('/pages/index');
});

Route::get('/admin', function () {
    return view('/admin');
});

Route::get('/home-02', function () {
    return view('/pages/home-02');
});

Route::get('/home-03', function () {
    return view('/pages/home-03');
});

Route::get('/contact', function () {
    return view('/pages/contact');
});

Route::get('/product-detail', function () {
    return view('/pages/product-detail');
});

Route::get('/product', function () {
    return view('/pages/product');
});

Route::get('/shoping-cart', function () {
    return view('/pages/shoping-cart');
});

Route::get('/blog', function () {
    return view('/pages/blog');
});

Route::get('/blog-detail', function () {
    return view('/pages/blog-detail');
});

Route::get('/about', function () {
    return view('/pages/about');
});
