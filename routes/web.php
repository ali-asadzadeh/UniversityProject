<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/register', [RegisterController::class, 'showRegistrationForm']);
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/', function () {
    return view('homePage');
});


Route::get('/', function () {
    return view('homePage');
});
Route::get('/admin', function () {
    return view('admin/homepage');
});
Route::get('/admin/products', function () {
    return view('admin/products');
});
Route::get('/admin/orders', function () {
    return view('admin/orders');
});
Route::get('/admin/users', function () {
    return view('admin/users');
});
Route::get('/admin/posts', function () {
    return view('admin/posts');
});
Route::get('/aboutUs', function () {
    return view('aboutUs');
});
Route::get('/login', function () {
    return view('auth/login');
});
Route::get('/register', function () {
    return view('auth/register');
});
Route::get('/ShoppingCart', function () {
    return view('ShoppingCart');
});
Route::get('/header', function () {
    return view('layouts/header');
});
Route::get('/footer', function () {
    return view('layouts/footer');
});
Route::get('/admin/layouts/sidebar', function () {
    return view('admin/layouts/sidebar');
});
Route::get('/admin/layouts/footer', function () {
    return view('admin/layouts/header');
});
