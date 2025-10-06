@extends('layouts.app')

@section('title', 'Profil Desa - Desa Harmoni Nusantara')

@section('content')



<!-- Hero Banner -->
<div class="mt-1 hero-section h-64 md:h-96 flex items-center justify-center bg-blue-900">
    <div class="text-center px-4 ">
        <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">Selamat Datang di Desa Harmoni Nusantara</h2>
        <p class="text-xl text-white max-w-3xl mx-auto">Desa yang harmonis, maju, dan berbudaya di tengah keindahan alam Nusantara</p>
    </div>
</div>

<!-- Main Content -->
<main class="container mx-auto px-4 py-12">
    <!-- Profil Desa Section -->
    <section class="mb-16 fade-in">
        <h2 class="text-3xl font-bold text-blue-900 mb-8 text-center relative pb-4">
            Profil Desa
            <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-24 h-1 bg-blue-600 rounded-full"></span>
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Visi Misi -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-blue-100">
                <div class="bg-blue-900 px-6 py-4">
                    <h3 class="text-xl font-semibold text-white flex items-center">
                        <i data-feather="target" class="mr-2"></i> Visi & Misi
                    </h3>
                </div>
                <div class="p-6">
                    <h4 class="text-lg font-semibold text-blue-900 mb-3">Visi Desa</h4>
                    <p class="text-gray-700 mb-6">"Mewujudkan Desa Harmoni Nusantara yang mandiri, berbudaya, dan sejahtera dalam bingkai gotong royong."</p>

                    <h4 class="text-lg font-semibold text-blue-900 mb-3">Misi Desa</h4>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-start">
                            <i data-feather="check-circle" class="text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                            <span>Meningkatkan kualitas sumber daya manusia</span>
                        </li>
                        <li class="flex items-start">
                            <i data-feather="check-circle" class="text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                            <span>Mengembangkan ekonomi kreatif berbasis lokal</span>
                        </li>
                        <li class="flex items-start">
                            <i data-feather="check-circle" class="text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                            <span>Melestarikan budaya dan kearifan lokal</span>
                        </li>
                        <li class="flex items-start">
                            <i data-feather="check-circle" class="text-green-500 mr-2 mt-1 flex-shrink-0"></i>
                            <span>Membangun infrastruktur berkelanjutan</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Sejarah Desa -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-blue-100">
                <div class="bg-blue-900 px-6 py-4">
                    <h3 class="text-xl font-semibold text-white flex items-center">
                        <i data-feather="book" class="mr-2"></i> Sejarah Desa
                    </h3>
                </div>
                <div class="p-6">
                    <div class="mb-6">
                        <img src="https://picsum.photos/seed/sejarahdesa/640x360.jpg" alt="Sejarah Desa" class="w-full h-48 object-cover rounded-lg mb-4">
                        <p class="text-gray-700">Desa Harmoni Nusantara berdiri pada tahun 1923 dengan nama awal "Dukuh Rukun". Desa ini terbentuk dari penyatuan tiga padukuhan kecil yang saling berdekatan. Pada masa kemerdekaan, desa ini menjadi salah satu basis perjuangan di wilayah ini.</p>
                    </div>
                    <div class="border-t border-gray-200 pt-4">
                        <h4 class="text-lg font-semibold text-blue-900 mb-2">Asal Usul Nama</h4>
                        <p class="text-gray-700">Nama "Harmoni Nusantara" diresmikan pada tahun 1985, menggambarkan keragaman budaya dan harmonisasi masyarakat yang terdiri dari berbagai latar belakang etnis yang hidup rukun.</p>
                    </div>
                </div>
            </div>

            <!-- Data Umum -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-blue-100">
                <div class="bg-blue-900 px-6 py-4">
                    <h3 class="text-xl font-semibold text-white flex items-center">
                        <i data-feather="info" class="mr-2"></i> Data Umum
                    </h3>
                </div>
                <div class="p-6">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-blue-50 p-4 rounded-lg">
                            <p class="text-sm text-blue-600">Luas Wilayah</p>
                            <p class="text-xl font-bold text-blue-900">12.5 Km²</p>
                        </div>
                        <div class="bg-blue-50 p-4 rounded-lg">
                            <p class="text-sm text-blue-600">Jumlah Penduduk</p>
                            <p class="text-xl font-bold text-blue-900">8,742 Jiwa</p>
                        </div>
                        <div class="bg-blue-50 p-4 rounded-lg">
                            <p class="text-sm text-blue-600">Jumlah RT</p>
                            <p class="text-xl font-bold text-blue-900">42</p>
                        </div>
                        <div class="bg-blue-50 p-4 rounded-lg">
                            <p class="text-sm text-blue-600">Jumlah RW</p>
                            <p class="text-xl font-bold text-blue-900">8</p>
                        </div>
                    </div>

                    <div class="mt-6">
                        <h4 class="text-lg font-semibold text-blue-900 mb-3">Batas Wilayah</h4>
                        <ul class="space-y-2 text-gray-700">
                            <li class="flex items-center">
                                <i data-feather="compass" class="text-blue-500 mr-2"></i>
                                <span><span class="font-medium">Utara:</span> Desa Sejahtera Makmur</span>
                            </li>
                            <li class="flex items-center">
                                <i data-feather="compass" class="text-blue-500 mr-2"></i>
                                <span><span class="font-medium">Timur:</span> Desa Budaya Lestari</span>
                            </li>
                            <li class="flex items-center">
                                <i data-feather="compass" class="text-blue-500 mr-2"></i>
                                <span><span class="font-medium">Selatan:</span> Kecamatan Indah Permai</span>
                            </li>
                            <li class="flex items-center">
                                <i data-feather="compass" class="text-blue-500 mr-2"></i>
                                <span><span class="font-medium">Barat:</span> Sungai Harmoni</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Potensi Desa Section -->
    <section class="mb-16 fade-in">
        <h2 class="text-3xl font-bold text-blue-900 mb-8 text-center relative pb-4">
            Potensi Desa
            <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-24 h-1 bg-blue-600 rounded-full"></span>
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white rounded-xl shadow-md overflow-hidden border border-blue-100 hover:shadow-lg transition">
                <img src="https://picsum.photos/seed/pertanian/640x360.jpg" alt="Pertanian" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-blue-900 mb-2">Pertanian Organik</h3>
                    <p class="text-gray-700">Desa kami memiliki lahan pertanian subur dengan sistem organik yang menghasilkan beras dan sayuran berkualitas tinggi.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-md overflow-hidden border border-blue-100 hover:shadow-lg transition">
                <img src="https://picsum.photos/seed/kerajinan/640x360.jpg" alt="Kerajinan" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-blue-900 mb-2">Kerajinan Tangan</h3>
                    <p class="text-gray-700">Kain tenun tradisional dan ukiran kayu khas desa kami telah dikenal hingga mancanegara sebagai produk unggulan.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-md overflow-hidden border border-blue-100 hover:shadow-lg transition">
                <img src="https://picsum.photos/seed/wisata/640x360.jpg" alt="Wisata" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-blue-900 mb-2">Wisata Alam</h3>
                    <p class="text-gray-700">Air terjun alami dan pemandangan sawah terasering menjadi daya tarik wisatawan domestik maupun mancanegara.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-md overflow-hidden border border-blue-100 hover:shadow-lg transition">
                <img src="https://picsum.photos/seed/pendidikan/640x360.jpg" alt="Pendidikan" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-blue-900 mb-2">Pusat Belajar</h3>
                    <p class="text-gray-700">Desa kami memiliki pusat pelatihan keterampilan dan perpustakaan desa yang aktif menyelenggarakan berbagai kegiatan edukatif.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Peta Desa Section -->
    <section class="mb-16 fade-in">
        <h2 class="text-3xl font-bold text-blue-900 mb-8 text-center relative pb-4">
            Lokasi Desa
            <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-24 h-1 bg-blue-600 rounded-full"></span>
        </h2>

        <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-blue-100">
            <div class="h-96 bg-gray-200 flex items-center justify-center">
                <div class="text-center">
                    <i data-feather="map" class="w-16 h-16 text-blue-900 mx-auto mb-4"></i>
                    <p class="text-lg text-blue-900 font-medium">Peta Digital Desa Harmoni Nusantara</p>
                    <p class="text-gray-600 mt-2">Aktifkan lokasi untuk melihat peta interaktif</p>
                    <button class="mt-4 px-6 py-2 bg-blue-900 text-white rounded-lg hover:bg-blue-800 transition">
                        Lihat Peta Lengkap
                    </button>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Footer -->


@endsection

<script>
    feather.replace();

    // Animasi scroll
    document.addEventListener('DOMContentLoaded', function() {
        const sections = document.querySelectorAll('section');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fadeIn');
                }
            });
        }, {
            threshold: 0.1
        });

        sections.forEach(section => {
            section.classList.add('opacity-0', 'transition-opacity', 'duration-500');
            observer.observe(section);
        });

        // Tambahkan class ketika muncul di viewport
        const animateFadeIn = () => {
            sections.forEach(section => {
                const sectionTop = section.getBoundingClientRect().top;
                const windowHeight = window.innerHeight;

                if (sectionTop < windowHeight * 0.75) {
                    section.classList.remove('opacity-0');
                    section.classList.add('animate-fadeIn');
                }
            });
        };

        window.addEventListener('scroll', animateFadeIn);
        animateFadeIn(); // Jalankan sekali saat load
    });
</script>

</html>