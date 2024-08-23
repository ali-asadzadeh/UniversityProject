<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class OrderController extends Controller
{
    // نمایش لیست سفارش‌ها برای ادمین
    public function index()
    {
        $orders = Order::with('user')->get();
        return view('admin.orders.index', compact('orders'));
    }

    // فرم ایجاد سفارش برای ادمین
    public function create()
    {
        $users = User::all();
        return view('admin.orders.create', compact('users'));
    }

    // ذخیره سفارش جدید برای ادمین
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'tracking_code' => 'required|unique:orders',
            'status' => 'required',
            'items' => 'required|array',
            'items.*.product_id' => 'required|exists:products,id',
            'items.*.quantity' => 'required|integer|min:1',
        ]);

        $totalAmount = 0;
        $totalItems = 0;

        foreach ($request->input('items') as $item) {
            $product = Product::find($item['product_id']);
            $totalAmount += $product->price * $item['quantity'];
            $totalItems += $item['quantity'];
        }

        $order = Order::create([
            'user_id' => $request->input('user_id'),
            'tracking_code' => $request->input('tracking_code'),
            'order_date' => now(),
            'status' => $request->input('status'),
            'total_amount' => $totalAmount,
            'total_items' => $totalItems,
        ]);

        // ذخیره آیتم‌های سفارش در جدول مربوطه (در صورت نیاز)
        foreach ($request->input('items') as $item) {
            $order->items()->create([
                'product_id' => $item['product_id'],
                'quantity' => $item['quantity'],
                'price' => $product->price,
            ]);
        }

        return redirect()->route('admin.orders.index');
    }

    // فرم ویرایش سفارش برای ادمین
    public function edit($id)
    {
        $order = Order::findOrFail($id);
        $users = User::all();
        return view('admin.orders.edit', compact('order', 'users'));
    }

    // به‌روزرسانی سفارش برای ادمین
    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'tracking_code' => 'required|unique:orders,tracking_code,' . $id,
            'status' => 'required',
            'items' => 'required|array',
            'items.*.product_id' => 'required|exists:products,id',
            'items.*.quantity' => 'required|integer|min:1',
        ]);

        $order = Order::findOrFail($id);

        $totalAmount = 0;
        $totalItems = 0;

        foreach ($request->input('items') as $item) {
            $product = Product::find($item['product_id']);
            $totalAmount += $product->price * $item['quantity'];
            $totalItems += $item['quantity'];
        }

        $order->update([
            'user_id' => $request->input('user_id'),
            'tracking_code' => $request->input('tracking_code'),
            'status' => $request->input('status'),
            'total_amount' => $totalAmount,
            'total_items' => $totalItems,
        ]);

        // به‌روزرسانی آیتم‌های سفارش در صورت لزوم
        // ...

        return redirect()->route('admin.orders.index');
    }

    // حذف سفارش برای ادمین
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->route('admin.orders.index');
    }

    public function showSuccessPage(Request $request)
    {
        // دریافت کد پیگیری از کوئری استرینگ (Query String)
        $trackingCode = $request->query('tracking_code');

        // نمایش صفحه موفقیت با کد پیگیری
        return view('success', compact('trackingCode'));
    }


    public function createOrder(Request $request)
    {
        // اعتبارسنجی ورودی‌ها
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'status' => 'required|string',
            'total_amount' => 'required|numeric|min:0', // افزودن اعتبارسنجی برای total_amount
        ]);

        // ایجاد سفارش جدید
        $order = new Order();
        $order->user_id = $validated['user_id'];
        $order->status = $validated['status'];
        $order->total_amount = $validated['total_amount']; // اضافه کردن total_amount
        $order->tracking_code = $this->generateTrackingCode(); // تولید کد پیگیری منحصر به فرد
        $order->save();

        // خالی کردن سبد خرید در سشن
        $request->session()->forget('cart');

        // انتقال به صفحه موفقیت با کد پیگیری
        return redirect()->route('success', ['tracking_code' => $order->tracking_code]);
    }




// تابع برای تولید کد پیگیری منحصر به فرد
    protected function generateTrackingCode()
    {
        return 'ORD-' . Str::upper(Str::random(10)); // تولید کد تصادفی برای کد پیگیری
    }





}
