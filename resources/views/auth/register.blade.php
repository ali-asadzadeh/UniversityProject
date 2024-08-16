<!doctype html>
<html lang="en-fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/FontAwesome/css/all.css') }}">
    <title>ثبت نام</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="font-kalameh">
<section>
    <div class="grid place-content-center h-screen bg-gray-50">
        <div>
            <p class="text-2xl text-center mb-4">
                <i class="fa-brands fa-shopify text-2xl text-[#4A9C7E]"></i>
                فروشگاه اینترنتی
            </p>
        </div>
        <div class="bg-white border rounded-lg block w-96 mx-auto">
            <h3 class="text-center mt-5 font-medium">ثبت نام حساب کاربری</h3>
            <form class="space-y-6 px-5 py-3" action="#" method="POST">
                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">ایمیل:</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:outline-none focus:ring-[#4A9C7E] sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">رمز عبور:</label>
                    </div>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:outline-none focus:ring-[#4A9C7E] sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">تکرار رمز عبور:</label>
                    </div>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:outline-none focus:ring-[#4A9C7E] sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="">
                    <button type="submit" class="flex w-full justify-center rounded-md px-3 py-1.5 text-sm font-semibold leading-6 shadow-sm text-white bg-[#5CAF90] hover:bg-[#4A9C7E] focus:ring-4 focus:outline-none focus:ring-[#4A9C7E]">ثبت نام</button>
                </div>
            </form>
            <div class="mx-6">
                <p class="mb-2 text-sm font-medium">
                    حساب کاربری دارید؟
                    <a href="{{ url('login') }}" class="text-[#5CAF90] hover:text-[#4A9C7E]">وارد شوید.</a>
                </p>
            </div>
        </div>
    </div>
</section>
<script src="{{ asset('assets/js/flowbite.min.js') }}"></script>
</body>
</html>

