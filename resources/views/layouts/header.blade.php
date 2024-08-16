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
                                <a href="{{ url('/') }}" class="block text-black hover:text-[#4A9C7E] transition duration-300mx-5">
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
                    <li class="my-auto text-center order-4 me-2">
                        <a href="{{ url('ShoppingCart') }}" class="bg-[#4A9C7E] text-white hover:text-[#4A9C7E] hover:bg-white border border-[#4A9C7E] rounded-lg px-2 py-1 transition duration-300">
                            <i class="fa-light fa-cart-shopping-fast"></i>
                        </a>
                    </li>
                    <li class="my-auto text-center order-4">
                        <a href="{{ url('login') }}" class="bg-[#4A9C7E] text-white hover:text-[#4A9C7E] hover:bg-white border border-[#4A9C7E] rounded-lg px-2 py-1 transition duration-300">
                            ورود / ثبت نام
                        </a>
                    </li>
                    <li class="my-auto text-center order-4 ms-2">
                        <a href="{{ url('login') }}" class="bg-[#4A9C7E] text-white hover:text-[#4A9C7E] hover:bg-white border border-[#4A9C7E] rounded-lg px-2 py-1 transition duration-300">
                            خروج
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>
</header>
