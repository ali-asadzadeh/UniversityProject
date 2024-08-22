<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function homePage()
    {
        // بارگذاری پست‌ها از پایگاه داده
        $products = Product::all();

        // ارسال پست‌ها به نمای homePage
        return view('homepage', ['products' => $products]);
    }

    public function index(): View
    {
        $products = Product::hydrate(DB::table('products')->get()->toArray());

        return view('admin.products.index', ['products' => $products]);
    }

    public function create(): View
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // تنظیمات اعتبارسنجی تصویر
            'price' => 'required|numeric',
            'status' => 'required|in:amazing,bestseller,popular,hot', // اعتبارسنجی وضعیت
        ]);

        // ذخیره تصویر
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        Product::create([
            'name' => $request->name,
            'category' => $request->category,
            'image_path' => $imagePath ?? '', // مسیر تصویر
            'price' => $request->price,
            'status' => $request->status, // ذخیره وضعیت
        ]);

        return redirect()->route('admin.products.index')->with('success', 'Product created successfully.');
    }

    public function edit($id): View
    {
        $product = Product::findOrFail($id); // پیدا کردن محصول با شناسه مشخص
        return view('admin.products.edit', ['product' => $product]); // ارسال محصول به نما
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // اعتبارسنجی تصویر
            'price' => 'required|numeric',
            'status' => 'required|in:amazing,bestseller,popular,hot', // اعتبارسنجی وضعیت
        ]);

        $product = Product::findOrFail($id); // پیدا کردن محصول با شناسه مشخص

        // به‌روزرسانی تصویر در صورت وجود
        if ($request->hasFile('image')) {
            if ($product->image_path && file_exists(storage_path('app/public/' . $product->image_path))) {
                unlink(storage_path('app/public/' . $product->image_path));
            }
            $imagePath = $request->file('image')->store('images', 'public');
        } else {
            $imagePath = $product->image_path;
        }

        // به‌روزرسانی اطلاعات محصول
        $product->update([
            'name' => $request->name,
            'category' => $request->category,
            'image_path' => $imagePath,
            'price' => $request->price,
            'status' => $request->status, // به‌روزرسانی وضعیت
            'updated_at' => now(),
        ]);

        return redirect()->route('admin.products.index')->with('success', 'محصول با موفقیت ویرایش شد.');
    }


    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        // حذف تصویر اگر وجود داشته باشد
        if ($product->image_path && file_exists(storage_path('app/public/' . $product->image_path))) {
            unlink(storage_path('app/public/' . $product->image_path));
        }

        // حذف محصول
        $product->delete();

        return redirect()->route('admin.products.index')->with('success', 'محصول با موفقیت حذف شد.');
    }



}
