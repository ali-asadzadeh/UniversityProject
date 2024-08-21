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
            <form class="space-y-6 px-5 pb-3" action="{{ route('admin.posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT') <!-- این خط برای مشخص کردن نوع درخواست به PUT استفاده می‌شود -->

                <div class="grid gap-5 grid-cols-2 mt-5">
                    <div>
                        <label for="title" class="block text-sm font-medium leading-6 text-gray-900">عنوان:</label>
                        <div class="mt-2">
                            <input id="title" name="title" type="text" value="{{ old('title', $post->title) }}" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:outline-none focus:ring-[#4A9C7E] sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div>
                        <label for="description" class="block text-sm font-medium leading-6 text-gray-900">توضیحات:</label>
                        <div class="mt-2">
                            <input id="description" name="description" type="text" value="{{ old('description', $post->description) }}" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:outline-none focus:ring-[#4A9C7E] sm:text-sm sm:leading-6">
                        </div>
                    </div>
                </div>
                <div class="grid gap-5 grid-cols-2 mt-5">
                    <div>
                        <label for="price" class="block text-sm font-medium leading-6 text-gray-900">قیمت:</label>
                        <div class="mt-2">
                            <input id="price" name="price" type="number" value="{{ old('price', $post->price) }}" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:outline-none focus:ring-[#4A9C7E] sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div>
                        <label for="image" class="block text-sm font-medium leading-6 text-gray-900">تصویر:</label>
                        <div class="mt-2">
                            <label for="image" class="block w-full rounded-md border-0 py-1.5 shadow-sm text-center cursor-pointer focus:ring-2 focus:outline-none focus:ring-[#4A9C7E] sm:text-sm sm:leading-6 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400">
                                آپلود تصویر
                            </label>
                            <input id="image" name="image" type="file" accept="image/*" class="hidden">
                            @if ($post->image_path && file_exists(storage_path('app/public/' . $post->image_path)))
                                <div class="mt-2">
                                    <img src="{{ asset('storage/' . $post->image_path) }}" alt="Product Image" class="w-20 h-auto">
                                </div>
                            @else
                                <p class="text-sm text-gray-500 mt-2">تصویر موجود نیست</p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="">
                    <button type="submit" class="flex w-full justify-center rounded-md px-3 py-1.5 text-sm font-semibold leading-6 shadow-sm text-white bg-[#5CAF90] hover:bg-[#4A9C7E] focus:ring-4 focus:outline-none focus:ring-[#4A9C7E]">ذخیره تغییرات</button>
                </div>
            </form>

            <script>
                function previewImage(event) {
                    const file = event.target.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            const imgElement = document.getElementById('image-preview');
                            imgElement.src = e.target.result;
                            imgElement.classList.remove('hidden');
                        };
                        reader.readAsDataURL(file);
                    } else {
                        // اگر هیچ فایلی انتخاب نشده، پیش‌نمایش تصویر را پنهان کنید
                        const imgElement = document.getElementById('image-preview');
                        imgElement.src = '';
                        imgElement.classList.add('hidden');
                    }
                }
            </script>

        </div>
    </div>
</div>
<script src="{{ asset('assets/js/flowbite.min.js') }}"></script>
</body>
</html>

