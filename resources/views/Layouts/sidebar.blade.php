<div class="w-[0px] md:w-[300px] duration-300 overflow-hidden z-30 bg-secondaryDark translate-x-[-100%] md:translate-x-0" id="sidebar">
    <div class="flex flex-col px-4 py-3">
        <a href="/dashboard" class="flex items-center justify-center pb-2">
            <img width="200px" src="{{ asset('assets/img/logo_dash.png') }}" alt="">
        </a>
        <hr class="border-primaryGreen border-[1.5px]" />
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