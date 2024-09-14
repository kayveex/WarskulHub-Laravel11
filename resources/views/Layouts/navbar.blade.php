<div class="py-2 px-6 h-[50px] bg-primaryGreen flex flex-row items-center w-full shadow-md shadow-black/5 sticky top-0 left-0 z-30">
    {{-- Menu Toggle for Desktop --}}
    <button id="menuToggleBtn" type="button" class="text-2xl text-gray-200 hidden md:flex ">
        <i class="ph ph-list"></i>
    </button>
    {{-- Menu Toggle for Mobile --}}
    <button type="button" 
        class="text-lg text-gray-200 flex md:hidden" 
        aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-offcanvas-example" aria-label="Toggle navigation" data-hs-overlay="#hs-offcanvas-example">
        <i class="ph ph-list"></i>
    </button>
</div>