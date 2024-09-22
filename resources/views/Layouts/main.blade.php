<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WarskulHub App</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- Tailwind CSS & Preline --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- Extended CSS --}}
    @stack('styles')
</head>
<body class="bg-primaryDark h-screen text-white">

    <div class="flex w-screen h-screen">
        {{-- Sidebar --}}
        @include('Layouts.sidebar')

        {{-- Content --}}
        <div class="grow" id="content">
            @include('Layouts.navbar')

            @yield('content')
        </div>
    </div>
    {{-- Sidebar for Mobile version --}}
    @include('Layouts.sidebarmobile')


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
        });
    </script>

    {{-- Custom JS --}}
    @stack('scripts')

</body>
</html>