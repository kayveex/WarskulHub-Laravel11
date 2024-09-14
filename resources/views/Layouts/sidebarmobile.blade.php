<div id="hs-offcanvas-example" 
    class="hs-overlay lg:hidden [--auto-close:lg] hs-overlay-open:translate-x-0 
    -translate-x-full transition-all duration-300 transform hidden fixed top-0 start-0 bottom-0 z-[60] w-64 
    bg-secondaryDark pt-7 pb-10 overflow-y-auto lg:block lg:translate-x-0 lg:end-auto lg:bottom-0 [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300" role="dialog" tabindex="-1" aria-label="Sidebar">
    <div class="flex flex-col p-4">
        <a href="/dashboard" class="flex items-center justify-center pb-4 border-b-2 border-b-primaryGreen">
            <img src="{{ asset('assets/img/dashicon.png') }}" alt="">
        </a>
    </div>
    <ul class="px-4">
        <li class="mb-1 group active">
            <a href="/dashboard"
                class="flex items-center py-2 px-4 gap-2 text-gray-200 hover:bg-primaryGreen hover:bg-opacity-50 hover:text-gray-200 rounded-md group-[.active]:bg-primaryGreen group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                <i class="ph-bold ph-house-simple"></i>
                <span class="text-md font-semibold">Beranda</span>
            </a>
        </li>
        <li class="mb-1 group ">
            <a href="/dashboard"
                class="flex items-center py-2 px-4 gap-2 text-gray-200 hover:bg-primaryGreen hover:bg-opacity-50 hover:text-gray-200 rounded-md group-[.active]:bg-primaryGreen group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                <i class="ph-bold ph-chalkboard-simple"></i>
                <span class="text-md font-semibold">Kelas</span>
            </a>
        </li>
    </ul>
    </div>
</div>