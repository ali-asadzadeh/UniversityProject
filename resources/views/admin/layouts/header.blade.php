<div class="text-end me-5 grid grid-cols-12 py-4">
    <div class="col-span-10"></div>
    <div class="col-span-2">
        <div class="grid gap-1 grid-cols-12">
            <div class="col-span-9 me-2">
                @if (Auth::check())
                    <a href="#" class="">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</a>
                @endif
            </div>

            <div class="col-span-3">
                @if (Auth::check())
                    <form action="{{ url('logout') }}" method="POST">
                        @csrf
                        @method('POST')
                        <button type="submit" class="text-white bg-[#5CAF90] hover:bg-[#4A9C7E] focus:outline-none focus:ring-[#4A9C7E] font-medium rounded text-sm px-4 py-1 text-center w-full">
                            خروج
                        </button>
                    </form>
                @endif

            </div>
        </div>
    </div>
</div>
