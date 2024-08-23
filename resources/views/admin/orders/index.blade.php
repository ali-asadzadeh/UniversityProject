<!doctype html>
<html lang="en-fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, order-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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
                            آیدی کاربر
                        </th>
                        <th scope="col" class="px-6 py-3">
                            کد پیگیری
                        </th>
                        <th scope="col" class="px-6 py-3">
                            تاریخ سفارش
                        </th>
                        <th scope="col" class="px-6 py-3">
                           جمع سفارش
                        </th>
                        <th scope="col" class="px-6 py-3">
                            وضعیت
                        </th>
                        <th scope="col" class="px-6 py-3">
                            تنظیمات
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($orders as $order)
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <td class="px-6 py-4">
                                {{ $loop->iteration }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $order->id }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $order->user_id }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $order->tracking_code }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $order->order_date }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $order->total_amount }} تومان
                            </td>
                            <td class="px-6 py-4">
                                {{ $order->status_in_persian }}
                            </td>

                            <td class="px-6 py-4 flex">
                                <div>
                                    <form action="{{ route('admin.orders.destroy', $order->id) }}" method="POST" onsubmit="return confirm('آیا مطمئن هستید؟');">
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

