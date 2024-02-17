<style>
    @keyframes fadeIn {
        0% { opacity: 0; transform: translateY(-20px); }
        100% { opacity: 1; transform: translateY(0); }
    }

    .fadeIn {
        animation: fadeIn 1s ease-out;
    }
</style>

@extends('layouts.app')

@section('container')
<div class="mt-16">
    <div class="flex justify-center items-center">
        <div class="flex flex-col items-center h-full mt-6">
            <div class="rounded-full overflow-hidden w-32 h-32 bg-black shadow-lg border-4 border-red-300 fadeIn">
                <img src="img/luffy.png" alt="Gambar" class="object-cover w-full h-full">
            </div>
            <div class="text-center mt-2">
                <p class="text-black font-protest-guerrilla text-2xl">Rifky Muhammad Shodiq</p>
                <p class="text-black text-xs">Universitas Muhammadiyah Surakarta</p>
                <p class="text-black text-xs">Klaten | Jawa Tengah</p>
            </div>
        </div>
    </div>


    <div class="flex justify-between mt-4 mb-4">
        <div class="w-full bg-gray-200 shadow-md rounded-md p-4 mx-2 fadeIn">
            <!-- Konten untuk bagian kiri (About Us) -->
            <h2 class="text-xl font-bold">Resume</h2>
            <p class="text-justify">Saya merupakan freshgraduate jurusan Teknik Informatika Universitas
                Muhammadiyah Surakarta yang memiliki motivasi tinggi dalam
                mendapatkan sebuah pengalaman baru dan semangat yang tinggi
                dalam belajar. Saya merupakan pribadi yang memiliki ketertarikan dan
                antusiasme yang tinggi terhadap tantangan dan kesempatan baru,
                serta sebelumya saya juga memiliki beberapa pengalaman pada
                bidang IT seperti pemrograman web. Saya saat ini mendalami bahasa
                pemograman PHP dan framework laravel. Saya juga menggunakan
                javascript dan database menggunakan MySql serta bootstrap dan
                tailwind css untuk mendukung sistem saya.</p>
        </div>
        <div class="w-full bg-gray-200 shadow-md rounded-md p-4 mx-2 fadeIn">
            <!-- Konten untuk bagian kanan (Hasil Project) -->
            <h2 class="text-xl font-bold">Hasil Project</h2>
            <p>Galeri atau deskripsi singkat tentang proyek-proyek yang telah diselesaikan.</p>
        </div>
    </div>

</div>
@endsection
