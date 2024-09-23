@extends('Layouts.main')

@section('content')
    @if (Auth::user()->type == 'admin')
        <h1 class="text-2xl font-semibold">Admin Dashboard</h1>
    @elseif (Auth::user()->type == 'manager')
        <h1 class="text-2xl font-semibold">Manager Dashboard</h1>
    @else 
        <div class="w-full flex flex-col py-4 px-6 bg-secondaryDark min-h-[100px] shadow-md rounded-md">
            <h1 class="text-[28px] font-bold">Selamat Datang, <span class="text-secondaryGreen">{{ Auth::user()->name }}!</span></h1>
            <p class="text-[16px]">Selamat bekerja, semoga harimu menyenangkan 😁</p>
            <h5 class="text-sm font-bold mt-3">Status Kelas Saya<h5>
            <div class="w-full my-3 min-h-[50px] bg-primaryDark border border-primaryGreen rounded-lg flex flex-row items-center px-3 text-sm">
                <p>Anda memiliki 2 kelas ekskul yang aktif. <a class="font-bold hover:underline" href="#">Lihat detail</a> untuk selengkapnya!</p>
                <a href="#" class="ml-auto bg-primaryGreen text-white font-semibold px-6 py-2 rounded-lg hover:scale-110 transition-transform duration-300 ease-in-out">Lihat Detail</a>
            </div>
        </div>
    @endif
    
@endsection