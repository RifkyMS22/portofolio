<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Portofolio</title>

        <!-- Tautkan Tailwind CSS dari CDN -->
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

        <!-- Tautkan Font Awesome dari CDN -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

        <!-- Tambahkan ikon favicon -->
        <link rel="icon" href="https://fontawesome.com/icons/apple-touch-icon.png" type="image/png">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Protest+Guerrilla&display=swap">
        {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
        @vite('resources/css/app.css')

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    </head>
    <body class="bg-white bg-gradient-to-r">




    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @include('layouts.header')

    <main>
        @yield('container')
    </main>

    {{-- @include('layouts.footer') --}}

</body>
</html>
