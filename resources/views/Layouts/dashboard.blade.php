<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WarskulHub App</title>
    {{-- Tailwind CSS & Preline --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- Extended CSS --}}
    @stack('styles')
</head>
<body class="bg-primaryDark h-screen text-white">

    <div class="flex w-screen h-screen">
        {{-- Sidebar --}}
        <div class="w-[0px] md:w-[300px] duration-300 overflow-hidden z-30 bg-secondaryDark translate-x-[-100%] md:translate-x-0" id="sidebar">
            <div class="flex flex-col p-4">
                <a href="/dashboard" class="flex items-center justify-center pb-4 border-b-2 border-b-primaryGreen">
                    <img src="{{ asset('assets/img/dashicon.png') }}" alt="">
                </a>
            </div>
            <ul class="px-4">
                <li class="mb-1 group active">
                    <a href="/dashboard"
                        class="flex items-center py-2 px-4 gap-2 text-gray-200 hover:bg-primaryGreen hover:bg-opacity-50 hover:text-gray-200 rounded-md group-[.active]:bg-primaryGreen group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                        <i class="ph ph-house-simple"></i>
                        <span class="text-md font-semibold">Beranda</span>
                    </a>
                </li>
                <li class="mb-1 group ">
                    <a href="/dashboard"
                        class="flex items-center py-2 px-4 gap-2 text-gray-200 hover:bg-primaryGreen hover:bg-opacity-50 hover:text-gray-200 rounded-md group-[.active]:bg-primaryGreen group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                        <i class="ph ph-chalkboard-simple"></i>
                        <span class="text-md font-semibold">Kelas</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="grow" id="content">
            <div class="py-2 px-6 bg-primaryGreen flex flex-row items-center w-full shadow-md shadow-black/5 sticky top-0 left-0 z-30">
                {{-- Menu Toggle for Desktop --}}
                <button id="menuToggleBtn" type="button" class="text-lg text-gray-200 hidden md:flex">
                    <i class="ph ph-list"></i>
                </button>
                {{-- Menu Toggle for Mobile --}}
                <button type="button" 
                    class="text-lg text-gray-200 flex md:hidden" 
                    aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-offcanvas-example" aria-label="Toggle navigation" data-hs-overlay="#hs-offcanvas-example">
                    Open
                </button>
        </div>

    </div>
    {{-- Sidebar for Mobile version --}}
    <div id="hs-offcanvas-example" class="hs-overlay lg:hidden [--auto-close:lg] hs-overlay-open:translate-x-0 -translate-x-full transition-all duration-300 transform hidden fixed top-0 start-0 bottom-0 z-[60] w-64 bg-white border-e border-gray-200 pt-7 pb-10 overflow-y-auto lg:block lg:translate-x-0 lg:end-auto lg:bottom-0 [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300" role="dialog" tabindex="-1" aria-label="Sidebar">
        <div class="px-6">
            <a class="flex-none font-semibold text-xl text-black focus:outline-none focus:opacity-80 dark:text-white" href="#" aria-label="Brand">Brand</a>
        </div>
            <nav class="hs-accordion-group p-6 w-full flex flex-col flex-wrap" data-hs-accordion-always-open>
                <ul class="space-y-1.5">

                </ul>
            </nav>
        </div>
    </div>

    {{-- PhosphorIcons --}}
    <script src="https://unpkg.com/@phosphor-icons/web@2.1.1"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>

    <script src="{{ asset('assets/js/dash.js') }}"></script>
    <script>
        let toggleBtn = document.getElementById('menuToggleBtn').addEventListener('click', () => {
            let sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('translate-x-[-100%]');
            sidebar.classList.toggle('md:translate-x-[-100%]');
            sidebar.classList.toggle('md:w-[0px]');
            if(sidebar.classList.contains('w-[0px]')) {
                sidebar.classList.remove('w-[0px]');
                sidebar.classList.add('w-[300px]');
            }else {
                sidebar.classList.add('w-[0px]');
                sidebar.classList.remove('w-[300px]');
            }
        })
    </script>
    {{-- Custom JS --}}
    @stack('scripts')

</body>
</html>