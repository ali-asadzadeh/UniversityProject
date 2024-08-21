<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PostController;
Route::resource('products', ProductController::class);

Route::get('/', [PostController::class, 'homePage']);

Route::middleware('auth')->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/admin/products/index', [AdminController::class, 'productsIndex']);
    Route::get('/admin/orders/index', [AdminController::class, 'ordersIndex']);
    Route::get('/admin/posts/index', [AdminController::class, 'postsIndex']);
    // افزودن سایر مسیرهای ادمین در اینجا
});

// مسیرهای صفحات ثابت

Route::get('/aboutUs', function () {
    return view('aboutUs');
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

// مسیرهای ثبت‌نام و ورود
Route::get('/register', [RegisterController::class, 'showRegistrationForm']);
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/login', [LoginController::class, 'showLoginForm']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);

// مسیرهای بازیابی رمز عبور
Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');

// مسیرهای ادمین با میانه‌افزار auth
Route::middleware('auth')->group(function () {
    Route::get('/admin', function () {
        return view('admin/homepage');
    });

    Route::get('/admin/products/index', function () {
        return view('admin/products/index');
    });

    Route::get('/admin/orders/index', function () {
        return view('admin/orders/index');
    });

    Route::get('/admin/posts/index', function () {
        return view('admin/posts/index');
    });

    Route::get('/admin/layouts/sidebar', function () {
        return view('admin/layouts/sidebar');
    });

    Route::get('/admin/layouts/footer', function () {
        return view('admin/layouts/footer');
    });

    // مسیرهای مدیریت کاربران
    Route::get('/admin/users/index', [UserController::class, 'index'])->name('admin.users.index');
    Route::get('/admin/users/create', [UserController::class, 'create'])->name('admin.users.create');
    Route::post('/admin/users/store', [UserController::class, 'store'])->name('admin.users.store');
    Route::get('/admin/users/edit/{id}', [UserController::class, 'edit'])->name('admin.users.edit');
    Route::put('/admin/users/update/{id}', [UserController::class, 'update'])->name('admin.users.update');
    Route::delete('/admin/users/delete/{id}', [UserController::class, 'destroy'])->name('admin.users.destroy');

//     مسیرهای مدیریت محصولات
    Route::get('/admin/products/index', [productController::class, 'index'])->name('admin.products.index');
    Route::get('/admin/products/create', [productController::class, 'create'])->name('admin.products.create');
    Route::post('/admin/products/store', [productController::class, 'store'])->name('admin.products.store');
    Route::get('/admin/products/edit/{id}', [productController::class, 'edit'])->name('admin.products.edit');
    Route::put('/admin/products/update/{id}', [productController::class, 'update'])->name('admin.products.update');
    Route::delete('/admin/products/delete/{id}', [productController::class, 'destroy'])->name('admin.products.destroy');
//
//    // مسیرهای مدیریت سفارشات
//    Route::get('/admin/orders/index', [UserController::class, 'index'])->name('admin.orders.index');
//    Route::get('/admin/orders/create', [UserController::class, 'create'])->name('admin.orders.create');
//    Route::post('/admin/orders/store', [UserController::class, 'store'])->name('admin.orders.store');
//    Route::get('/admin/orders/edit/{id}', [UserController::class, 'edit'])->name('admin.orders.edit');
//    Route::put('/admin/orders/update/{id}', [UserController::class, 'update'])->name('admin.orders.update');
//    Route::delete('/admin/orders/delete/{id}', [UserController::class, 'destroy'])->name('admin.orders.destroy');
//
    // مسیرهای مدیریت پست ها
    Route::get('/admin/posts/index', [PostController::class, 'index'])->name('admin.posts.index');
    Route::get('/admin/posts/create', [PostController::class, 'create'])->name('admin.posts.create');
    Route::post('/admin/posts/store', [PostController::class, 'store'])->name('admin.posts.store');
    Route::get('/admin/posts/edit/{id}', [PostController::class, 'edit'])->name('admin.posts.edit');
    Route::put('/admin/posts/update/{id}', [PostController::class, 'update'])->name('admin.posts.update');
    Route::delete('/admin/posts/delete/{id}', [PostController::class, 'destroy'])->name('admin.posts.destroy');
});



