@extends('layouts.app')

@section('title', 'Portal Berita Desa')

@section('content')

<!-- Main Content -->
<main class="container mx-auto py-3 px-8 max-w-7xl">


    <!-- Featured News Banner -->
    <section class="hero-section h-64 md:h-[400px] flex mb-8 items-center justify-center relative">
    <div class="relative rounded overflow-hidden shadow-lg w-full max-w-5xl mx-auto h-[400px]"> {{-- Tambahkan h-[400px] di sini --}}

        {{-- Slideshow Container --}}
        {{-- Kontainer tunggal untuk semua slide --}}
        <div class="slide-container relative h-full w-full mx-auto">
            {{-- Loop through banners to create slides --}}
            @foreach ($banners as $index => $banner)
                {{-- Slide --}}
                {{-- Hanya elemen slide yang di-loop --}}
                <div class="slide absolute inset-0 transition-opacity duration-1000"
                     style="opacity: 0; z-index: 0;"> {{-- Atur initial state menggunakan style inline --}}
                    <a href="{{ route('news.show', $banner->news->slug) }}">
                        <img src="{{ asset('storage/' . $banner->news->thumbnail) }}"
                             alt="{{$banner->news->title}}"
                             class="w-full h-[400px] object-cover min-w-full">
                        <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-transparent flex flex-col justify-end p-6">
                            <h2 class="text-2xl md:text-3xl font-bold text-white mb-2">{{$banner->news->title}}</h2>
                            <p class="text-white/90 line-clamp-2">{{$banner->news->description}}</p> {{-- Tambahkan line-clamp-2 untuk deskripsi --}}
                            <span
                                class="mt-4 w-fit bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded transition duration-300 inline-block"> {{-- Ubah <a> menjadi <span> karena sudah ada <a> di luar --}}
                                Baca Selengkapnya
                            </span>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>


        {{-- Navigation Arrows --}}
        <button id="prevBtn"
                class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-black/30 hover:bg-black/50 text-white p-3 rounded-full transition duration-300 z-20"> {{-- Ubah warna latar belakang menjadi hitam/30 agar lebih terlihat --}}
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </button>
        <button id="nextBtn"
                class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-black/30 hover:bg-black/50 text-white p-3 rounded-full transition duration-300 z-20"> {{-- Ubah warna latar belakang menjadi hitam/30 agar lebih terlihat --}}
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </button>
    </div>

    {{-- Dots Indicator --}}
    <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2 z-20"> {{-- Z-index ditingkatkan --}}
        {{-- Generate dots based on banner count --}}
        @for ($i = 0; $i < count($banners); $i++)
            {{-- Gunakan data-index untuk mencocokkan dengan slide-nya --}}
            <button class="dot w-3 h-3 bg-white/70 hover:bg-white rounded-full transition-all duration-300 opacity-50" data-index="{{$i}}"></button>
        @endfor
    </div>
</section>

    <!-- News Grid -->
    <section class="mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-2">Berita Desa</h2>
        <p class="font-medium text-gray-800 mb-8">Menyajikan informasi terbaru tentang peristiwa, berita
            terkini, dan artikel-artikel jurnalistik dari Desa Air Senggeris</p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            {{-- Loop through news --}}
            @foreach ($news as $new)
            <article class="bg-white rounded shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                <img src="{{ asset('storage/' . $new->thumbnail) }}" 
                     alt="{{$new->title}}" 
                     class="w-full h-48 object-cover">
                <div class="p-4">
                    <span
                        class="text-xs text-blue-600 font-semibold uppercase tracking-wide">{{$new->newsCategory->title}}</span>
                    <h3 class="text-lg font-bold text-gray-800 mt-2 mb-2 line-clamp-2">
                        {{$new->title}}
                    </h3>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                        {{-- Use strip_tags and limit --}}
                        {{Str::limit(strip_tags($new->content), 150)}}
                    </p>
                    <div class="flex items-center justify-between text-xs text-gray-500">
                        {{-- Format date --}}
                        <span>{{$new->updated_at->format('d M Y')}}</span>

                        <div>
                            {{-- Display view count --}}
                            <span class="flex items-center">
                                <i class="far fa-eye mr-1"></i>
                                {{$new->views}} views
                            </span>

                        </div>

                    </div>

                </div>
            </article>
            @endforeach
        </div>
    </section>

    <!-- Load More Button -->
    <div class="text-center my-12">
        <button
            class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-300">
            Muat Lebih Banyak Berita
        </button>
    </div>

</main>


@endsection


<script>

 document.addEventListener('DOMContentLoaded', function () {
        // Ambil semua elemen yang diperlukan
        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.dot');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const totalSlides = slides.length;
        let currentSlide = 0;

        if (totalSlides === 0) return; // Hentikan jika tidak ada banner

        // Fungsi untuk menampilkan slide tertentu
        function showSlide(index) {
            // Normalisasi index
            if (index >= totalSlides) {
                currentSlide = 0;
            } else if (index < 0) {
                currentSlide = totalSlides - 1;
            } else {
                currentSlide = index;
            }

            // Sembunyikan semua slide dan non-aktifkan semua dots
            slides.forEach(slide => {
                slide.style.opacity = '0';
                slide.style.zIndex = '0';
            });
            dots.forEach(dot => {
                dot.classList.remove('opacity-100');
                dot.classList.add('opacity-50');
            });

            // Tampilkan slide yang aktif
            slides[currentSlide].style.opacity = '1';
            slides[currentSlide].style.zIndex = '10'; // Pastikan slide aktif berada di depan
            
            // Aktifkan dot yang sesuai
            dots[currentSlide].classList.remove('opacity-50');
            dots[currentSlide].classList.add('opacity-100');
        }

        // Fungsi untuk mengganti slide (maju/mundur)
        function changeSlide(n) {
            showSlide(currentSlide + n);
            resetAutoSlide();
        }

        // Inisialisasi slide pertama
        showSlide(currentSlide);

        // Event Listeners untuk Tombol Panah
        nextBtn.addEventListener('click', () => {
            changeSlide(1);
        });

        prevBtn.addEventListener('click', () => {
            changeSlide(-1);
        });

        // Event Listeners untuk Dots
        dots.forEach(dot => {
            dot.addEventListener('click', (e) => {
                // Ambil index dari atribut data-index
                const index = parseInt(e.target.getAttribute('data-index'));
                showSlide(index);
                resetAutoSlide();
            });
        });

        // Opsi: Auto Slideshow (Ganti setiap 5 detik)
        let slideInterval;
        const intervalTime = 5000;

        function startAutoSlide() {
            slideInterval = setInterval(() => {
                changeSlide(1);
            }, intervalTime);
        }

        function resetAutoSlide() {
            clearInterval(slideInterval);
            startAutoSlide();
        }
        
        // Mulai auto slide hanya jika ada lebih dari 1 banner
        if (totalSlides > 1) {
            startAutoSlide();

            // Opsional: Hentikan auto slide saat mouse di atas banner
            const heroSection = document.querySelector('.hero-section');
            heroSection.addEventListener('mouseenter', () => clearInterval(slideInterval));
            heroSection.addEventListener('mouseleave', startAutoSlide);
        }
    });

document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.dot');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    let currentSlide = 0;
    let slideInterval;

    // Initialize first slide
    if (slides.length > 0) {
        slides[0].style.opacity = '1';
    }

    // Function to show a specific slide
    function showSlide(index) {
        // Hide all slides
        slides.forEach((slide, i) => {
            slide.style.opacity = '0';
        });

        // Update dots
        dots.forEach((dot, i) => {
            dot.classList.remove('opacity-100');
            dot.classList.add('opacity-50');
        });

        // Show the current slide
        if (slides[index]) {
            slides[index].style.opacity = '1';
        }

        // Set active state for current dot
        if (dots[index]) {
            dots[index].classList.remove('opacity-50');
            dots[index].classList.add('opacity-100');
        }

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
    dots.forEach((dot, index) => {
        dot.addEventListener('click', function() {
            showSlide(index);
            stopSlideShow();
            startSlideShow();
        });
    });

    // Pause slideshow on hover
    const heroSection = document.querySelector('.hero-section');
    heroSection.addEventListener('mouseenter', stopSlideShow);
    heroSection.addEventListener('mouseleave', startSlideShow);

    // Start the slideshow only if there are slides
    if (slides.length > 0) {
        startSlideShow();
    }
});
</script>