<!doctype html>
<html lang="en-fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/FontAwesome/css/all.css') }}">
    <title>Home Page</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="font-kalameh">
    @include('layouts/header')
    <main class="bg-gray-50">
        <section>
            <div class="container mx-auto">
                <div class="font-medium text-3xl pt-16">
                    <h3>سبد<span class="text-[#5CAF90]"> خرید</span></h3>
                </div>
                <div class="grid gap-5 grid-cols-12 pt-16">
                    <div class="col-span-3">
                        <div class="mx-auto">
                            <form action="{{ route('order.create') }}" method="POST">
                                @csrf
                                <div class="space-y-4 rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 sm:p-6">
                                    <h3 class="text-xl font-semibold">خلاصه<span class="text-[#5CAF90] "> سفارش</span></h3>
                                    <div class="space-y-4">
                                        <div class="space-y-2">
                                            <dl class="flex items-center justify-between gap-4">
                                                <dt class="text-base font-normal text-gray-500 dark:text-gray-400">قیمت کالاها</dt>
                                                <dd class="text-base font-medium text-gray-900 dark:text-white"><span>{{ $totalAmount }}</span> تومان</dd>
                                            </dl>

                                            <dl class="flex items-center justify-between gap-4">
                                                <dt class="text-base font-normal text-gray-500 dark:text-gray-400">تخفیف</dt>
                                                <dd class="text-base font-medium text-green-600"><span>0</span> تومان</dd>
                                            </dl>

                                            <dl class="flex items-center justify-between gap-4">
                                                <dt class="text-base font-normal text-gray-500 dark:text-gray-400">هزینه ارسال</dt>
                                                <dd class="text-base font-medium text-gray-900 dark:text-white"><span>0</span> تومان</dd>
                                            </dl>
                                        </div>
                                        <dl class="flex items-center justify-between gap-4 border-t border-gray-200 py-2 dark:border-gray-700">
                                            <dt class="text-base font-bold text-gray-900 dark:text-white">جمع سبد خرید</dt>
                                            <dd class="text-base font-bold text-gray-900 dark:text-white"><span>{{ $totalAmount }}</span> تومان</dd>
                                        </dl>
                                    </div>
                                    <input type="hidden" name="total_amount" value="{{ $totalAmount }}">
                                    <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                                    <input type="hidden" name="status" value="pending">
                                    <button type="submit" class="bg-[#4A9C7E] text-white hover:text-[#4A9C7E] hover:bg-white border border-[#4A9C7E] rounded-lg px-2 py-2 transition duration-300 flex w-full items-center justify-center bg-primary-700 text-sm font-medium">
                                        تایید و پرداخت سفارش
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="col-span-9">
                    @if(isset($cart) && !empty($cart))
                        @foreach($cart as $item)
                                <div class="rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 md:p-6 mb-5">
                                    <div class="space-y-4 md:flex md:items-center md:justify-between md:gap-6 md:space-y-0">
                                        <a href="#" class="shrink-0 md:order-1">
                                            <img src="{{ asset('storage/' . $item['product']->image_path) }}" alt="{{ $item['product']->name }}" class="w-[70px] h-[61px]">
                                        </a>
                                        <label for="counter-input-{{ $item['product']->id }}" class="sr-only">Choose quantity:</label>
                                        <div class="flex items-center justify-between md:order-3 md:justify-end">
                                            <div class="flex items-center">
                                                <form action="{{ route('cart.update') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="product_id" value="{{ $item['product']->id }}">
                                                    <button type="button" class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700" onclick="updateQuantity('{{ $item['product']->id }}', -1)">
                                                        <svg class="h-2.5 w-2.5 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                                                        </svg>
                                                    </button>
                                                    <input type="text" id="counter-input-{{ $item['product']->id }}" name="quantity" data-input-counter class="w-10 shrink-0 border-0 bg-transparent text-center text-sm font-medium text-gray-900 focus:outline-none focus:ring-0 dark:text-white" value="{{ $item['quantity'] }}" required />
                                                    <button type="button" class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700" onclick="updateQuantity('{{ $item['product']->id }}', 1)">
                                                        <svg class="h-2.5 w-2.5 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                            <div class="text-end md:order-4 md:w-32">
                                                <p class="text-base font-bold text-gray-900 dark:text-white"><span>{{ $item['price'] * $item['quantity'] }}</span> تومان</p>
                                            </div>
                                        </div>

                                        <div class="w-full min-w-0 flex-1 space-y-4 md:order-2 md:max-w-md">
                                            <a href="#" class="text-base font-medium text-gray-900 hover:underline dark:text-white">{{ $item['product']->name }}</a>

                                            <div class="flex items-center gap-4">
                                                <button type="button" class="inline-flex items-center text-sm font-medium text-gray-500 hover:text-gray-900 hover:underline dark:text-gray-400 dark:hover:text-white">
                                                    <i class="fa-light fa-heart me-2"></i>
                                                    اضافه به علاقه مندی
                                                </button>
                                                <form action="{{ route('cart.remove') }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="hidden" name="product_id" value="{{ $item['product']->id }}">
                                                    <button type="submit" class="inline-flex items-center text-sm font-medium text-red-600 hover:underline dark:text-red-500">
                                                        <i class="fa-duotone fa-solid fa-trash me-2"></i>
                                                        حذف
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        @endforeach
                    </div>
                    @else
                        <div class="col-span-9 mx-auto my-auto">
                            <p>سبد خرید شما خالی است.</p>
                        </div>
                    @endif
                </div>
            </div>
        </section>
    </main>
    @include('layouts/footer')
    <script>
        function updateQuantity(productId, change) {
            var quantityInput = document.getElementById('counter-input-' + productId);
            var currentQuantity = parseInt(quantityInput.value);
            var newQuantity = currentQuantity + change;

            if (newQuantity < 1) newQuantity = 1; // حداقل تعداد 1

            quantityInput.value = newQuantity;

            // ارسال فرم به سرور
            var form = quantityInput.closest('form');
            var quantityField = form.querySelector('input[name="quantity"]');
            quantityField.value = newQuantity;

            form.submit();
        }
    </script>

    <script src="{{ asset('assets/js/flowbite.min.js') }}"></script>
</body>
</html>
