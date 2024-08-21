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
        <div class="bg-white row-span-11 ">
            <div class="col-span-12 bg-gray-50 py-4 mx-3">
                <a href="{{ route('admin.posts.create') }}" class="text-white bg-[#5CAF90] hover:bg-[#4A9C7E] focus:outline-none focus:ring-[#4A9C7E] font-medium rounded text-sm px-4 py-1 text-center">
                    <i class="fa-solid fa-plus me-1"></i>
                    ایجاد پست جدید
                </a>
            </div>
            <div class="relative overflow-x-auto sm:rounded-lg col-span-12">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            #
                        </th>
                        <th scope="col" class="px-6 py-3">
                            آیدی
                        </th>
                        <th scope="col" class="px-6 py-3">
                            عنوان
                        </th>
                        <th scope="col" class="px-6 py-3">
                            توضیحات
                        </th>
                        <th scope="col" class="px-6 py-3">
                            قیمت
                        </th>
                        <th scope="col" class="px-6 py-3">
                            تصویر
                        </th>
                        <th scope="col" class="px-6 py-3">
                            تنظیمات
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($posts as $post)
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <td class="px-6 py-4">
                                {{ $loop->iteration }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $post->id }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $post->title }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $post->description }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $post->price }}
                            </td>
                            <td class="px-6 py-4">
                                @if($post->image_path && file_exists(storage_path('app/public/' . $post->image_path)))
                                    <img src="{{ asset('storage/' . $post->image_path) }}" alt="Product Image" class="w-20 h-auto">
                                @else
                                    <p>تصویر موجود نیست</p>
                                @endif
                            </td>
                            <td class="px-6 py-4 flex">
                                <div>
                                    <a href="{{ route('admin.posts.edit', $post->id) }}" class="font-medium text-[#5CAF90] hover:underline">
                                        <i class="fa-duotone fa-solid fa-pen-to-square me-1"></i>
                                        ویرایش
                                    </a>
                                </div>
                                <div>
                                    <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" onsubmit="return confirm('آیا مطمئن هستید؟');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="font-medium text-red-700 hover:underline ms-2">
                                            <i class="fa-duotone fa-solid fa-trash me-1"></i>
                                            حذف
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('assets/js/flowbite.min.js') }}"></script>
</body>
</html>

