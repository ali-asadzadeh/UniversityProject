<!doctype html>
<html lang="en-fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/FontAwesome/css/all.css') }}">
    <title>پنل ادمین</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="font-kalameh">
<div class="grid grid-cols-12 h-screen">
    @include('admin.layouts.sidebar')
    <div class="col-span-10 bg-gray-50">
        @include('admin.layouts.header')
        <div class="bg-white row-span-11">
            <div class="mx-5 pt-3 text-[#4A9C7E] font-medium text-xl">
                ویرایش محصول
            </div>
            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 mx-4 mt-4 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">خطا!</strong>
                    <span class="block sm:inline">{{ implode('', $errors->all(':message')) }}</span>
                </div>
            @endif

            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green- mx-4 mt-4 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">موفقیت!</strong>
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif

            <form class="space-y-6 px-5 pb-3" action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="grid gap-5 grid-cols-2 mt-5">
                    <div>
                        <label for="name" class="block text-sm font-medium leading-6 text-gray-900">نام محصول:</label>
                        <div class="mt-2">
                            <input id="name" name="name" type="text" value="{{ old('name', $product->name) }}" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:outline-none focus:ring-[#4A9C7E] sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div>
                        <label for="category" class="block text-sm font-medium leading-6 text-gray-900">دسته بندی:</label>
                        <div class="mt-2">
                            <input id="category" name="category" type="text" value="{{ old('category', $product->category) }}" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:outline-none focus:ring-[#4A9C7E] sm:text-sm sm:leading-6">
                        </div>
                    </div>
                </div>
                <div class="grid gap-5 grid-cols-2 mt-5">
                    <div>
                        <label for="price" class="block text-sm font-medium leading-6 text-gray-900">قیمت:</label>
                        <div class="mt-2">
                            <input id="price" name="price" type="number" value="{{ old('price', $product->price) }}" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:outline-none focus:ring-[#4A9C7E] sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div>
                        <div>
                            <label for="status" class="block text-sm font-medium leading-6 text-gray-900">وضعیت:</label>
                            <div class="mt-2">
                                <select name="status" class="block w-full mt-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:outline-none focus:ring-[#4A9C7E] sm:text-sm sm:leading-6" required>
                                    <option value="" >وضعیت را انتخاب کنید</option>
                                    <option value="amazing" {{ $product->status == 'amazing' ? 'selected' : '' }}>شگفت انگیز</option>
                                    <option value="bestseller" {{ $product->status == 'user' ? 'bestseller' : '' }}>پر فروش</option>
                                    <option value="popular" {{ $product->status == 'user' ? 'popular' : '' }}>محبوب</option>
                                    <option value="hot" {{ $product->status == 'user' ? 'hot' : '' }}>داغ ترین</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid gap-5 grid-cols-2 mt-5">
                    <div>
                        <label for="image" class="block text-sm font-medium leading-6 text-gray-900">تصویر محصول:</label>
                        <div class="mt-2">
                            <label for="image" class="block w-full rounded-md border-0 py-1.5 shadow-sm text-center cursor-pointer focus:ring-2 focus:outline-none focus:ring-[#4A9C7E] sm:text-sm sm:leading-6 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400">
                                آپلود تصویر
                            </label>
                            <input id="image" name="image" type="file" accept="image/*" class="hidden">
                            @if ($product->image_path && file_exists(storage_path('app/public/' . $product->image_path)))
                                <div class="mt-2">
                                    <img src="{{ asset('storage/' . $product->image_path) }}" alt="Product Image" class="w-20 h-auto">
                                </div>
                            @else
                                <p class="text-sm text-gray-500 mt-2">تصویر موجود نیست</p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="grid gap-5 grid-cols-2 mt-5">
                    <div>
                        <a href="{{ url('admin/users/index') }}" class="flex w-full justify-center rounded-md px-3 py-1.5 text-sm font-semibold leading-6 shadow-sm text-white bg-[#E63946] hover:bg-[#D62839] focus:ring-4 focus:outline-none focus:ring-[#D62839]">لغو</a>
                    </div>
                    <div>
                        <button type="submit" class="flex w-full justify-center rounded-md px-3 py-1.5 text-sm font-semibold leading-6 shadow-sm text-white bg-[#5CAF90] hover:bg-[#4A9C7E] focus:ring-4 focus:outline-none focus:ring-[#4A9C7E]">ویرایش</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
<script src="{{ asset('assets/js/flowbite.min.js') }}"></script>
</body>
</html>

