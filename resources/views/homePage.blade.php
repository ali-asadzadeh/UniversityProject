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
    <header>
        <section>
            <nav class="bg-gray-50 w-full border-b">
                <div class="container mx-auto items-center justify-between py-4">
                    <div class="grid gap-5 grid-cols-2 xl:hidden mx-4">
                        <div>
                            <i class="fa-brands fa-shopify text-2xl text-[#4A9C7E] me-1"></i>
                            <a href="#" class="text-[#4A9C7E] text-2xl">فروشگاه</a>
                        </div>
                        <div class="ms-auto">
                            <button data-collapse-toggle="navbar-default" type="button" class=" items-center p-2.5 w-10 h-0.50 justify-center text-sm text-[#4A9C7E] rounded-lg xl:hidden bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-default" aria-expanded="false">
                                <span class="sr-only">Open main menu</span>
                                <svg class="w-5 h-5 text-[#4A9C7E]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <ul class="w-full xl:flex xl:flex-row hidden" id="navbar-default">
                        <li class="hidden xl:block order-1">
                            <i class="fa-brands fa-shopify text-2xl text-[#4A9C7E] me-1"></i>
                            <a href="#" class="text-[#4A9C7E] text-2xl">فروشگاه</a>
                        </li>
                        <li class="order-2 m-auto">
                            <ul class="xl:flex">
                                <li>
                                    <a href="#" class="block text-black hover:text-[#4A9C7E]  transition duration-300 transition duration-300 mx-5">
                                        صفحه اصلی
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="block text-black hover:text-[#4A9C7E] transition duration-300 mx-5">
                                        فروشگاه
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="block text-black hover:text-[#4A9C7E] transition duration-300 mx-5">
                                        وبلاگ
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="block text-black hover:text-[#4A9C7E] transition duration-300 mx-5">
                                        درباره ما
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="my-auto text-center order-4">
                            <a href="#" class="bg-[#4A9C7E] text-white hover:text-[#4A9C7E] hover:bg-white border border-[#4A9C7E] rounded-lg px-2 py-1 transition duration-300">
                                ورود / ثبت نام
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </section>
    </header>
    <main class="bg-gray-50">
        <section>
            <div class="container mx-auto py-5 md:py-10">
                <div id="default-carousel" class="relative w-full px-4" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative overflow-hidden rounded-lg h-[200px] md:h-[600px]">
                        <div class="hidden duration-700 ease-in-out rounded" data-carousel-item>
                            <img src="{{ asset('assets/images/pexels-lum3n-44775-1028599.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                        </div>
                        <div class="hidden duration-700 ease-in-out rounded" data-carousel-item>
                            <img src="{{ asset('assets/images/pexels-janetrangdoan-1128678.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container mx-auto my-4 md:mb-10 px-4">
                <div class="grid gap-10 grid-cols-1 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 text-center">
                    <div class="bg-gradient-to-b from-[#F8F9D9]/80 hover:bg-[#F8F9D9]/40 rounded-md p-4">
                        <div class="border border-white shadow-lg bg-white rounded-md p-4">
                            <i class="fa-light fa-cup-straw-swoosh text-5xl text-[#5CAF90] my-1"></i>
                            <a href="#" class="block mt-2 text-xl">نوشیدنی</a>
                            <span class="text-gray-700 text-xs">458 مورد</span>
                        </div>
                    </div>
                    <div class="bg-gradient-to-b from-[#ECF0FE]/80 hover:bg-[#ECF0FE]/40 rounded-md p-4">
                        <div class="border border-white shadow-lg bg-white rounded-md p-4">
                            <i class="fa-light fa-burger-fries text-5xl text-[#5CAF90] my-1"></i>
                            <a href="#" class="block mt-2 text-xl">میان وعده</a>
                            <span class="text-gray-700 text-xs">458 مورد</span>
                        </div>
                    </div>
                    <div class="bg-gradient-to-b from-[#FCE0F4]/80 hover:bg-[#FCE0F4]/40 rounded-md p-4">
                        <div class="border border-white shadow-lg bg-white rounded-md p-4">
                            <i class="fa-light fa-jug text-5xl text-[#5CAF90] my-1"></i>
                            <a href="#" class="block mt-2 text-xl">لبنیات</a>
                            <span class="text-gray-700 text-xs">458 مورد</span>
                        </div>
                    </div>
                    <div class="bg-gradient-to-b from-[#FEEBEA]/80 hover:bg-[#FEEBEA]/40 rounded-md p-4">
                        <div class="border border-white shadow-lg bg-white rounded-md p-4">
                            <i class="fa-light fa-salad text-5xl text-[#5CAF90] my-1"></i>
                            <a href="#" class="block mt-2 text-xl">سبزیجات</a>
                            <span class="text-gray-700 text-xs">458 مورد</span>
                        </div>
                    </div>
                    <div class="bg-gradient-to-b from-[#E3FCE3]/80 hover:bg-[#E3FCE3]/40 rounded-md p-4">
                        <div class="border border-white shadow-lg bg-white rounded-md p-4">
                            <i class="fa-light fa-baguette text-5xl text-[#5CAF90] my-1"></i>
                            <a href="#" class="block mt-2 text-xl">نان</a>
                            <span class="text-gray-700 text-xs">458 مورد</span>
                        </div>
                    </div>
                    <div class="bg-gradient-to-b from-[#FEF7EE]/80 hover:bg-[#FEF7EE]/40 rounded-md p-4">
                        <div class="border border-white shadow-lg bg-white rounded-md p-4">
                            <i class="fa-light fa-peach text-5xl text-[#5CAF90] my-1"></i>
                            <a href="#" class="block mt-2 text-xl">میوه</a>
                            <span class="text-gray-700 text-xs">5 مورد</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container mx-auto my-4 md:mb-10 md:mt-32">
                    <div class="grid md:gap-10 grid-cols-1 md:grid-cols-2 lg:grid-cols-4 my-4 md:my-10">
                    <div class="mx-auto md:mx-0">
                        <p class="font-bold text-2xl">پیشنهاد <span class="text-[#5CAF90]">شگفت انگیز</span></p>
                    </div>
                    <div class="flex flex-row justify-end col-span-3 font-kalameh font-medium text-xl mx-auto md:mx-0">
                        <div class="mx-2 p-2 rounded bg-white">24</div>
                        <span class="py-2">:</span>
                        <div class="mx-2 p-2 rounded bg-white">13</div>
                        <span class="py-2">:</span>
                        <div class="mx-2 p-2 rounded bg-white">56</div>
                    </div>
                </div>
                <div class="grid gap-5 grid-cols-1 md:grid-cols-3 lg:grid-cols-4 mx-4 md:mx-0">
                    <div class="card border border-gray-100 rounded bg-white duration-300 ease-in-out hover:shadow-lg">
                        <div class="card-img border-b">
                            <img src="{{ asset('assets/images/1_1.jpg') }}" alt="" class="w-[327px] h-[285px]">
                        </div>
                        <div class="card-body">
                            <div class="mt-2 ms-4 text-sm text-gray-400">
                                <p>تنقلات</p>
                            </div>
                            <div class="ms-4 mb-2">
                                <h3 class="font-medium">چیپس سیب زمینی، طعم خامه و پیاز</h3>
                            </div>
                            <div class="grid gap-5 grid-cols-2 mx-4">
                                <div>
                                    <p><span>78</span> تومان</p>
                                </div>
                                <div class="ms-auto">
                                    <a href="">
                                        <i class="fa-duotone fa-solid fa-star text-sm"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-duotone fa-solid fa-star text-sm"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-duotone fa-solid fa-star text-amber-400 text-sm"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-duotone fa-solid fa-star text-amber-400 text-sm"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-duotone fa-solid fa-star text-amber-400 text-sm"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="mx-4 my-3">
                            <button type="button" class="text-white bg-[#5CAF90] hover:bg-[#4A9C7E] focus:ring-4 focus:outline-none focus:ring-[#4A9C7E] font-medium rounded text-sm px-4 py-2 text-center w-full">افزودن به سبد خرید</button>
                        </div>
                    </div>
                    <div class="card border border-gray-100 rounded bg-white duration-300 ease-in-out hover:shadow-lg">
                        <div class="card-img border-b">
                            <img src="{{ asset('assets/images/2_1.jpg') }}" alt="" class="w-[327px] h-[285px]">
                        </div>
                        <div class="card-body">
                            <div class="mt-2 ms-4 text-sm text-gray-400">
                                <p>تنقلات</p>
                            </div>
                            <div class="ms-4 mb-2">
                                <h3 class="font-medium">چیپس سیب زمینی، طعم خامه و پیاز</h3>
                            </div>
                            <div class="grid gap-5 grid-cols-2 mx-4">
                                <div>
                                    <p><span>78</span> تومان</p>
                                </div>
                                <div class="ms-auto">
                                    <a href="">
                                        <i class="fa-duotone fa-solid fa-star text-sm"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-duotone fa-solid fa-star text-sm"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-duotone fa-solid fa-star text-amber-400 text-sm"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-duotone fa-solid fa-star text-amber-400 text-sm"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-duotone fa-solid fa-star text-amber-400 text-sm"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="mx-4 my-3">
                            <button type="button" class="text-white bg-[#5CAF90] hover:bg-[#4A9C7E] focus:ring-4 focus:outline-none focus:ring-[#4A9C7E] font-medium rounded text-sm px-4 py-2 text-center w-full">افزودن به سبد خرید</button>
                        </div>
                    </div>
                    <div class="card border border-gray-100 rounded bg-white duration-300 ease-in-out hover:shadow-lg">
                        <div class="card-img border-b">
                            <img src="{{ asset('assets/images/3_1.jpg') }}" alt="">
                        </div>
                        <div class="card-body">
                            <div class="mt-2 ms-4 text-sm text-gray-400">
                                <p>تنقلات</p>
                            </div>
                            <div class="ms-4 mb-2">
                                <h3 class="font-medium">چیپس سیب زمینی، طعم خامه و پیاز</h3>
                            </div>
                            <div class="grid gap-5 grid-cols-2 mx-4">
                                <div>
                                    <p><span>78</span> تومان</p>
                                </div>
                                <div class="ms-auto">
                                    <a href="">
                                        <i class="fa-duotone fa-solid fa-star text-sm"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-duotone fa-solid fa-star text-sm"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-duotone fa-solid fa-star text-amber-400 text-sm"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-duotone fa-solid fa-star text-amber-400 text-sm"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-duotone fa-solid fa-star text-amber-400 text-sm"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="mx-4 my-3">
                            <button type="button" class="text-white bg-[#5CAF90] hover:bg-[#4A9C7E] focus:ring-4 focus:outline-none focus:ring-[#4A9C7E] font-medium rounded text-sm px-4 py-2 text-center w-full">افزودن به سبد خرید</button>
                        </div>
                    </div>
                    <div class="card border border-gray-100 rounded bg-white duration-300 ease-in-out hover:shadow-lg">
                        <div class="card-img border-b">
                            <img src="{{ asset('assets/images/4_1.jpg') }}" alt="">
                        </div>
                        <div class="card-body">
                            <div class="mt-2 ms-4 text-sm text-gray-400">
                                <p>تنقلات</p>
                            </div>
                            <div class="ms-4 mb-2">
                                <h3 class="font-medium">چیپس سیب زمینی، طعم خامه و پیاز</h3>
                            </div>
                            <div class="grid gap-5 grid-cols-2 mx-4">
                                <div>
                                    <p><span>78</span> تومان</p>
                                </div>
                                <div class="ms-auto">
                                    <a href="">
                                        <i class="fa-duotone fa-solid fa-star text-sm"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-duotone fa-solid fa-star text-sm"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-duotone fa-solid fa-star text-amber-400 text-sm"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-duotone fa-solid fa-star text-amber-400 text-sm"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-duotone fa-solid fa-star text-amber-400 text-sm"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="mx-4 my-3">
                            <button type="button" class="text-white bg-[#5CAF90] hover:bg-[#4A9C7E] focus:ring-4 focus:outline-none focus:ring-[#4A9C7E] font-medium rounded text-sm px-4 py-2 text-center w-full">افزودن به سبد خرید</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container mx-auto my-4 md:mb-10 md:mt-32">
                <div class="grid gap-5 grid-cols-1 md:grid-cols-2 lg:grid-cols-4 mx-4 md:mx-0">
                    <div>
                        <img src="{{ asset('assets/images/pexels-saizstudio-19798788.jpg') }}" alt="" class="w-[329px] h-[448px] rounded">
                    </div>
                    <div>
                        <div class="font-medium text-xl mb-5">
                           <h3>محصولات<span class="text-[#5CAF90]"> پرفروش</span></h3>
                        </div>
                        <div class="grid gap-2 grid-cols-1">
                            <div class="bg-white border border-gray-100 rounded duration-300 ease-in-out hover:shadow-lg">
                                <div class="grid grid-cols-3 relative">
                                    <div class="mx-auto my-auto">
                                        <img src="{{ asset('assets/images/7_2.jpg') }}" alt="" class="w-[70px] h-[61px]">
                                    </div>
                                    <div class="col-span-2 pb-2">
                                        <div>
                                            <h3 class="text-gray-600 my-2 font-medium">گردو مرغوب درجه 1</h3>
                                            <p class="text-gray-400 text-xs mb-2">مرکبات</p>
                                        </div>
                                        <div>
                                            <p class="text-sm">38 <span>تومان</span></p>
                                        </div>
                                    </div>
                                    <div class="text-end me-3 opacity-0 transition-opacity duration-300 ease-in-out hover:opacity-100 absolute bottom-2 left-0 ps-72 pt-14">
                                        <a href="" class="border border-1 border-[#5CAF90] rounded">
                                            <i class="fa-light fa-basket-shopping text-[#5CAF90] p-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white border border-gray-100 rounded duration-300 ease-in-out hover:shadow-lg">
                                <div class="grid grid-cols-3 relative">
                                    <div class="mx-auto my-auto">
                                        <img src="{{ asset('assets/images/7_2.jpg') }}" alt="" class="w-[70px] h-[61px]">
                                    </div>
                                    <div class="col-span-2 pb-2">
                                        <div>
                                            <h3 class="text-gray-600 my-2 font-medium">گردو مرغوب درجه 1</h3>
                                            <p class="text-gray-400 text-xs mb-2">مرکبات</p>
                                        </div>
                                        <div>
                                            <p class="text-sm">38 <span>تومان</span></p>
                                        </div>
                                    </div>
                                    <div class="text-end me-3 opacity-0 transition-opacity duration-300 ease-in-out hover:opacity-100 absolute bottom-2 left-0 ps-72 pt-14">
                                        <a href="" class="border border-1 border-[#5CAF90] rounded">
                                            <i class="fa-light fa-basket-shopping text-[#5CAF90] p-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white border border-gray-100 rounded duration-300 ease-in-out hover:shadow-lg">
                                <div class="grid grid-cols-3 relative">
                                    <div class="mx-auto my-auto">
                                        <img src="{{ asset('assets/images/7_2.jpg') }}" alt="" class="w-[70px] h-[61px]">
                                    </div>
                                    <div class="col-span-2 pb-2">
                                        <div>
                                            <h3 class="text-gray-600 my-2 font-medium">گردو مرغوب درجه 1</h3>
                                            <p class="text-gray-400 text-xs mb-2">مرکبات</p>
                                        </div>
                                        <div>
                                            <p class="text-sm">38 <span>تومان</span></p>
                                        </div>
                                    </div>
                                    <div class="text-end me-3 opacity-0 transition-opacity duration-300 ease-in-out hover:opacity-100 absolute bottom-2 left-0 ps-72 pt-14">
                                        <a href="" class="border border-1 border-[#5CAF90] rounded">
                                            <i class="fa-light fa-basket-shopping text-[#5CAF90] p-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white border border-gray-100 rounded duration-300 ease-in-out hover:shadow-lg">
                                <div class="grid grid-cols-3 relative">
                                    <div class="mx-auto my-auto">
                                        <img src="{{ asset('assets/images/7_2.jpg') }}" alt="" class="w-[70px] h-[61px]">
                                    </div>
                                    <div class="col-span-2 pb-2">
                                        <div>
                                            <h3 class="text-gray-600 my-2 font-medium">گردو مرغوب درجه 1</h3>
                                            <p class="text-gray-400 text-xs mb-2">مرکبات</p>
                                        </div>
                                        <div>
                                            <p class="text-sm">38 <span>تومان</span></p>
                                        </div>
                                    </div>
                                    <div class="text-end me-3 opacity-0 transition-opacity duration-300 ease-in-out hover:opacity-100 absolute bottom-2 left-0 ps-72 pt-14">
                                        <a href="" class="border border-1 border-[#5CAF90] rounded">
                                            <i class="fa-light fa-basket-shopping text-[#5CAF90] p-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="font-medium text-xl mb-5">
                            <h3>محصولات<span class="text-[#5CAF90]"> پرفروش</span></h3>
                        </div>
                        <div class="grid gap-2 grid-cols-1">
                            <div class="bg-white border border-gray-100 rounded duration-300 ease-in-out hover:shadow-lg">
                                <div class="grid grid-cols-3 relative">
                                    <div class="mx-auto my-auto">
                                        <img src="{{ asset('assets/images/7_2.jpg') }}" alt="" class="w-[70px] h-[61px]">
                                    </div>
                                    <div class="col-span-2 pb-2">
                                        <div>
                                            <h3 class="text-gray-600 my-2 font-medium">گردو مرغوب درجه 1</h3>
                                            <p class="text-gray-400 text-xs mb-2">مرکبات</p>
                                        </div>
                                        <div>
                                            <p class="text-sm">38 <span>تومان</span></p>
                                        </div>
                                    </div>
                                    <div class="text-end me-3 opacity-0 transition-opacity duration-300 ease-in-out hover:opacity-100 absolute bottom-2 left-0 ps-72 pt-14">
                                        <a href="" class="border border-1 border-[#5CAF90] rounded">
                                            <i class="fa-light fa-basket-shopping text-[#5CAF90] p-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white border border-gray-100 rounded duration-300 ease-in-out hover:shadow-lg">
                                <div class="grid grid-cols-3 relative">
                                    <div class="mx-auto my-auto">
                                        <img src="{{ asset('assets/images/7_2.jpg') }}" alt="" class="w-[70px] h-[61px]">
                                    </div>
                                    <div class="col-span-2 pb-2">
                                        <div>
                                            <h3 class="text-gray-600 my-2 font-medium">گردو مرغوب درجه 1</h3>
                                            <p class="text-gray-400 text-xs mb-2">مرکبات</p>
                                        </div>
                                        <div>
                                            <p class="text-sm">38 <span>تومان</span></p>
                                        </div>
                                    </div>
                                    <div class="text-end me-3 opacity-0 transition-opacity duration-300 ease-in-out hover:opacity-100 absolute bottom-2 left-0 ps-72 pt-14">
                                        <a href="" class="border border-1 border-[#5CAF90] rounded">
                                            <i class="fa-light fa-basket-shopping text-[#5CAF90] p-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white border border-gray-100 rounded duration-300 ease-in-out hover:shadow-lg">
                                <div class="grid grid-cols-3 relative">
                                    <div class="mx-auto my-auto">
                                        <img src="{{ asset('assets/images/7_2.jpg') }}" alt="" class="w-[70px] h-[61px]">
                                    </div>
                                    <div class="col-span-2 pb-2">
                                        <div>
                                            <h3 class="text-gray-600 my-2 font-medium">گردو مرغوب درجه 1</h3>
                                            <p class="text-gray-400 text-xs mb-2">مرکبات</p>
                                        </div>
                                        <div>
                                            <p class="text-sm">38 <span>تومان</span></p>
                                        </div>
                                    </div>
                                    <div class="text-end me-3 opacity-0 transition-opacity duration-300 ease-in-out hover:opacity-100 absolute bottom-2 left-0 ps-72 pt-14">
                                        <a href="" class="border border-1 border-[#5CAF90] rounded">
                                            <i class="fa-light fa-basket-shopping text-[#5CAF90] p-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white border border-gray-100 rounded duration-300 ease-in-out hover:shadow-lg">
                                <div class="grid grid-cols-3 relative">
                                    <div class="mx-auto my-auto">
                                        <img src="{{ asset('assets/images/7_2.jpg') }}" alt="" class="w-[70px] h-[61px]">
                                    </div>
                                    <div class="col-span-2 pb-2">
                                        <div>
                                            <h3 class="text-gray-600 my-2 font-medium">گردو مرغوب درجه 1</h3>
                                            <p class="text-gray-400 text-xs mb-2">مرکبات</p>
                                        </div>
                                        <div>
                                            <p class="text-sm">38 <span>تومان</span></p>
                                        </div>
                                    </div>
                                    <div class="text-end me-3 opacity-0 transition-opacity duration-300 ease-in-out hover:opacity-100 absolute bottom-2 left-0 ps-72 pt-14">
                                        <a href="" class="border border-1 border-[#5CAF90] rounded">
                                            <i class="fa-light fa-basket-shopping text-[#5CAF90] p-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="font-medium text-xl mb-5">
                            <h3>محصولات<span class="text-[#5CAF90]"> پرفروش</span></h3>
                        </div>
                        <div class="grid gap-2 grid-cols-1">
                            <div class="bg-white border border-gray-100 rounded duration-300 ease-in-out hover:shadow-lg">
                                <div class="grid grid-cols-3 relative">
                                    <div class="mx-auto my-auto">
                                        <img src="{{ asset('assets/images/7_2.jpg') }}" alt="" class="w-[70px] h-[61px]">
                                    </div>
                                    <div class="col-span-2 pb-2">
                                        <div>
                                            <h3 class="text-gray-600 my-2 font-medium">گردو مرغوب درجه 1</h3>
                                            <p class="text-gray-400 text-xs mb-2">مرکبات</p>
                                        </div>
                                        <div>
                                            <p class="text-sm">38 <span>تومان</span></p>
                                        </div>
                                    </div>
                                    <div class="text-end me-3 opacity-0 transition-opacity duration-300 ease-in-out hover:opacity-100 absolute bottom-2 left-0 ps-72 pt-14">
                                        <a href="" class="border border-1 border-[#5CAF90] rounded">
                                            <i class="fa-light fa-basket-shopping text-[#5CAF90] p-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white border border-gray-100 rounded duration-300 ease-in-out hover:shadow-lg">
                                <div class="grid grid-cols-3 relative">
                                    <div class="mx-auto my-auto">
                                        <img src="{{ asset('assets/images/7_2.jpg') }}" alt="" class="w-[70px] h-[61px]">
                                    </div>
                                    <div class="col-span-2 pb-2">
                                        <div>
                                            <h3 class="text-gray-600 my-2 font-medium">گردو مرغوب درجه 1</h3>
                                            <p class="text-gray-400 text-xs mb-2">مرکبات</p>
                                        </div>
                                        <div>
                                            <p class="text-sm">38 <span>تومان</span></p>
                                        </div>
                                    </div>
                                    <div class="text-end me-3 opacity-0 transition-opacity duration-300 ease-in-out hover:opacity-100 absolute bottom-2 left-0 ps-72 pt-14">
                                        <a href="" class="border border-1 border-[#5CAF90] rounded">
                                            <i class="fa-light fa-basket-shopping text-[#5CAF90] p-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white border border-gray-100 rounded duration-300 ease-in-out hover:shadow-lg">
                                <div class="grid grid-cols-3 relative">
                                    <div class="mx-auto my-auto">
                                        <img src="{{ asset('assets/images/7_2.jpg') }}" alt="" class="w-[70px] h-[61px]">
                                    </div>
                                    <div class="col-span-2 pb-2">
                                        <div>
                                            <h3 class="text-gray-600 my-2 font-medium">گردو مرغوب درجه 1</h3>
                                            <p class="text-gray-400 text-xs mb-2">مرکبات</p>
                                        </div>
                                        <div>
                                            <p class="text-sm">38 <span>تومان</span></p>
                                        </div>
                                    </div>
                                    <div class="text-end me-3 opacity-0 transition-opacity duration-300 ease-in-out hover:opacity-100 absolute bottom-2 left-0 ps-72 pt-14">
                                        <a href="" class="border border-1 border-[#5CAF90] rounded">
                                            <i class="fa-light fa-basket-shopping text-[#5CAF90] p-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white border border-gray-100 rounded duration-300 ease-in-out hover:shadow-lg">
                                <div class="grid grid-cols-3 relative">
                                    <div class="mx-auto my-auto">
                                        <img src="{{ asset('assets/images/7_2.jpg') }}" alt="" class="w-[70px] h-[61px]">
                                    </div>
                                    <div class="col-span-2 pb-2">
                                        <div>
                                            <h3 class="text-gray-600 my-2 font-medium">گردو مرغوب درجه 1</h3>
                                            <p class="text-gray-400 text-xs mb-2">مرکبات</p>
                                        </div>
                                        <div>
                                            <p class="text-sm">38 <span>تومان</span></p>
                                        </div>
                                    </div>
                                    <div class="text-end me-3 opacity-0 transition-opacity duration-300 ease-in-out hover:opacity-100 absolute bottom-2 left-0 ps-72 pt-14">
                                        <a href="" class="border border-1 border-[#5CAF90] rounded">
                                            <i class="fa-light fa-basket-shopping text-[#5CAF90] p-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container mx-auto px-4 md:px-0">
                <div class="mx-auto md:mx-0 mt-32 mb-10">
                    <p class="font-bold text-2xl">مقالات <span class="text-[#5CAF90]">وبلاک</span></p>
                </div>
                <div class="grid gap-5 grid-cols-1 md:grid-cols-3 lg:grid-cols-4">
                    <div class="border border-gray-100 rounded bg-white duration-300 ease-in-out hover:shadow-lg">
                        <div class="rounded">
                            <img src="{{ asset('assets/images/1.jpg') }}" alt="" class="rounded">
                        </div>
                        <div class="my-2 mx-3">
                            <h3 class="font-medium">چیپس سیب زمینی، طعم خامه و پیاز</h3>
                        </div>
                        <div class="grid gap-5 grid-cols-2 mx-3 my-2">
                            <div>
                                <p>امتیاز</p>
                            </div>
                            <div class="ms-auto">
                                <a href="">
                                    <i class="fa-duotone fa-solid fa-star text-sm"></i>
                                </a>
                                <a href="">
                                    <i class="fa-duotone fa-solid fa-star text-sm"></i>
                                </a>
                                <a href="">
                                    <i class="fa-duotone fa-solid fa-star text-amber-400 text-sm"></i>
                                </a>
                                <a href="">
                                    <i class="fa-duotone fa-solid fa-star text-amber-400 text-sm"></i>
                                </a>
                                <a href="">
                                    <i class="fa-duotone fa-solid fa-star text-amber-400 text-sm"></i>
                                </a>
                            </div>
                        </div>
                        <div class="grid gap-5 grid-cols-2 mx-3 my-4">
                            <div>
                                <p class="text-sm text-gray-400">1 مرداد 1403</p>
                            </div>
                            <div class="ms-auto">
                                <a href="#" class="text-white bg-[#5CAF90] hover:bg-[#4A9C7E] focus:ring-4 focus:outline-none focus:ring-[#4A9C7E] font-medium rounded text-sm px-4 py-1.5 text-center w-full">ادامه مطلب
                                    <i class="fa-solid fa-angles-left align-middle"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="border border-gray-100 rounded bg-white duration-300 ease-in-out hover:shadow-lg">
                        <div class="rounded">
                            <img src="{{ asset('assets/images/2.jpg') }}" alt="" class="rounded">
                        </div>
                        <div class="my-2 mx-3">
                            <h3 class="font-medium">چیپس سیب زمینی، طعم خامه و پیاز</h3>
                        </div>
                        <div class="grid gap-5 grid-cols-2 mx-3 my-2">
                            <div>
                                <p>امتیاز</p>
                            </div>
                            <div class="ms-auto">
                                <a href="">
                                    <i class="fa-duotone fa-solid fa-star text-sm"></i>
                                </a>
                                <a href="">
                                    <i class="fa-duotone fa-solid fa-star text-sm"></i>
                                </a>
                                <a href="">
                                    <i class="fa-duotone fa-solid fa-star text-amber-400 text-sm"></i>
                                </a>
                                <a href="">
                                    <i class="fa-duotone fa-solid fa-star text-amber-400 text-sm"></i>
                                </a>
                                <a href="">
                                    <i class="fa-duotone fa-solid fa-star text-amber-400 text-sm"></i>
                                </a>
                            </div>
                        </div>
                        <div class="grid gap-5 grid-cols-2 mx-3 my-4">
                            <div>
                                <p class="text-sm text-gray-400">1 مرداد 1403</p>
                            </div>
                            <div class="ms-auto">
                                <a href="#" class="text-white bg-[#5CAF90] hover:bg-[#4A9C7E] focus:ring-4 focus:outline-none focus:ring-[#4A9C7E] font-medium rounded text-sm px-4 py-1.5 text-center w-full">ادامه مطلب
                                    <i class="fa-solid fa-angles-left align-middle"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="border border-gray-100 rounded bg-white duration-300 ease-in-out hover:shadow-lg">
                        <div class="rounded">
                            <img src="{{ asset('assets/images/3.jpg') }}" alt="" class="rounded">
                        </div>
                        <div class="my-2 mx-3">
                            <h3 class="font-medium">چیپس سیب زمینی، طعم خامه و پیاز</h3>
                        </div>
                        <div class="grid gap-5 grid-cols-2 mx-3 my-2">
                            <div>
                                <p>امتیاز</p>
                            </div>
                            <div class="ms-auto">
                                <a href="">
                                    <i class="fa-duotone fa-solid fa-star text-sm"></i>
                                </a>
                                <a href="">
                                    <i class="fa-duotone fa-solid fa-star text-sm"></i>
                                </a>
                                <a href="">
                                    <i class="fa-duotone fa-solid fa-star text-amber-400 text-sm"></i>
                                </a>
                                <a href="">
                                    <i class="fa-duotone fa-solid fa-star text-amber-400 text-sm"></i>
                                </a>
                                <a href="">
                                    <i class="fa-duotone fa-solid fa-star text-amber-400 text-sm"></i>
                                </a>
                            </div>
                        </div>
                        <div class="grid gap-5 grid-cols-2 mx-3 my-4">
                            <div>
                                <p class="text-sm text-gray-400">1 مرداد 1403</p>
                            </div>
                            <div class="ms-auto">
                                <a href="#" class="text-white bg-[#5CAF90] hover:bg-[#4A9C7E] focus:ring-4 focus:outline-none focus:ring-[#4A9C7E] font-medium rounded text-sm px-4 py-1.5 text-center w-full">ادامه مطلب
                                    <i class="fa-solid fa-angles-left align-middle"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="border border-gray-100 rounded bg-white duration-300 ease-in-out hover:shadow-lg">
                        <div class="rounded">
                            <img src="{{ asset('assets/images/4.jpg') }}" alt="" class="rounded">
                        </div>
                        <div class="my-2 mx-3">
                            <h3 class="font-medium">چیپس سیب زمینی، طعم خامه و پیاز</h3>
                        </div>
                        <div class="grid gap-5 grid-cols-2 mx-3 my-2">
                            <div>
                                <p>امتیاز</p>
                            </div>
                            <div class="ms-auto">
                                <a href="">
                                    <i class="fa-duotone fa-solid fa-star text-sm"></i>
                                </a>
                                <a href="">
                                    <i class="fa-duotone fa-solid fa-star text-sm"></i>
                                </a>
                                <a href="">
                                    <i class="fa-duotone fa-solid fa-star text-amber-400 text-sm"></i>
                                </a>
                                <a href="">
                                    <i class="fa-duotone fa-solid fa-star text-amber-400 text-sm"></i>
                                </a>
                                <a href="">
                                    <i class="fa-duotone fa-solid fa-star text-amber-400 text-sm"></i>
                                </a>
                            </div>
                        </div>
                        <div class="grid gap-5 grid-cols-2 mx-3 my-4">
                            <div>
                                <p class="text-sm text-gray-400">1 مرداد 1403</p>
                            </div>
                            <div class="ms-auto">
                                <a href="#" class="text-white bg-[#5CAF90] hover:bg-[#4A9C7E] focus:ring-4 focus:outline-none focus:ring-[#4A9C7E] font-medium rounded text-sm px-4 py-1.5 text-center w-full">ادامه مطلب
                                    <i class="fa-solid fa-angles-left align-middle"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="font-yekanBakh">
        <section class="bg-gray-50 py-20">
            <div class="container mx-auto">
                <div class="text-center md:text-start">
                    <h3 class="font-bold text-2xl text-[#4A9C7E] my-4">فروشگاه</h3>
                </div>
                <div class="mx-4 md:mx-0">
                    <p class="text-justify leading-loose text-gray-600">
                         به فروشگاه اینترنتی ما خوش آمدید!
                        در فروشگاه اینترنتی ما، تجربه‌ای بی‌نظیر از خرید آنلاین را برای شما فراهم کرده‌ایم. با مجموعه‌ای گسترده از محصولات با کیفیت و قیمت‌های رقابتی، هدف ما این است که نیازهای شما را به بهترین شکل ممکن برآورده کنیم.
                        تجربه‌ای متفاوت از خرید آنلاین را با ما تجربه کنید! 😊
                    </p>
                </div>
                <div class="grid gap-10 grid-cols-4 md:grid-cols-8 xl:grid-cols-12 bg-white rounded-lg my-20 mx-4 md:mx-0">
                    <div class="col-span-4 md:col-span-4 xl:col-span-3">
                        <div class="grid gap-y-3 md:gap-y-0 grid-cols-4">
                            <div class="col-span-4 md:col-span-1 mx-auto my-auto">
                                <i class="fa-regular fa-truck-fast text-4xl text-[#5CAF90]"></i>
                            </div>
                            <div class="col-span-4 md:col-span-3 xl:col-span-2 mx-auto md:mx-0 pt-4">
                                <p class="text-gray-600 pb-4 text-center md:text-start">
                                    ارسال رایگان سفارش
                                    <br>
                                    <span class="text-gray-400 text-sm">
                                        در کوتاه ترین زمان
                                    </span>
                                </p>
                            </div>
                            <div class="my-auto text-end text-gray-400 hidden xl:block ">|</div>
                        </div>
                    </div>
                    <div class="col-span-4 md:col-span-4 xl:col-span-3">
                        <div class="grid gap-y-3 md:gap-y-0 grid-cols-4">
                            <div class="col-span-4 md:col-span-1 mx-auto my-auto">
                                <i class="fa-solid fa-clock-rotate-left text-4xl text-[#5CAF90]"></i>
                            </div>
                            <div class="col-span-4 md:col-span-3 xl:col-span-2 mx-auto md:mx-0 pt-4">
                                <p class="text-gray-600 pb-4 text-center md:text-start">
                                    7 روز هفته 24 ساعته
                                    <br>
                                    <span class="text-gray-400 text-sm">
                                       بدون تعطیلی
                                    </span>
                                </p>
                            </div>
                            <div class="my-auto text-end text-gray-400 hidden xl:block">|</div>
                        </div>
                    </div>
                    <div class="col-span-4 md:col-span-4 xl:col-span-3">
                        <div class="grid gap-y-3 md:gap-y-0 grid-cols-4">
                            <div class="col-span-4 md:col-span-1 mx-auto my-auto">
                                <i class="fa-duotone fa-solid fa-credit-card text-4xl text-[#5CAF90]"></i>
                            </div>
                            <div class="col-span-4 md:col-span-3 xl:col-span-2 mx-auto md:mx-0 pt-4">
                                <p class="text-gray-600 pb-4 text-center md:text-start">
                                    امکان پرداخت در محل
                                    <br>
                                    <span class="text-gray-400 text-sm">
                                        نقد و اقساط
                                    </span>
                                </p>
                            </div>
                            <div class="my-auto text-end text-gray-400 hidden xl:block">|</div>
                        </div>
                    </div>
                    <div class="col-span-4 md:col-span-4 xl:col-span-3">
                        <div class="grid gap-y-3 md:gap-y-0 grid-cols-4">
                            <div class="col-span-4 md:col-span-1 mx-auto my-auto">
                                <i class="fa-sharp-duotone fa-solid fa-badge-check text-4xl text-[#5CAF90]"></i>
                            </div>
                            <div class="col-span-4 md:col-span-3 xl:col-span-2 mx-auto md:mx-0 pt-4">
                                <p class="text-gray-600 pb-4 text-center md:text-start">
                                    ضمانت کیفیت کالا
                                    <br>
                                    <span class="text-gray-400 text-sm">
                                        12 ماه یا 18 ماه
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid gap-10 grid-cols-1 md:grid-cols-3 lg:grid-cols-4 text-center md:text-start">
                    <div>
                        <h3 class="mt-5 mb-2 font-semibold text-[#4A9C7E]">
                            با فروشگاه
                        </h3>
                        <ul>
                            <li class="my-1">
                                <a href="#" class="hover:text-[#4A9C7E] text-gray-600 text-sm transition duration-300">
                                    اتاق خبر فروشگاه
                                </a>
                            </li>
                            <li class="my-1">
                                <a href="#" class="hover:text-[#4A9C7E] text-gray-600 text-sm transition duration-300">
                                    فروش در فروشگاه
                                </a>
                            </li>
                            <li class="my-1">
                                <a href="#" class="hover:text-[#4A9C7E] text-gray-600 text-sm transition duration-300">
                                    فرصت های شغلی
                                </a>
                            </li>
                            <li class="my-1">
                                <a href="#" class="hover:text-[#4A9C7E] text-gray-600 text-sm transition duration-300">
                                    گزارش تخلف در فروشگاه
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="mt-5 mb-2 font-semibold text-[#4A9C7E]">
                            خدمات مشتریان
                        </h3>
                        <ul>
                            <li class="my-1">
                                <a href="#" class="hover:text-[#4A9C7E] text-gray-600 text-sm transition duration-300">
                                    شرایط استفاده
                                </a>
                            </li>
                            <li class="my-1">
                                <a href="#" class="hover:text-[#4A9C7E] text-gray-600 text-sm transition duration-300">
                                    حریم خصوصی
                                </a>
                            </li>
                            <li class="my-1">
                                <a href="#" class="hover:text-[#4A9C7E] text-gray-600 text-sm transition duration-300">
                                    رویه بازگرداندن کالا
                                </a>
                            </li>
                            <li class="my-1">
                                <a href="#" class="hover:text-[#4A9C7E] text-gray-600 text-sm transition duration-300">
                                    گزارش باگ
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="mt-5 mb-2 font-semibold text-[#4A9C7E]">
                            راهنمای خرید از فروشگاه
                        </h3>
                        <ul>
                            <li class="my-1">
                                <a href="#" class="hover:text-[#4A9C7E] text-gray-600 text-sm transition duration-300">
                                    نحوه ثبت سفارش
                                </a>
                            </li>
                            <li class="my-1">
                                <a href="#" class="hover:text-[#4A9C7E] text-gray-600 text-sm transition duration-300">
                                    نحوه ارسال سفارش
                                </a>
                            </li>
                            <li class="my-1">
                                <a href="#" class="hover:text-[#4A9C7E] text-gray-600 text-sm transition duration-300">
                                    شیوه های پرداخت
                                </a>
                            </li>
                            <li class="my-1">
                                <a href="#" class="hover:text-[#4A9C7E] text-gray-600 text-sm transition duration-300">
                                    نحوه شکایت از سفارش
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="mt-5 mb-2 font-semibold text-[#4A9C7E]">
                           نمادهای ما
                        </h3>
                        <ul class="flex justify-center md:justify-start">
                            <li class="my-1">
                                <a href="#" class="hover:text-[#4A9C7E] text-gray-600 text-sm transition duration-300">
                                    <img src="{{ asset('assets/images/enamad-full-star.png') }}" alt="" class="w-[80px] h-[93px]">
                                </a>
                            </li>
                            <li class="my-1">
                                <a href="#" class="hover:text-[#4A9C7E] text-gray-600 text-sm transition duration-300">
                                    <img src="{{ asset('assets/images/kasbokar.svg') }}" alt="" class="w-[80px] h-[93px]">
                                </a>
                            </li>
                            <li class="my-1">
                                <a href="#" class="hover:text-[#4A9C7E] text-gray-600 text-sm transition duration-300">
                                    <img src="{{ asset('assets/images/sabt.svg') }}" alt="" class="w-[80px] h-[93px]">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-[#4A9C7E] mx-1 rounded-t-3xl">
            <div class="container mx-auto">
                <div class="grid gap-10 grid-cols-1 md:grid-cols-3 lg:grid-cols-4 py-10 text-center md:text-start">
                    <div>
                        <h3 class="mt-5 mb-2 font-semibold text-gray-50">
                            شماره تماس:
                        </h3>
                        <ul>
                            <li class="my-1 ">
                                <a href="tel:09035114559" class="text-gray-50 text-sm transition duration-300 font-kalameh">
                                    09035114559
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="mt-5 mb-2 font-semibold text-gray-50">
                            پست الکترونیکی:
                        </h3>
                        <ul>
                            <li class="my-1 ">
                                <a href="mailto:aliasadzadhdev@gmail.com" class="text-gray-50 text-sm transition duration-300 font-kalameh">
                                    aliasadzadhdev@gmail.com
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="mt-5 mb-2 font-semibold text-gray-50">
                            شبکه های اجتماعی:
                        </h3>
                        <ul class="flex flex-row justify-center md:justify-start">
                            <li class="my-1">
                                <a href="#" class="">
                                    <i class="fa-brands fa-telegram text-gray-50 me-2 hover:scale-125 transition duration-300 text-xl"></i>
                                </a>
                            </li>
                            <li class="my-1">
                                <a href="#" class="">
                                    <i class="fa-brands fa-instagram text-gray-50 mx-2 hover:scale-125 transition duration-300 text-xl"></i>
                                </a>
                            </li>
                            <li class="my-1">
                                <a href="#" class="">
                                    <i class="fa-brands fa-facebook text-gray-50 mx-2 hover:scale-125 transition duration-300 text-xl"></i>
                                </a>
                            </li>
                            <li class="my-1">
                                <a href="#" class="">
                                    <i class="fa-brands fa-twitter text-gray-50 ms-2 hover:scale-125 transition duration-300 text-xl"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="mt-5 mb-2 font-semibold text-gray-50">
                            با ثبت ایمیل از بروز ترین اخبار با خبر باشید:
                        </h3>
                        <ul>
                            <li class="my-1 mx-4 md:mx-0">
                                <form class="max-w-md mx-auto">
                                    <label for="email" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                                    <div class="relative">
                                        <input type="email" id="email" class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:outline-none focus:ring-[#4A9C7E]" placeholder="ایمیل خود را وارد کنید" required />
                                        <button type="submit" class="text-white bg-[#5CAF90] hover:bg-[#4A9C7E] focus:ring-4 focus:outline-none focus:ring-[#4A9C7E] absolute end-2.5 bottom-2.5 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">ثبت ایمیل</button>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="grid gap-5 grid-cols-2 pb-5">
                    <div class="col-span-2 md:col-span-1 mx-auto md:mx-0">
                        <a href="#" class="text-gray-50 bg-[#4A9C7E] border rounded-lg border-gray-50 font-medium text-sm px-4 py-1.5 text-center w-full">بازگشت به بالا</a>
                    </div>
                    <div class="col-span-2 md:col-span-1 mx-auto md:mx-0">
                        <p class="text-end block py-3 text-white">
                            طراحی و توسعه توسط <a href="#">Ali Asadzadeh</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    <script src="{{ asset('assets/js/flowbite.min.js') }}"></script>
</body>
</html>
