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
    <section>
        <div class="grid grid-cols-12 h-screen">
            @include('admin/layouts/sidebar')
            <div class="col-span-10 bg-gray-50">
                @include('admin/layouts/header')
                <div class="bg-white row-span-11 ">
                    <div class="h-[calc(100vh-5rem)] grid place-content-center text-center">
                        <h3 class="text-3xl">به پنل ادمین خوش آمدید.</h3>
                        <p class="w-8/12 mx-auto text-xl text-gray-500 text-justify my-3">این پنل به شما امکان می‌دهد تا به راحتی تمامی بخش‌های سایت را مدیریت و کنترل کنید. با استفاده از این ابزار قدرتمند، می‌توانید محتوا را به‌روزرسانی کنید، کاربران را مدیریت کنید، و تنظیمات مختلف سایت را تغییر دهید. هدف ما ارائه یک تجربه کاربری ساده و کارآمد برای مدیران سایت است تا بتوانند به بهترین شکل ممکن سایت خود را اداره کنند.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('assets/js/flowbite.min.js') }}"></script>
</body>
</html>

