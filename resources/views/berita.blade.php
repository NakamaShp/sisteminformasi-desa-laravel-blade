@extends('layouts.app')

@section('title', 'Portal Berita Desa')

@section('content')

<!-- Main Content -->
<main class="container mx-auto py-3">
    <!-- Featured News Banner -->
<section class="hero-section h-64 md:h-96 flex mb-8 items-center justify-center">
    <div class="relative rounded overflow-hidden shadow-lg w-full max-w-6xl">
        <!-- Slideshow Container -->
        <div class="relative h-96 overflow-hidden">
            <!-- Slides -->
            <div class="slide-container relative h-full">
                <!-- Slide 1 -->
                <div class="slide absolute inset-0 transition-opacity duration-1000">
                    <img src="/images/gambar.jpeg" alt="Berita Utama 1" class="w-full h-96 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-transparent flex flex-col justify-end p-6">
                        <h2 class="text-2xl md:text-3xl font-bold text-white mb-2">Program Bantuan Subsidi Bibit Tanaman Sayuran</h2>
                        <p class="text-white/90">Desa Air Senggeris meluncurkan program subsidi bibit tanaman sayuran bagi petani</p>
                        <a href="#" class="mt-4 w-fit bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded transition duration-300">
                            Baca Selengkapnya
                        </a>
                    </div>
                </div>
                
                <!-- Slide 2 -->
                <div class="slide absolute inset-0 transition-opacity duration-1000 opacity-0">
                    <img src="/images/gambar2.jpeg" alt="Berita Utama 2" class="w-full h-96 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-transparent flex flex-col justify-end p-6">
                        <h2 class="text-2xl md:text-3xl font-bold text-white mb-2">Festival Budaya Desa Air Senggeris</h2>
                        <p class="text-white/90">Rangkaian kegiatan untuk melestarikan budaya lokal dan meningkatkan pariwisata desa</p>
                        <a href="#" class="mt-4 w-fit bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded transition duration-300">
                            Baca Selengkapnya
                        </a>
                    </div>
                </div>
                
                <!-- Slide 3 -->
                <div class="slide absolute inset-0 transition-opacity duration-1000 opacity-0">
                    <img src="/images/gambar3.jpeg" alt="Berita Utama 3" class="w-full h-96 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-transparent flex flex-col justify-end p-6">
                        <h2 class="text-2xl md:text-3xl font-bold text-white mb-2">Pembangunan Jalan Desa Tahap Kedua</h2>
                        <p class="text-white/90">Peningkatan infrastruktur jalan untuk menghubungkan wilayah terpencil di Desa Air Senggeris</p>
                        <a href="#" class="mt-4 w-fit bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded transition duration-300">
                            Baca Selengkapnya
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Navigation Arrows -->
            <button id="prevBtn" class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white/30 hover:bg-white/50 text-white p-2 rounded-full transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <button id="nextBtn" class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white/30 hover:bg-white/50 text-white p-2 rounded-full transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
            
            <!-- Dots Indicator -->
            <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
                <button class="dot w-3 h-3 bg-white rounded-full opacity-100" data-slide="0"></button>
                <button class="dot w-3 h-3 bg-white/50 rounded-full" data-slide="1"></button>
                <button class="dot w-3 h-3 bg-white/50 rounded-full" data-slide="2"></button>
            </div>
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

<!-- Slideshow Script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.dot');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        let currentSlide = 0;
        let slideInterval;
        
        // Function to show a specific slide
        function showSlide(index) {
            // Hide all slides
            slides.forEach(slide => {
                slide.style.opacity = '0';
            });
            
            // Remove active state from all dots
            dots.forEach(dot => {
                dot.classList.remove('opacity-100');
                dot.classList.add('opacity-50');
            });
            
            // Show the current slide
            slides[index].style.opacity = '1';
            
            // Set active state for current dot
            dots[index].classList.remove('opacity-50');
            dots[index].classList.add('opacity-100');
            
            currentSlide = index;
        }
        
        // Function to show the next slide
        function nextSlide() {
            const newSlide = (currentSlide + 1) % slides.length;
            showSlide(newSlide);
        }
        
        // Function to show the previous slide
        function prevSlide() {
            const newSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(newSlide);
        }
        
        // Function to start the automatic slideshow
        function startSlideShow() {
            slideInterval = setInterval(nextSlide, 5000); // Change slide every 5 seconds
        }
        
        // Function to stop the automatic slideshow
        function stopSlideShow() {
            clearInterval(slideInterval);
        }
        
        // Event listeners for navigation buttons
        nextBtn.addEventListener('click', function() {
            nextSlide();
            stopSlideShow();
            startSlideShow();
        });
        
        prevBtn.addEventListener('click', function() {
            prevSlide();
            stopSlideShow();
            startSlideShow();
        });
        
        // Event listeners for dots
        dots.forEach(dot => {
            dot.addEventListener('click', function() {
                const slideIndex = parseInt(this.getAttribute('data-slide'));
                showSlide(slideIndex);
                stopSlideShow();
                startSlideShow();
            });
        });
        
        // Pause slideshow on hover
        const heroSection = document.querySelector('.hero-section');
        heroSection.addEventListener('mouseenter', stopSlideShow);
        heroSection.addEventListener('mouseleave', startSlideShow);
        
        // Start the slideshow
        startSlideShow();
    });
</script>

@endsection