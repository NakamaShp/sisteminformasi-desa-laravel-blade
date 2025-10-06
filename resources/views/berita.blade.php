@extends('layouts.app')

@section('title', 'Portal Berita Desa')


@section('content')

<!-- Main Content -->
<main class="container mx-auto py-3">
    <!-- Featured News Banner -->
    <section class="hero-section h-64 md:h-96 flex items-center justify-center ">
        <div class="relative rounded overflow-hidden shadow-lg">
            <img src="/images/gambar.jpeg" alt="Berita Utama" class="w-full h-96 object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-transparent flex flex-col justify-end p-6">
                <h2 class="text-2xl md:text-3xl font-bold text-white mb-2">Program Bantuan Subsidi Bibit Tanaman Sayuran</h2>
                <p class="text-white/90">Desa Air Senggeris meluncurkan program subsidi bibit tanaman sayuran bagi petani</p>
                <a href="#" class="mt-4 w-fit bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded transition duration-300">
                    Baca Selengkapnya
                </a>
            </div>
        </div>
    </section>



    <!-- News Grid -->
    <section class="mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-2">Berita Desa</h2>
        <p class="font-medium text-gray-800 mb-8">Menyajikan informasi terbaru tentang peristiwa, berita terkini, dan artikel-artikel jurnalistik dari Desa Kersik</p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- News Item 1 -->
            <article class="bg-white rounded shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                <img src="https://placehold.co/400x240/003366/ffffff?text=Berita+1" alt="Berita Pertanian" class="w-full h-48 object-cover">
                <div class="p-4">
                    <span class="text-xs text-blue-600 font-semibold uppercase tracking-wide">Pertanian</span>
                    <h3 class="text-lg font-bold text-gray-800 mt-2 mb-2 line-clamp-2">Program Bantuan Subsidi Bibit Tanaman Sayuran</h3>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-3">Desa Air Senggeris meluncurkan program subsidi bibit tanaman sayuran bagi petani skala kecil...</p>
                    <div class="flex items-center justify-between text-xs text-gray-500">
                        <span>Diposting 2 jam yang lalu</span>
                        <span class="flex items-center">
                            <i class="far fa-eye mr-1"></i>
                            245 views
                        </span>
                    </div>
                </div>
            </article>

            <!-- News Item 2 -->
            <article class="bg-white rounded shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                <img src="https://placehold.co/400x240/003366/ffffff?text=Berita+2" alt="Berita Pendidikan" class="w-full h-48 object-cover">
                <div class="p-4">
                    <span class="text-xs text-blue-600 font-semibold uppercase tracking-wide">Pendidikan</span>
                    <h3 class="text-lg font-bold text-gray-800 mt-2 mb-2 line-clamp-2">Pelatihan Komputer Gratis untuk Anak-anak Desa</h3>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-3">Program pelatihan komputer gratis untuk anak-anak usia SD dan SMP di desa...</p>
                    <div class="flex items-center justify-between text-xs text-gray-500">
                        <span>Diposting 5 jam yang lalu</span>
                        <span class="flex items-center">
                            <i class="far fa-eye mr-1"></i>
                            189 views
                        </span>
                    </div>
                </div>
            </article>

            <!-- News Item 3 -->
            <article class="bg-white rounded shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                <img src="https://placehold.co/400x240/003366/ffffff?text=Berita+3" alt="Berita Kesehatan" class="w-full h-48 object-cover">
                <div class="p-4">
                    <span class="text-xs text-blue-600 font-semibold uppercase tracking-wide">Kesehatan</span>
                    <h3 class="text-lg font-bold text-gray-800 mt-2 mb-2 line-clamp-2">Klinik Desa Gelar Program Kesehatan Keliling</h3>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-3">Klinik desa Air Senggeris akan menyelenggarakan program kesehatan keliling minggu depan...</p>
                    <div class="flex items-center justify-between text-xs text-gray-500">
                        <span>Diposting 1 hari yang lalu</span>
                        <span class="flex items-center">
                            <i class="far fa-eye mr-1"></i>
                            342 views
                        </span>
                    </div>
                </div>
            </article>

            <!-- News Item 4 -->
            <article class="bg-white rounded shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                <img src="https://placehold.co/400x240/003366/ffffff?text=Berita+4" alt="Berita Olahraga" class="w-full h-48 object-cover">
                <div class="p-4">
                    <span class="text-xs text-blue-600 font-semibold uppercase tracking-wide">Olahraga</span>
                    <h3 class="text-lg font-bold text-gray-800 mt-2 mb-2 line-clamp-2">Turnamen Sepak Bola Antar Desa Dimulai</h3>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-3">Turnamen sepak bola antar desa yang diadakan oleh PKK desa Air Senggeris...</p>
                    <div class="flex items-center justify-between text-xs text-gray-500">
                        <span>Diposting 2 hari yang lalu</span>
                        <span class="flex items-center">
                            <i class="far fa-eye mr-1"></i>
                            156 views
                        </span>
                    </div>
                </div>
            </article>

            <!-- News Item 5 -->
            <article class="bg-white rounded shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                <img src="https://placehold.co/400x240/003366/ffffff?text=Berita+5" alt="Berita Kegiatan" class="w-full h-48 object-cover">
                <div class="p-4">
                    <span class="text-xs text-blue-600 font-semibold uppercase tracking-wide">Kegiatan</span>
                    <h3 class="text-lg font-bold text-gray-800 mt-2 mb-2 line-clamp-2">Festival Budaya Tradisional Digelar di Desa</h3>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-3">Desa Air Senggeris akan menggelar festival budaya tradisional yang menampilkan...</p>
                    <div class="flex items-center justify-between text-xs text-gray-500">
                        <span>Diposting 3 hari yang lalu</span>
                        <span class="flex items-center">
                            <i class="far fa-eye mr-1"></i>
                            287 views
                        </span>
                    </div>
                </div>
            </article>

            <!-- News Item 6 -->
            <article class="bg-white rounded shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                <img src="https://placehold.co/400x240/003366/ffffff?text=Berita+6" alt="Berita Pemerintahan" class="w-full h-48 object-cover">
                <div class="p-4">
                    <span class="text-xs text-blue-600 font-semibold uppercase tracking-wide">Pemerintahan</span>
                    <h3 class="text-lg font-bold text-gray-800 mt-2 mb-2 line-clamp-2">Pemkab Gelar Workshop Pengelolaan Keuangan Desa</h3>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-3">Pemerintah kabupaten gelar workshop tentang pengelolaan keuangan desa...</p>
                    <div class="flex items-center justify-between text-xs text-gray-500">
                        <span>Diposting 4 hari yang lalu</span>
                        <span class="flex items-center">
                            <i class="far fa-eye mr-1"></i>
                            198 views
                        </span>
                    </div>
                </div>
            </article>
        </div>
    </section>

    <!-- Load More Button -->
    <div class="text-center m-12">
        <button class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-300">
            Muat Lebih Banyak Berita
        </button>
    </div>
</main>
</div>

@endsection