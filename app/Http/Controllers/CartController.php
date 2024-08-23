<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Product;

class CartController extends Controller
{
    // افزودن محصول به سبد خرید
    public function addToCart(Request $request)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity', 1); // مقدار پیش‌فرض 1

        $product = Product::findOrFail($productId);

        $cart = Session::get('cart', []);

        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += $quantity;
        } else {
            $cart[$productId] = [
                'product' => $product,
                'quantity' => $quantity,
                'price' => $product->price,
            ];
        }

        Session::put('cart', $cart);

        return redirect()->route('cart.show');
    }

    // نمایش سبد خرید
    public function showCart()
    {
        $cart = Session::get('cart', []);

        // محاسبه مجموع قیمت کل
        $totalAmount = array_sum(array_map(function ($item) {
            return $item['price'] * $item['quantity'];
        }, $cart));

        return view('ShoppingCart', compact('cart', 'totalAmount'));
    }

    // بروزرسانی تعداد محصول در سبد خرید
    public function updateCart(Request $request)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');

        $cart = Session::get('cart', []);

        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] = $quantity;
        }

        Session::put('cart', $cart);

        return redirect()->route('cart.show');
    }


    // حذف محصول از سبد خرید
    public function removeFromCart(Request $request)
    {
        $productId = $request->input('product_id');

        $cart = Session::get('cart', []);

        if (isset($cart[$productId])) {
            unset($cart[$productId]);
        }

        Session::put('cart', $cart);

        return redirect()->route('cart.show');
    }
}
