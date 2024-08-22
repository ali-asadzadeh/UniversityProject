<?php

namespace App\Http\Controllers;

use App\Models\Countdown;
use App\Models\Product;
use App\Models\Post;

class HomeController extends Controller
{
    public function homePage()
    {
        $countdowns = Countdown::orderBy('end_at', 'desc')->get();
        $products = Product::all();
        $posts = Post::all();

        return view('homepage', compact('countdowns', 'products', 'posts'));
    }

}
