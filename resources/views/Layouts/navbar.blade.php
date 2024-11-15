<div class="py-8 px-8 h-[55px] bg-primaryGreen flex flex-row items-center w-full shadow-md shadow-black/5 sticky top-0 left-0 z-30">
    <section 
    id="left-navbar"
    class="flex flex-row items-center w-1/2">
        {{-- Menu Toggle for Desktop --}}
        <button id="menuToggleBtn" type="button" class="text-[28px] text-white hidden md:flex ">
            <i class="ph ph-list"></i>
        </button>
        {{-- Menu Toggle for Mobile --}}
        <button type="button" 
            class="text-lg text-gray-200 flex md:hidden" 
            aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-offcanvas-example" aria-label="Toggle navigation" data-hs-overlay="#hs-offcanvas-example">
            <i class="ph ph-list"></i>
        </button>
        {{-- Dashboard title --}}
        @if (Auth::user()->type === 'admin')
            <h1 class="text-lg font-semibold ml-4">Dashboard Admin</h1>
        @elseif (Auth::user()->type === 'manager')
            <h1 class="text-lg font-semibold ml-4">Dashboard Manajer</h1>
        @else 
            <h1 class="text-lg font-semibold ml-4">Dashboard Guru</h1>
        @endif
    </section>
    <section id="right-navbar" class="flex flex-row justify-end mr-2 items-center w-1/2">
        @include('layouts.profilebtn')

    </section>

</div>