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
                <div class="text-center py-64">
                    <div class="border-2 w-2/6 border-gray-200 mx-auto p-5 rounded-lg">
                        <h1 class="text-2xl font-bold">سفارش شما با موفقیت ثبت شد!</h1>
                        <p class="mt-4">کد پیگیری سفارش شما: <span class="cursor-pointer bg-gray-200 px-2 rounded" onclick="copyText(this)">{{ $trackingCode }}</span></p>
                        <p class="mt-2">لطفاً این کد پیگیری را برای پیگیری وضعیت سفارش خود نگه‌دارید.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('layouts/footer')
    <script>
        function copyText(element) {
            const textToCopy = element.innerText;
            navigator.clipboard.writeText(textToCopy).then(function() {
                alert('کد پیگیری کپی شد!');
            }, function(err) {
                alert('کد پیگیری کپی نشد: ', err);
            });
        }
    </script>
    <script src="{{ asset('assets/js/flowbite.min.js') }}"></script>
</body>
</html>
