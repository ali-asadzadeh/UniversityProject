<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // اعمال میانه‌افزار auth برای کنترلر
    public function __construct()
    {
        $this->middleware('auth');
    }

    // متد برای نمایش صفحه اصلی ادمین
    public function index()
    {
        return view('admin');
    }

    // متد برای نمایش صفحه محصولات
    public function productsIndex()
    {
        return view('admin.products.index');
    }

    // متد برای نمایش صفحه سفارشات
    public function ordersIndex()
    {
        return view('admin.orders.index');
    }

    // متد برای نمایش صفحه پست‌ها
    public function postsIndex()
    {
        return view('admin.posts.index');
    }
}
