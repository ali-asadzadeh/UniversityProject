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
                            <img src="{{ asset('assets/images/pexels-jmendezrf-1536619.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                        </div>
                        <div class="hidden duration-700 ease-in-out rounded" data-carousel-item>
                            <img src="{{ asset('assets/images/pexels-jmendezrf-1536619.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
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
                            <img src="{{ asset('assets/images/c-1.png') }}" alt="" class="w-[48px] h-[50px] mx-auto">
                            <a href="#" class="block mt-2 text-xl">پیراهن</a>
                            <span class="text-gray-700 text-xs">458 مورد</span>
                        </div>
                    </div>
                    <div class="bg-gradient-to-b from-[#ECF0FE]/80 hover:bg-[#ECF0FE]/40 rounded-md p-4">
                        <div class="border border-white shadow-lg bg-white rounded-md p-4">
                            <img src="{{ asset('assets/images/c-2.png') }}" alt="" class="w-[48px] h-[50px] mx-auto">
                            <a href="#" class="block mt-2 text-xl">ساعت</a>
                            <span class="text-gray-700 text-xs">458 مورد</span>
                        </div>
                    </div>
                    <div class="bg-gradient-to-b from-[#FCE0F4]/80 hover:bg-[#FCE0F4]/40 rounded-md p-4">
                        <div class="border border-white shadow-lg bg-white rounded-md p-4">
                            <img src="{{ asset('assets/images/c-3.png') }}" alt="" class="w-[48px] h-[50px] mx-auto">
                            <a href="#" class="block mt-2 text-xl">مانتو</a>
                            <span class="text-gray-700 text-xs">458 مورد</span>
                        </div>
                    </div>
                    <div class="bg-gradient-to-b from-[#FEEBEA]/80 hover:bg-[#FEEBEA]/40 rounded-md p-4">
                        <div class="border border-white shadow-lg bg-white rounded-md p-4">
                            <img src="{{ asset('assets/images/c-4.png') }}" alt="" class="w-[48px] h-[50px] mx-auto">
                            <a href="#" class="block mt-2 text-xl">عینک</a>
                            <span class="text-gray-700 text-xs">458 مورد</span>
                        </div>
                    </div>
                    <div class="bg-gradient-to-b from-[#E3FCE3]/80 hover:bg-[#E3FCE3]/40 rounded-md p-4">
                        <div class="border border-white shadow-lg bg-white rounded-md p-4">
                            <img src="{{ asset('assets/images/c-5.png') }}" alt="" class="w-[48px] h-[50px] mx-auto">
                            <a href="#" class="block mt-2 text-xl">کلاه</a>
                            <span class="text-gray-700 text-xs">458 مورد</span>
                        </div>
                    </div>
                    <div class="bg-gradient-to-b from-[#FEF7EE]/80 hover:bg-[#FEF7EE]/40 rounded-md p-4">
                        <div class="border border-white shadow-lg bg-white rounded-md p-4">
                            <img src="{{ asset('assets/images/c-7.png') }}" alt="" class="w-[48px] h-[50px] mx-auto">
                            <a href="#" class="block mt-2 text-xl">ژاکت</a>
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
                        @foreach($countdowns as $index => $countdown)
                            @if($countdown->status == 'amazing')
                                <div class="flex flex-row justify-end col-span-3 font-kalameh font-medium text-xl mx-auto md:mx-0 countdown-timer" data-countdown-end="{{ $countdown->end_at }}">
                                    <div class="mx-2 p-2 rounded bg-white countdown-seconds">00</div>
                                    <span class="py-2">:</span>
                                    <div class="mx-2 p-2 rounded bg-white countdown-minutes">00</div>
                                    <span class="py-2">:</span>
                                    <div class="mx-2 p-2 rounded bg-white countdown-hours">00</div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                <div class="grid gap-5 grid-cols-1 md:grid-cols-3 lg:grid-cols-4 mx-4 md:mx-0">
                    @foreach($products as $product)
                        @if($product->status == 'amazing')
                            <div class="card border border-gray-100 rounded bg-white duration-300 ease-in-out hover:shadow-lg">
                                <div class="card-img border-b">
                                    <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->name }}" class="w-[327px] h-[285px]">
                                </div>
                                <div class="card-body">
                                    <div class="mt-2 ms-4 text-sm text-gray-400">
                                        <p>{{ $product->category }}</p>
                                    </div>
                                    <div class="ms-4 mb-2">
                                        <h3 class="font-medium">{{ $product->name }}</h3>
                                    </div>
                                    <div class="grid gap-5 grid-cols-2 mx-4">
                                        <div>
                                            <p><span>{{ $product->price }}</span> تومان</p>
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
                                    <form action="{{ route('cart.add') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <input type="hidden" name="quantity" value="1">
                                        <button type="submit" class="text-white bg-[#5CAF90] hover:bg-[#4A9C7E] focus:ring-4 focus:outline-none focus:ring-[#4A9C7E] font-medium rounded text-sm px-4 py-2 text-center w-full mt-2">افزودن به سبد خرید</button>
                                    </form>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>
        <section>
            <div class="container mx-auto my-4 md:mb-10 md:mt-32">
                <div class="grid gap-5 grid-cols-1 md:grid-cols-2 lg:grid-cols-4 mx-4 md:mx-0">
                    <div>
                        <img src="{{ asset('assets/images/pexels-vika-glitter-392079-3315286.jpg') }}" alt="" class="w-[329px] h-[448px] rounded">
                    </div>
                    <div>
                        <div class="font-medium text-xl mb-5">
                            <h3>محصولات<span class="text-[#5CAF90]"> پرفروش</span></h3>
                        </div>
                        <div class="grid gap-2 grid-cols-1">
                            @foreach($products as $product)
                                @if($product->status == 'bestseller')
                                    <div class="bg-white border border-gray-100 rounded duration-300 ease-in-out hover:shadow-lg">
                                        <div class="grid grid-cols-3 relative">
                                            <div class="mx-auto my-auto">
                                                <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->name }}" class="w-[70px] h-[61px]">
                                            </div>
                                            <div class="col-span-2 pb-2">
                                                <div>
                                                    <h3 class="text-gray-600 my-2 font-medium">{{ $product->name }}</h3>
                                                    <p class="text-gray-400 text-xs mb-2">{{ $product->category }}</p>
                                                </div>
                                                <div>
                                                    <p class="text-sm">{{ $product->price }} <span>تومان</span></p>
                                                </div>
                                            </div>
                                            <div class="text-end me-3 opacity-0 transition-opacity duration-300 ease-in-out hover:opacity-100 absolute bottom-2 left-0 ps-72 pt-14">
                                                <form action="{{ route('cart.add') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                    <input type="hidden" name="quantity" value="1">
                                                    <button type="submit" class="border border-1 border-[#5CAF90] rounded">
                                                        <i class="fa-light fa-basket-shopping text-[#5CAF90] p-1"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div>
                        <div class="font-medium text-xl mb-5">
                            <h3>محصولات<span class="text-[#5CAF90]"> محبوب</span></h3>
                        </div>
                        <div class="grid gap-2 grid-cols-1">
                            @foreach($products as $product)
                                @if($product->status == 'popular')
                                    <div class="bg-white border border-gray-100 rounded duration-300 ease-in-out hover:shadow-lg">
                                        <div class="grid grid-cols-3 relative">
                                            <div class="mx-auto my-auto">
                                                <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->name }}" class="w-[70px] h-[61px]">
                                            </div>
                                            <div class="col-span-2 pb-2">
                                                <div>
                                                    <h3 class="text-gray-600 my-2 font-medium">{{ $product->name }}</h3>
                                                    <p class="text-gray-400 text-xs mb-2">{{ $product->category }}</p>
                                                </div>
                                                <div>
                                                    <p class="text-sm">{{ $product->price }} <span>تومان</span></p>
                                                </div>
                                            </div>
                                            <div class="text-end me-3 opacity-0 transition-opacity duration-300 ease-in-out hover:opacity-100 absolute bottom-2 left-0 ps-72 pt-14">
                                                <form action="{{ route('cart.add') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                    <input type="hidden" name="quantity" value="1">
                                                    <button type="submit" class="border border-1 border-[#5CAF90] rounded">
                                                        <i class="fa-light fa-basket-shopping text-[#5CAF90] p-1"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div>
                        <div class="font-medium text-xl mb-5">
                            <h3>محصولات<span class="text-[#5CAF90]"> داغ</span></h3>
                        </div>
                        <div class="grid gap-2 grid-cols-1">
                            @foreach($products as $product)
                                @if($product->status == 'hot')
                                    <div class="bg-white border border-gray-100 rounded duration-300 ease-in-out hover:shadow-lg">
                                        <div class="grid grid-cols-3 relative">
                                            <div class="mx-auto my-auto">
                                                <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->name }}" class="w-[70px] h-[61px]">
                                            </div>
                                            <div class="col-span-2 pb-2">
                                                <div>
                                                    <h3 class="text-gray-600 my-2 font-medium">{{ $product->name }}</h3>
                                                    <p class="text-gray-400 text-xs mb-2">{{ $product->category }}</p>
                                                </div>
                                                <div>
                                                    <p class="text-sm">{{ $product->price }} <span>تومان</span></p>
                                                </div>
                                            </div>
                                            <div class="text-end me-3 opacity-0 transition-opacity duration-300 ease-in-out hover:opacity-100 absolute bottom-2 left-0 ps-72 pt-14">
                                                <form action="{{ route('cart.add') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                    <input type="hidden" name="quantity" value="1">
                                                    <button type="submit" class="border border-1 border-[#5CAF90] rounded">
                                                        <i class="fa-light fa-basket-shopping text-[#5CAF90] p-1"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
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
                    @foreach($posts as $post)
                        <div class="border border-gray-100 rounded bg-white duration-300 ease-in-out hover:shadow-lg">
                            <div class="rounded">
                                <img src="{{ asset('storage/' . $post->image_path) }}" alt="{{ $post->name }}" class="rounded">
                            </div>
                            <div class="my-2 mx-3">
                                <h3 class="font-medium">{{ $post->title }}</h3>
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
                                    <p class="text-sm text-gray-400">{{ $post->date }}</p>
                                </div>
                                <div class="ms-auto">
                                    <a href="#" class="text-white bg-[#5CAF90] hover:bg-[#4A9C7E] focus:ring-4 focus:outline-none focus:ring-[#4A9C7E] font-medium rounded text-sm px-4 py-1.5 text-center w-full">ادامه مطلب
                                        <i class="fa-solid fa-angles-left align-middle"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
    @include('layouts/footer')
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            function startCountdown(element, endTime) {
                function updateCountdown() {
                    const now = new Date().getTime();
                    const distance = endTime - now;

                    if (distance < 0) {
                        clearInterval(interval);
                        element.querySelector(".countdown-hours").innerHTML = "00";
                        element.querySelector(".countdown-minutes").innerHTML = "00";
                        element.querySelector(".countdown-seconds").innerHTML = "00";
                        return;
                    }

                    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    element.querySelector(".countdown-hours").innerHTML = String(hours).padStart(2, '0');
                    element.querySelector(".countdown-minutes").innerHTML = String(minutes).padStart(2, '0');
                    element.querySelector(".countdown-seconds").innerHTML = String(seconds).padStart(2, '0');
                }

                updateCountdown();
                const interval = setInterval(updateCountdown, 1000);
            }

            document.querySelectorAll('.countdown-timer').forEach(timer => {
                const endTimeStr = timer.getAttribute('data-countdown-end');
                const endTime = new Date(endTimeStr).getTime();
                if (!isNaN(endTime)) {
                    startCountdown(timer, endTime);
                } else {
                    console.error("Invalid end time format for:", endTimeStr);
                }
            });
        });
    </script>

    <script src="{{ asset('assets/js/flowbite.min.js') }}"></script>
</body>
</html>
