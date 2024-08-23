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
            <div class="relative overflow-x-auto sm:rounded-lg mt-5">
                <form class="space-y-6 px-5 py-3" action="{{ route('admin.users.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="grid gap-5 grid-cols-2 mt-5">
                        <div>
                            <label for="firstname" class="block text-sm font-medium leading-6 text-gray-900">نام:</label>
                            <div class="mt-2">
                                <input id="firstname" name="firstname" type="text" value="{{ $user->firstname }}" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:outline-none focus:ring-[#4A9C7E] sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div>
                            <label for="lastname" class="block text-sm font-medium leading-6 text-gray-900">نام خانوادگی:</label>
                            <div class="mt-2">
                                <input id="lastname" name="lastname" type="text" value="{{ $user->lastname }}" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:outline-none focus:ring-[#4A9C7E] sm:text-sm sm:leading-6">
                            </div>
                        </div>
                    </div>
                    <div class="grid gap-5 grid-cols-2 mt-5">
                        <div>
                            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">ایمیل:</label>
                            <div class="mt-2">
                                <input id="email" name="email" type="email" value="{{ $user->email }}" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:outline-none focus:ring-[#4A9C7E] sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div>
                            <label for="role" class="block text-sm font-medium leading-6 text-gray-900">انتخاب نقش:</label>
                            <select name="role" class="block w-full mt-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:outline-none focus:ring-[#4A9C7E] sm:text-sm sm:leading-6" required>
                                <option value="" disabled>نقش را انتخاب کنید</option>
                                <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>کاربر</option>
                                <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>ادمین</option>
                            </select>
                        </div>
                    </div>
                    <div class="grid gap-5 grid-cols-2 mt-5">
                        <div>
                            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">رمز عبور:</label>
                            <div class="mt-2">
                                <input id="password" name="password" type="password" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:outline-none focus:ring-[#4A9C7E] sm:text-sm sm:leading-6">
                            </div>
                            <small class="text-gray-600">در صورت عدم تغییر رمز عبور، این فیلد را خالی بگذارید.</small>
                        </div>
                        <div>
                            <label for="password_confirmation" class="block text-sm font-medium leading-6 text-gray-900">تکرار رمز عبور:</label>
                            <div class="mt-2">
                                <input id="password_confirmation" name="password_confirmation" type="password" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:outline-none focus:ring-[#4A9C7E] sm:text-sm sm:leading-6">
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
</div>
<script src="{{ asset('assets/js/flowbite.min.js') }}"></script>
</body>
</html>

