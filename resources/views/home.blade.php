@extends('layouts.app')

@section('container')
<div class="mt-16 mx-auto max-w-full px-2 sm:px-2 lg:px-4">
    <style>
        @keyframes fadeIn {
            0% { opacity: 0; transform: translateY(-20px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        .fadeIn {
            animation: fadeIn 1s ease-out;
        }
        .contact-icon {
        font-size: 24px; /* Sesuaikan ukuran ikon sesuai kebutuhan */
        }
    </style>
    <div class="flex justify-center items-center">
        <div class="flex flex-col items-center h-full mt-6">
            <div class="rounded-full overflow-hidden w-32 h-32 bg-black shadow-lg border-4 border-red-300 fadeIn">
                <img src="img/luffy.png" alt="Gambar" class="object-cover w-full h-full">
            </div>
            <div class="text-center mt-2 fadeIn">
                <p class="text-black font-protest-guerrilla text-2xl">Rifky Muhammad Shodiq</p>
                <p class="text-black text-xs">Universitas Muhammadiyah Surakarta</p>
                <p class="text-black text-xs">Klaten | Jawa Tengah</p>
            </div>
        </div>
    </div>

    <div class="mt-8 mx-auto max-w-full mr-6 ml-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <div class="w-full bg-gray-200 shadow-md rounded-md p-2 fadeIn mb-4 sm:mb-0">
                <!-- Konten untuk bagian kiri (About Us) -->
                <h2 class="text-xl font-bold">Resume</h2>
                <p class="text-justify">Saya merupakan freshgraduate jurusan Teknik Informatika Universitas
                    Muhammadiyah Surakarta yang memiliki motivasi tinggi dalam
                    mendapatkan sebuah pengalaman baru dan semangat yang tinggi
                    dalam belajar. Saya merupakan pribadi yang memiliki ketertarikan dan
                    antusiasme yang tinggi terhadap tantangan dan kesempatan baru,
                    serta sebelumnya saya juga memiliki beberapa pengalaman pada
                    bidang IT seperti pemrograman web. Saya saat ini mendalami bahasa
                    pemrograman PHP dan framework laravel. Saya juga menggunakan
                    javascript dan database menggunakan MySql serta bootstrap dan
                    tailwind css untuk mendukung sistem saya.</p>
            </div>
            <div class="w-full bg-gray-200 shadow-md rounded-md p-2 fadeIn">
                <!-- Konten untuk bagian kanan (Hasil Project) -->
                <h2 class="text-xl font-bold">Hasil Project</h2>
                <p><a href="https://github.com/RifkyMS22">https://github.com/RifkyMS22</a></p>
            </div>
        </div>
    </div>
</div>
<!-- Bagian Kontak (Footer) -->
<div class="footer mt-16 mx-auto max-w-full fadeIn">
    <div class="flex items-center justify-center">
        <ul class="list-none flex gap-4">
            <li><a href="https://wa.me/628123456789" target="_blank"><i class="fab fa-whatsapp contact-icon"></i></a></li>
            <li><a href="mailto:rifkymuhammadshodiq22@gmail.com" target="_blank"><i class="far fa-envelope contact-icon"></i></a></li>
            <li><a href="https://www.facebook.com/username" target="_blank"><i class="fab fa-facebook-f contact-icon"></i></a></li>
            <li><a href="https://twitter.com/username" target="_blank"><i class="fab fa-twitter contact-icon"></i></a></li>
            <li><a href="https://www.instagram.com/irrifky/" target="_blank"><i class="fab fa-instagram contact-icon"></i></a></li>
            <li><a href="https://github.com/RifkyMS22" target="_blank"><i class="fab fa-github contact-icon"></i></a></li>
        </ul>
    </div>
</div>



@endsection
