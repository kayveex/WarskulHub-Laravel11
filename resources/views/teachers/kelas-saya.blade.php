@extends('Layouts.main')

@section('content')
    <section class="flex flex-col w-full py-4 px-6">
        {{-- Bagian Title & Tambah Kelas --}}
        <div class="flex flex-row items-center justify-between">
            <h1 class="text-2xl font-bold">Kelas Ekskul Saya</h1>
            {{-- Button --}}
            <a class="py-2 px-4 items-center justify-center rounded-lg font-semibold hover:scale-110 transition-transform duration-300 ease-in-out bg-primaryGreen" href="#">
                <i class="ph-bold ph-plus"></i>
                <span class="ml-2">Tambah Kelas</span>
            </a>
        </div>

        <div class="flex flex-col pt-8">
            {{-- Bagian Kelas --}}



            {{-- Bagian Jika Tidak ada Kelas --}}
            @include('components.kelas-kosong')

        </div>



    </section>

    
@endsection