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
use App\Http\Controllers\CountdownController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CartController;

// مسیر اصلی برای صفحه اصلی
Route::get('/', [HomeController::class, 'homePage']);

// مسیرهای محصولات
Route::resource('products', ProductController::class);
Route::get('/products', [ProductController::class, 'homepage']);

// مسیرهای Countdown
Route::get('/countdowns', [CountdownController::class, 'homepage']);

// مسیرهای ادمین با میانه‌افزار auth
Route::middleware('auth')->group(function () {
    // مسیرهای ادمین


    // مسیرهای مدیریت کاربران
    Route::get('/admin/users/index', [UserController::class, 'index'])->name('admin.users.index');
    Route::get('/admin/users/create', [UserController::class, 'create'])->name('admin.users.create');
    Route::post('/admin/users/store', [UserController::class, 'store'])->name('admin.users.store');
    Route::get('/admin/users/edit/{id}', [UserController::class, 'edit'])->name('admin.users.edit');
    Route::put('/admin/users/update/{id}', [UserController::class, 'update'])->name('admin.users.update');
    Route::delete('/admin/users/delete/{id}', [UserController::class, 'destroy'])->name('admin.users.destroy');

    // مسیرهای مدیریت محصولات
    Route::get('/admin/products/index', [ProductController::class, 'index'])->name('admin.products.index');
    Route::get('/admin/products/create', [ProductController::class, 'create'])->name('admin.products.create');
    Route::post('/admin/products/store', [ProductController::class, 'store'])->name('admin.products.store');
    Route::get('/admin/products/edit/{id}', [ProductController::class, 'edit'])->name('admin.products.edit');
    Route::put('/admin/products/update/{id}', [ProductController::class, 'update'])->name('admin.products.update');
    Route::delete('/admin/products/delete/{id}', [ProductController::class, 'destroy'])->name('admin.products.destroy');

    // مسیرهای مدیریت سفارشات
    Route::get('/admin/orders/index', [OrderController::class, 'index'])->name('admin.orders.index');
    Route::get('/admin/orders/create', [OrderController::class, 'create'])->name('admin.orders.create');
    Route::post('/admin/orders/store', [OrderController::class, 'store'])->name('admin.orders.store');
    Route::get('/admin/orders/edit/{id}', [OrderController::class, 'edit'])->name('admin.orders.edit');
    Route::put('/admin/orders/update/{id}', [OrderController::class, 'update'])->name('admin.orders.update');
    Route::delete('/admin/orders/delete/{id}', [OrderController::class, 'destroy'])->name('admin.orders.destroy');

    // مسیرهای مدیریت پست‌ها
    Route::get('/admin/posts/index', [PostController::class, 'index'])->name('admin.posts.index');
    Route::get('/admin/posts/create', [PostController::class, 'create'])->name('admin.posts.create');
    Route::post('/admin/posts/store', [PostController::class, 'store'])->name('admin.posts.store');
    Route::get('/admin/posts/edit/{id}', [PostController::class, 'edit'])->name('admin.posts.edit');
    Route::put('/admin/posts/update/{id}', [PostController::class, 'update'])->name('admin.posts.update');
    Route::delete('/admin/posts/delete/{id}', [PostController::class, 'destroy'])->name('admin.posts.destroy');

    // مسیرهای مدیریت Countdown
    Route::get('/admin/countdowns/index', [CountdownController::class, 'index'])->name('admin.countdowns.index');
    Route::get('/admin/countdowns/create', [CountdownController::class, 'create'])->name('admin.countdowns.create');
    Route::post('/admin/countdowns/store', [CountdownController::class, 'store'])->name('admin.countdowns.store');
    Route::get('/admin/countdowns/edit/{id}', [CountdownController::class, 'edit'])->name('admin.countdowns.edit');
    Route::put('/admin/countdowns/update/{id}', [CountdownController::class, 'update'])->name('admin.countdowns.update');
    Route::delete('/admin/countdowns/delete/{id}', [CountdownController::class, 'destroy'])->name('admin.countdowns.destroy');
});

// مسیرهای خرید و سبد خرید
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/ShoppingCart', [CartController::class, 'showCart'])->name('cart.show');
Route::delete('/cart/remove', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::post('/cart/update', [CartController::class, 'updateCart'])->name('cart.update');

// مسیرهای صفحات ثابت
Route::get('/aboutUs', function () {
    return view('aboutUs');
});

Route::get('/header', function () {
    return view('layouts/header');
});
Route::get('/footer', function () {
    return view('layouts/footer');
});
Route::get('/admin', function () {
    return view('admin/homepage');
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
// routes/web.php

Route::post('/order/create', [OrderController::class, 'createOrder'])->name('order.create');
Route::get('/order/success/{tracking_code}', function ($tracking_code) {
    return view('order.success', ['tracking_code' => $tracking_code]);
})->name('order.success');
Route::get('/success', [OrderController::class, 'showSuccessPage'])->name('success');
