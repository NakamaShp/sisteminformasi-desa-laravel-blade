@extends('layouts.app')


@section('title', 'Beranda - Website Desa Air Senggeris')

@section ('content')



<section class="bg-gray-50">
    <!-- Header -->
    <div x-data="{ menuOpen: false }" class="container max-w-7xl mx-auto px-10">
        <!-- Header -->
     

        <!-- Hero Section -->
        <section class="relative">
            <div>
                <img src="{{ asset('images/gambar.jpeg') }}"
                    alt="gambar-1"
                    class="w-[400vh] h-[75vh] object-cover">
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Tentang Desa Kami</h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">Desa Air Senggeris adalah desa yang terletak di kawasan pegunungan dengan keindahan alam yang menakjubkan.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-gray-50 p-6 rounded-lg shadow-sm hover:shadow-md transition duration-300">
                        <div class="text-blue-600 text-3xl mb-4">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Populasi</h3>
                        <p class="text-gray-600">Sebanyak 1.250 jiwa yang hidup dalam harmoni dengan alam sekitar.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg shadow-sm hover:shadow-md transition duration-300">
                        <div class="text-green-600 text-3xl mb-4">
                            <i class="fas fa-map-marked-alt"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Luas Wilayah</h3>
                        <p class="text-gray-600">Memiliki luas wilayah sebesar 15 km² dengan mayoritas wilayah perkebunan.</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg shadow-sm hover:shadow-md transition duration-300">
                        <div class="text-yellow-600 text-3xl mb-4">
                            <i class="fas fa-home"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Jumlah Rumah Tangga</h3>
                        <p class="text-gray-600">Terdiri dari 320 rumah tangga yang menjaga nilai-nilai kerukunan.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Vision Mission Section -->
        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Visi dan Misi Desa</h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">Membangun desa yang sejahtera, mandiri, dan berbudaya.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                    <div class="bg-white p-8 rounded-lg shadow-md">
                        <h3 class="text-2xl font-bold text-blue-600 mb-4 flex items-center">
                            <i class="fas fa-eye mr-2"></i> Visi Desa
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            Menjadi desa wisata yang unggul dalam bidang pertanian organik, pelestarian lingkungan, dan pengembangan pariwisata berbasis budaya lokal.
                        </p>
                    </div>

                    <div class="bg-white p-8 rounded-lg shadow-md">
                        <h3 class="text-2xl font-bold text-green-600 mb-4 flex items-center">
                            <i class="fas fa-bullseye mr-2"></i> Misi Desa
                        </h3>
                        <ul class="space-y-3 text-gray-700">
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2"><i class="fas fa-check-circle"></i></span>
                                Mengembangkan pertanian organik sebagai sumber pendapatan utama
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2"><i class="fas fa-check-circle"></i></span>
                                Melestarikan warisan budaya dan adat istiadat setempat
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2"><i class="fas fa-check-circle"></i></span>
                                Meningkatkan kualitas infrastruktur dan fasilitas umum
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2"><i class="fas fa-check-circle"></i></span>
                                Mendorong partisipasi masyarakat dalam pembangunan desa
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Map Section -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Lokasi Desa</h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">Temukan lokasi pasti kami di bawah ini</p>
                </div>

                <div class="max-w-4xl mx-auto">
                    <div class="aspect-w-16 aspect-h-9 bg-gray-200 rounded-lg overflow-hidden">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.943031772756!2d106.82613751476393!3d-6.175298995128807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698c69b8a9c0cb%3A0x5b1a086e5a4b8a9f!2sDesa%20Wisata%20Kebun!5e0!3m2!1sid!2sid!4v1621234567890!5m2!1sid!2sid"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>
        </section>

        <!-- Gallery Section -->
        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Galeri Desa</h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">Momenn-momen indah dari desa kami</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    <div class="overflow-hidden rounded-lg shadow-md hover:shadow-lg transition duration-300">
                        <img src="https://placehold.co/400x300/0066cc/ffffff?text=Sawah" alt="Panorama sawah di desa" class="w-full h-48 object-cover">
                    </div>
                    <div class="overflow-hidden rounded-lg shadow-md hover:shadow-lg transition duration-300">
                        <img src="https://placehold.co/400x300/0066cc/ffffff?text=Rumah" alt="Rumah adat tradisional" class="w-full h-48 object-cover">
                    </div>
                    <div class="overflow-hidden rounded-lg shadow-md hover:shadow-lg transition duration-300">
                        <img src="https://placehold.co/400x300/0066cc/ffffff?text=Festival" alt="Festival budaya desa" class="w-full h-48 object-cover">
                    </div>
                    <div class="overflow-hidden rounded-lg shadow-md hover:shadow-lg transition duration-300">
                        <img src="https://placehold.co/400x300/0066cc/ffffff?text=Lanskap" alt="Lanskap pegunungan desa" class="w-full h-48 object-cover">
                    </div>
                    <div class="overflow-hidden rounded-lg shadow-md hover:shadow-lg transition duration-300">
                        <img src="https://placehold.co/400x300/0066cc/ffffff?text=Pertanian" alt="Petani bekerja di ladang" class="w-full h-48 object-cover">
                    </div>
                    <div class="overflow-hidden rounded-lg shadow-md hover:shadow-lg transition duration-300">
                        <img src="https://placehold.co/400x300/0066cc/ffffff?text=Tanaman" alt="Tanaman herbal tradisional" class="w-full h-48 object-cover">
                    </div>
                    <div class="overflow-hidden rounded-lg shadow-md hover:shadow-lg transition duration-300">
                        <img src="https://placehold.co/400x300/0066cc/ffffff?text=Masyarakat" alt="Masyarakat desa berkumpul" class="w-full h-48 object-cover">
                    </div>
                    <div class="overflow-hidden rounded-lg shadow-md hover:shadow-lg transition duration-300">
                        <img src="https://placehold.co/400x300/0066cc/ffffff?text=Tradisi" alt="Tradisi upacara adat" class="w-full h-48 object-cover">
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Hubungi Kami</h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">Anda memiliki pertanyaan? Hubungi kami melalui kontak di bawah</p>
                </div>

                <div class="max-w-2xl mx-auto bg-gray-50 p-8 rounded-lg shadow-md">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div class="flex items-center space-x-3">
                            <div class="bg-blue-100 p-3 rounded-full">
                                <i class="fas fa-map-marker-alt text-blue-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Alamat</h4>
                                <p class="text-gray-600">Jalan Desa Air Senggeris, Kecamatan Betung, Kabupaten Banyuasin</p>
                            </div>
                        </div>

                        <div class="flex items-center space-x-3">
                            <div class="bg-green-100 p-3 rounded-full">
                                <i class="fas fa-phone-alt text-green-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Telepon</h4>
                                <p class="text-gray-600">(022) 123-4567</p>
                            </div>
                        </div>

                        <div class="flex items-center space-x-3">
                            <div class="bg-purple-100 p-3 rounded-full">
                                <i class="fas fa-envelope text-purple-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Email</h4>
                                <p class="text-gray-600">info@desaairsenggeris.desa.id</p>
                            </div>
                        </div>

                        <div class="flex items-center space-x-3">
                            <div class="bg-orange-100 p-3 rounded-full">
                                <i class="fas fa-clock text-orange-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Jam Operasional</h4>
                                <p class="text-gray-600">Senin - Jumat: 08:00 - 17:00</p>
                            </div>
                        </div>
                    </div>

                    <form class="space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <input type="text" placeholder="Nama Lengkap" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <input type="email" placeholder="Email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <input type="text" placeholder="Subjek" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <textarea rows="4" placeholder="Pesan Anda" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-4 rounded-md transition duration-300">
                            Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->

</section>

@endsection