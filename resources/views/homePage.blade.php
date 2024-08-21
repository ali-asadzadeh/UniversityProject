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
                    @foreach($posts as $post)
                    <div class="card border border-gray-100 rounded bg-white duration-300 ease-in-out hover:shadow-lg">
                        <div class="card-img border-b">
                            <img src="{{ asset('storage/' . $post->image_path) }}" alt="" class="w-[327px] h-[285px]">
                        </div>
                        <div class="card-body">
                            <div class="mt-2 ms-4 text-sm text-gray-400">
                                <p>{{ $post->description }}</p>
                            </div>
                            <div class="ms-4 mb-2">
                                <h3 class="font-medium">{{ $post->title }}</h3>
                            </div>
                            <div class="grid gap-5 grid-cols-2 mx-4">
                                <div>
                                    <p><span>{{ $post->price }}</span> تومان</p>
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
                    @endforeach
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
    @include('layouts/footer')
    <script src="{{ asset('assets/js/flowbite.min.js') }}"></script>
</body>
</html>
