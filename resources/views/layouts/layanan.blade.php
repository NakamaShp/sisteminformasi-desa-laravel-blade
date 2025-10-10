<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Website Desa')</title>
    
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
   <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
    @vite('resources/css/app.css')

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <script src="https://unpkg.com/feather-icons"></script>
    
    <style>
        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body class="bg-gray-50"> 

    {{-- Header --}}
    @include('partials.header')

    <main>
        @yield('content')
    </main>

         <!-- Footer page informasi layanan -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">Desa Air Senggeris</h3>
                    <p class="text-gray-400">Menyediakan berbagai layanan administrasi desa dengan pelayanan yang cepat, mudah, dan transparan.</p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Layanan</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white">Surat Keterangan</a></li>
                        <li><a href="#" class="hover:text-white">Kartu Keluarga</a></li>
                        <li><a href="#" class="hover:text-white">Akta Kelahiran</a></li>
                        <li><a href="#" class="hover:text-white">Izin Bangunan</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Kontak</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-start">
                            <i data-feather="map-pin" class="mr-2 w-4 h-4 mt-0.5"></i>
                            <span>Jl. Desa Air Senggeris, Kecamatan</span>
                        </li>
                        <li class="flex items-start">
                            <i data-feather="phone" class="mr-2 w-4 h-4 mt-0.5"></i>
                            <span>(021) 1234 5678</span>
                        </li>
                        <li class="flex items-start">
                            <i data-feather="mail" class="mr-2 w-4 h-4 mt-0.5"></i>
                            <span>info@airsenggeris.desa.id</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Jam Layanan</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex justify-between">
                            <span>Senin-Kamis</span>
                            <span>08:00 - 15:00</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Jumat</span>
                            <span>08:00 - 11:30</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Sabtu-Minggu</span>
                            <span>Tutup</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>© 2023 Desa Air Senggeris. Seluruh hak cipta dilindungi.</p>
            </div>
        </div>
    </footer>

    <script>
        feather.replace();
        
        // ... kode smooth scrolling ...
    </script>
</body>
</html>