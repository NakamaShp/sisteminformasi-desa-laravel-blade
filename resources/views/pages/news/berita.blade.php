@extends('layouts.app')
@section('title', 'Portal Berita Desa')

@section('content')
<style>
    @media (min-width: 1024px) {
        .desktop-adjust {
            margin-top: -2rem;
            padding-top: 1rem;
        }
    }
</style>

<main class="container mx-auto pt-18 pb-3 px-4 sm:px-8 max-w-7xl"> 
    {{-- Center dengan mx-auto dan max-w-7xl --}}
    
    <!-- Featured News Banner -->
    <section class="hero-section h-64 md:h-[430px] flex mb-12 items-center justify-center relative pt-8 md:pt-0 desktop-adjust">
        <div class="relative rounded-lg overflow-hidden shadow-lg w-full h-[430px] max-w-6xl mx-auto">
            
            {{-- Slideshow Container --}}
            <div class="slide-container relative h-full w-full mx-auto">
                @foreach ($banners as $banner)
                    <div class="slide absolute inset-0 transition-opacity duration-1000 opacity-0 z-0">
                        <a href="{{ route('news.show', $banner->news->slug) }}">
                            <img src="{{ asset('storage/' . $banner->news->thumbnail) }}"
                                alt="{{ $banner->news->title }}"
                                class="w-full h-[430px] object-cover">
                            <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-transparent flex flex-col justify-end p-6">
                                <h2 class="text-2xl md:text-3xl font-bold text-white mb-2">
                                    {{ $banner->news->title }}
                                </h2>
                                <p class="text-white/90 line-clamp-2">
                                    {{ $banner->news->description }}
                                </p>
                                <span class="mt-4 w-fit bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded transition duration-300 inline-block">
                                    Baca Selengkapnya
                                </span>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

            {{-- Navigation Arrows --}}
            <button id="prevBtn"
                class="absolute left-4 top-1/2 -translate-y-1/2 bg-black/30 hover:bg-black/50 text-white p-3 rounded-full transition z-20">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>

            <button id="nextBtn"
                class="absolute right-4 top-1/2 -translate-y-1/2 bg-black/30 hover:bg-black/50 text-white p-3 rounded-full transition z-20">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>

            {{-- Dots Indicator --}}
            <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex space-x-2 z-20">
                @for ($i = 0; $i < count($banners); $i++)
                    <button class="dot w-3 h-3 bg-white/70 hover:bg-white rounded-full transition-all duration-300 opacity-50"
                        data-index="{{ $i }}"></button>
                @endfor
            </div>
        </div>
    </section>

    <!-- News Grid -->
    <section class="mb-12 py-20 md:py-0 text-center md:text-left">
        <h2 class="text-2xl font-bold text-gray-800 mb-2">Berita Desa</h2>
        <p class="font-medium text-gray-800 mb-8">
            Menyajikan informasi terbaru tentang peristiwa, berita terkini, dan artikel-artikel jurnalistik dari Desa Air Senggeris
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 place-items-center">
            @foreach ($news as $new)
                <a href="{{ route('news.show', $new->slug) }}"
                   class="block bg-white rounded shadow-md overflow-hidden hover:shadow-lg transition duration-300 w-full max-w-sm">
                    <img src="{{ asset('storage/' . $new->thumbnail) }}"
                         alt="{{ $new->title }}"
                         class="w-full h-48 object-cover">
                    <div class="p-4 text-left">
                        <span class="text-xs text-blue-600 font-semibold uppercase tracking-wide">
                            {{ $new->newsCategory->title }}
                        </span>
                        <h3 class="text-lg font-bold text-gray-800 mt-2 mb-2 line-clamp-2">
                            {{ $new->title }}
                        </h3>
                        <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                            {{ Str::limit(strip_tags($new->content), 150) }}
                        </p>
                        <div class="flex items-center justify-between text-xs text-gray-500">
                            <span>{{ $new->updated_at->format('d M Y') }}</span>
                            <span class="flex items-center">
                                <i class="far fa-eye mr-1"></i> {{ $new->views }} views
                            </span>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </section>

    <!-- Load More Button -->
    <div class="text-center my-12 mt-8">
        <button
            class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-300">
            Muat Lebih Banyak Berita
        </button>
    </div>
</main>

@endsection

{{-- Slideshow Script --}}
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.dot');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const hero = document.querySelector('.hero-section');
        let current = 0;
        let interval;

        if (!slides.length) return;

        const showSlide = (i) => {
            slides.forEach((s, idx) => {
                s.style.opacity = idx === i ? '1' : '0';
                s.style.zIndex = idx === i ? '10' : '0';
            });
            dots.forEach((d, idx) => {
                d.classList.toggle('opacity-100', idx === i);
                d.classList.toggle('opacity-50', idx !== i);
            });
            current = i;
        };

        const next = () => showSlide((current + 1) % slides.length);
        const prev = () => showSlide((current - 1 + slides.length) % slides.length);
        const start = () => interval = setInterval(next, 5000);
        const stop = () => clearInterval(interval);

        prevBtn.addEventListener('click', () => { prev(); stop(); start(); });
        nextBtn.addEventListener('click', () => { next(); stop(); start(); });
        dots.forEach((dot, i) => dot.addEventListener('click', () => { showSlide(i); stop(); start(); }));

        hero.addEventListener('mouseenter', stop);
        hero.addEventListener('mouseleave', start);

        showSlide(0);
        if (slides.length > 1) start();
    });
</script>
