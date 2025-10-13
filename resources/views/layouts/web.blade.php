<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    </link>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- Letakkan di dekat CDN SweetAlert --}}
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
     <!-- TAMBAHKAN 3 BARIS INI -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Website Desa')</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-50">

    {{-- Header --}}
    @include('partials.header')

    {{-- Konten halaman --}}

    <main>

        @yield('content')

    </main>

    {{-- Footer --}}
    @include('partials.footer')

</body>

</html>