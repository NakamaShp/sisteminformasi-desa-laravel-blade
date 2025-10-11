@extends('layouts.layanan')

@section('content')
    <!-- Hero Section -->
    <section class=" bg-gray-900 mt-1  text-white py-12">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-3xl font-bold mb-4">Pelayanan Masyarakat Desa Air Senggeris</h2>
            <p class="text-xl mb-8 max-w-xl mx-auto">Temukan berbagai layanan administrasi desa yang dapat anda akses secara
                mudah dan transparan</p>
            <div class="flex justify-center space-x-4">
                <a href="#panduan-layanan"
                    class=" border bg-blue text-primary-900 px-6 py-3 rounded-lg font-semibold hover:bg-blue-800 transition">
                    <i data-feather="file-text" class="inline mr-2"></i> Panduan Layanan
                </a>
                <a href="#formulir-desa"
                    class="border border-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-800 hover:text-primary-900 transition">
                    <i data-feather="download" class="inline mr-2"></i> Formulir
                </a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Layanan Administratif</h2>

            <div class="text-white grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service Card 1 -->
                <div
                    class="service-card bg-gray-900 rounded-xl shadow-md overflow-hidden border border-gray-100 transition duration-300">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-primary-100 p-3 rounded-full mr-4">
                                <i data-feather="file-text" class="text-primary-900 w-6 h-6"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-primary-900">Surat Keterangan Domisili</h3>
                        </div>
                        <p class="text-secondary-500 mb-4">Surat keterangan tempat tinggal untuk berbagai keperluan
                            administrasi.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-secondary-500"><i data-feather="clock"
                                    class="inline mr-1 w-4 h-4"></i> 1 Hari Kerja</span>
                            <a href="" class="text-primary-500 font-medium hover:text-primary-700">Lihat Persyaratan
                                →</a>
                        </div>
                    </div>
                </div>

                <!-- Service Card 2 -->
                <div
                    class="service-card bg-gray-900 rounded-xl shadow-md overflow-hidden border border-gray-100 transition duration-300">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-primary-100 p-3 rounded-full mr-4">
                                <i data-feather="user-plus" class="text-primary-900 w-6 h-6"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-primary-900">Surat Keterangan Usaha</h3>
                        </div>
                        <p class="text-secondary-500 mb-4">Pendaftaran, perubahan data, dan penerbitan kartu keluarga.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-secondary-500"><i data-feather="clock"
                                    class="inline mr-1 w-4 h-4"></i> 3 Hari Kerja</span>
                            <a href="" class="text-primary-500 font-medium hover:text-primary-700">Lihat Persyaratan
                                →</a href="">
                        </div>
                    </div>
                </div>

                <!-- Service Card 3 -->
                <div
                    class="service-card bg-gray-900 rounded-xl shadow-md overflow-hidden border border-gray-100 transition duration-300">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-primary-100 p-3 rounded-full mr-4">
                                <i data-feather="home" class="text-primary-900 w-6 h-6"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-primary-900">Surat Keterangan Kematian</h3>
                        </div>
                        <p class="text-secondary-500 mb-4">Pengajuan izin pembangunan rumah atau bangunan lainnya.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-secondary-500"><i data-feather="clock"
                                    class="inline mr-1 w-4 h-4"></i> 5 Hari Kerja</span>
                            <a href="" class="text-primary-500 font-medium hover:text-primary-700">Lihat Persyaratan
                                →</a href="">
                        </div>
                    </div>
                </div>

                <!-- Service Card 4 -->
                <div
                    class="service-card bg-gray-900 rounded-xl shadow-md overflow-hidden border border-gray-100 transition duration-300">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-primary-100 p-3 rounded-full mr-4">
                                <i data-feather="heart" class="text-primary-900 w-6 h-6"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-primary-900">Surat Keterangan Tidak Mampu</h3>
                        </div>
                        <p class="text-secondary-500 mb-4">Keterangan untuk mengakses bantuan sosial dan kesehatan.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-secondary-500"><i data-feather="clock"
                                    class="inline mr-1 w-4 h-4"></i> 2 Hari Kerja</span>
                            <a href="" class="text-primary-500 font-medium hover:text-primary-700">Lihat Persyaratan
                                →</a href="">
                        </div>
                    </div>
                </div>

                <!-- Service Card 5 -->
                <div
                    class="service-card bg-gray-900 rounded-xl shadow-md overflow-hidden border border-gray-100 transition duration-300">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-primary-100 p-3 rounded-full mr-4">
                                <i data-feather="book" class="text-primary-900 w-6 h-6"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-primary-900">Surat Keterangan Penghasilan Orang Tua</h3>
                        </div>
                        <p class="text-secondary-500 mb-4">Pengurusan dokumen kelahiran untuk warga desa.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-secondary-500"><i data-feather="clock"
                                    class="inline mr-1 w-4 h-4"></i> 3 Hari Kerja</span>
                            <a href="" class="text-primary-500 font-medium hover:text-primary-700">Lihat Persyaratan
                                →</a href="">
                        </div>
                    </div>
                </div>

                <!-- Service Card 6 -->
                <div
                    class="service-card bg-gray-900 rounded-xl shadow-md overflow-hidden border border-gray-100 transition duration-300">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-primary-100 p-3 rounded-full mr-4">
                                <i data-feather="file-plus" class="text-primary-900 w-6 h-6"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-primary-900">Surat Keterangan Pindah/Datang WNI</h3>
                        </div>
                        <p class="text-secondary-500 mb-4">Temukan berbagai layanan administrasi lainnya yang tersedia.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-secondary-500"><i data-feather="info"
                                    class="inline mr-1 w-4 h-4"></i> Variatif</span>
                            <a href="" class="text-primary-500 font-medium hover:text-primary-700">Lihat
                                Persyaratan →</a>
                        </div>
                    </div>
                </div>

                <!-- Service Card 1 -->
                <div
                    class="service-card bg-gray-900 rounded-xl shadow-md overflow-hidden border border-gray-100 transition duration-300">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-primary-100 p-3 rounded-full mr-4">
                                <i data-feather="file-text" class="text-primary-900 w-6 h-6"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-primary-900">Surat Keterangan Kehilangan</h3>
                        </div>
                        <p class="text-secondary-500 mb-4">Surat keterangan tempat tinggal untuk berbagai keperluan
                            administrasi.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-secondary-500"><i data-feather="clock"
                                    class="inline mr-1 w-4 h-4"></i> 1 Hari Kerja</span>
                            <a href="" class="text-primary-500 font-medium hover:text-primary-700">Lihat
                                Persyaratan →</a>
                        </div>
                    </div>
                </div>

                <!-- Service Card 1 -->
                <div
                    class="service-card bg-gray-900 rounded-xl shadow-md overflow-hidden border border-gray-100 transition duration-300">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-primary-100 p-3 rounded-full mr-4">
                                <i data-feather="file-text" class="text-primary-900 w-6 h-6"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-primary-900">Surat Keterangan Kuasa Ahli Waris</h3>
                        </div>
                        <p class="text-secondary-500 mb-4">Surat keterangan tempat tinggal untuk berbagai keperluan
                            administrasi.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-secondary-500"><i data-feather="clock"
                                    class="inline mr-1 w-4 h-4"></i> 1 Hari Kerja</span>
                            <a href="" class="text-primary-500 font-medium hover:text-primary-700">Lihat
                                Persyaratan →</a>
                        </div>
                    </div>
                </div>

                <!-- Service Card 1 -->
                <div
                    class="service-card bg-gray-900 rounded-xl shadow-md overflow-hidden border border-gray-100 transition duration-300">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-primary-100 p-3 rounded-full mr-4">
                                <i data-feather="file-text" class="text-primary-900 w-6 h-6"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-primary-900">Surat Keterangan Jual Beli Tanah</h3>
                        </div>
                        <p class="text-secondary-500 mb-4">Surat keterangan tempat tinggal untuk berbagai keperluan
                            administrasi.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-secondary-500"><i data-feather="clock"
                                    class="inline mr-1 w-4 h-4"></i> 1 Hari Kerja</span>
                            <a href="" class="text-primary-500 font-medium hover:text-primary-700">Lihat
                                Persyaratan →</a>
                        </div>
                    </div>
                </div>

                <!-- Service Card 1 -->
                <div
                    class="service-card bg-gray-900 rounded-xl shadow-md overflow-hidden border border-gray-100 transition duration-300">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-primary-100 p-3 rounded-full mr-4">
                                <i data-feather="file-text" class="text-primary-900 w-6 h-6"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-primary-900">Surat Keterangan Pengantar Perkawinan</h3>
                        </div>
                        <p class="text-secondary-500 mb-4">Surat keterangan tempat tinggal untuk berbagai keperluan
                            administrasi.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-secondary-500"><i data-feather="clock"
                                    class="inline mr-1 w-4 h-4"></i> 1 Hari Kerja</span>
                            <a href="" class="text-primary-500 font-medium hover:text-primary-700">Lihat
                                Persyaratan →</a>
                        </div>
                    </div>
                </div>

                <!-- Service Card 1 -->
                <div
                    class="service-card bg-gray-900 rounded-xl shadow-md overflow-hidden border border-gray-100 transition duration-300">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-primary-100 p-3 rounded-full mr-4">
                                <i data-feather="file-text" class="text-primary-900 w-6 h-6"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-primary-900">Surat Keterangan Belum Menikah</h3>
                        </div>
                        <p class="text-secondary-500 mb-4">Surat keterangan tempat tinggal untuk berbagai keperluan
                            administrasi.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-secondary-500"><i data-feather="clock"
                                    class="inline mr-1 w-4 h-4"></i> 1 Hari Kerja</span>
                            <a href="" class="text-primary-500 font-medium hover:text-primary-700">Lihat
                                Persyaratan →</a>
                        </div>
                    </div>
                </div>

                <!-- Service Card 1 -->
                <div
                    class="service-card bg-gray-900 rounded-xl shadow-md overflow-hidden border border-gray-100 transition duration-300">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-primary-100 p-3 rounded-full mr-4">
                                <i data-feather="file-text" class="text-primary-900 w-6 h-6"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-primary-900">Surat Keterangan Hibah/Wakaf</h3>
                        </div>
                        <p class="text-secondary-500 mb-4">Surat keterangan tempat tinggal untuk berbagai keperluan
                            administrasi.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-secondary-500"><i data-feather="clock"
                                    class="inline mr-1 w-4 h-4"></i> 1 Hari Kerja</span>
                            <a href="" class="text-primary-500 font-medium hover:text-primary-700">Lihat
                                Persyaratan →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Guide Section -->
    <section id="panduan-layanan" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">

            <div class="flex flex-col md:flex-row items-stretch gap-8">

                {{-- Bagian Kiri: Panduan Layanan Desa --}}
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <div class="bg-white p-6 rounded-xl shadow-md border border-gray-200 h-full">
                        <h2 class="text-3xl font-bold text-primary-900 mb-4">Panduan Layanan Desa</h2>
                        <p class="text-secondary-500 mb-6">Pelajari langkah-langkah pengajuan berbagai layanan administrasi
                            desa dengan panduan yang jelas dan mudah dipahami.</p>
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <i data-feather="check-circle" class="text-green-500 mr-3 mt-1 flex-shrink-0"></i>
                                <span class="text-secondary-900">Alur pengajuan yang terstruktur</span>
                            </li>
                            <li class="flex items-start">
                                <i data-feather="check-circle" class="text-green-500 mr-3 mt-1 flex-shrink-0"></i>
                                <span class="text-secondary-900">Dokumen persyaratan lengkap</span>
                            </li>
                            <li class="flex items-start">
                                <i data-feather="check-circle" class="text-green-500 mr-3 mt-1 flex-shrink-0"></i>
                                <span class="text-secondary-900">Estimasi waktu penyelesaian</span>
                            </li>
                            <li class="flex items-start">
                                <i data-feather="check-circle" class="text-green-500 mr-3 mt-1 flex-shrink-0"></i>
                                <span class="text-secondary-900">Biaya administrasi (jika ada)</span>
                            </li>
                        </ul>
                        <button
                            class="mt-8 bg-primary-500 text-white px-6 py-3 rounded-lg font-semibold hover:bg-primary-600 transition">
                            <i data-feather="download" class="inline mr-2"></i> Unduh Panduan
                        </button>
                    </div>
                </div>

                {{-- Bagian Kanan: Contoh Panduan --}}
                <div class="md:w-1/2">
                    <div class="bg-white p-6 rounded-xl shadow-md border border-gray-200 h-full">
                        <div class="flex items-center mb-4">
                            <i data-feather="book-open" class="text-primary-900 w-8 h-8 mr-3"></i>
                            <h3 class="text-xl font-semibold text-primary-900">Contoh Panduan</h3>
                        </div>
                        <div class="space-y-4">
                            <div class="p-4 bg-primary-50 rounded-lg">
                                <h4 class="font-medium text-primary-900 mb-2">1. Surat Keterangan Domisili</h4>
                                <ol class="list-decimal list-inside text-secondary-500 space-y-1 pl-4">
                                    <li>Isi formulir pengajuan</li>
                                    <li>Lampirkan fotokopi KTP dan KK</li>
                                    <li>Tunukkan dokumen asli untuk verifikasi</li>
                                    <li>Proses validasi oleh petugas</li>
                                    <li>Ambil surat di kantor desa</li>
                                </ol>
                            </div>
                            <div class="p-4 bg-primary-50 rounded-lg">
                                <h4 class="font-medium text-primary-900 mb-2">2. Kartu Keluarga Baru</h4>
                                <ol class="list-decimal list-inside text-secondary-500 space-y-1 pl-4">
                                    <li>Formulir permohonan</li>
                                    <li>Surat nikah/cerai (jika ada perubahan)</li>
                                    <li>Fotokopi KTP kepala keluarga</li>
                                    <li>Verifikasi data oleh petugas</li>
                                    <li>Pencetakan KK baru</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Download Section -->
    <section id="formulir-desa" class="py-16 bg-primary-900 text-black-900">
        <div class="container mx-auto px-4 text-center ">
            <h2 class="text-3xl font-bold mb-6">Formulir Layanan Desa</h2>
            <p class="text-l mb-8 max-w-xl mx-auto">Unduh formulir yang diperlukan untuk pengajuan layanan administrasi
                desa</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
                <div class="bg-white text-primary-900 p-6 rounded-lg shadow">
                    <i data-feather="file-text" class="w-10 h-10 mx-auto mb-4"></i>
                    <h3 class="font-semibold mb-2">Formulir Domisili</h3>
                    <p class="text-secondary-500 mb-4 text-sm">Untuk pengajuan surat keterangan domisili</p>
                    <button class="text-primary-500 font-medium hover:text-sky-700 text-sm ">
                        <i data-feather="download" class="inline mr-1 "></i> Unduh PDF
                    </button>
                </div>
                <div class="bg-white text-primary-900 p-6 rounded-lg shadow">
                    <i data-feather="file-text" class="w-10 h-10 mx-auto mb-4"></i>
                    <h3 class="font-semibold mb-2">Formulir KK Baru</h3>
                    <p class="text-secondary-500 mb-4 text-sm">Untuk pembuatan kartu keluarga baru</p>
                    <button class="text-primary-500 font-medium hover:text-sky-700 text-sm">
                        <i data-feather="download" class="inline mr-1"></i> Unduh PDF
                    </button>
                </div>
                <div class="bg-white text-primary-900 p-6 rounded-lg shadow">
                    <i data-feather="file-text" class="w-10 h-10 mx-auto mb-4"></i>
                    <h3 class="font-semibold mb-2">Formulir SKTM</h3>
                    <p class="text-secondary-500 mb-4 text-sm">Untuk pengajuan surat keterangan tidak mampu</p>
                    <button class="text-primary-500 font-medium hover:text-sky-700 text-sm">
                        <i data-feather="download" class="inline mr-1"></i> Unduh PDF
                    </button>
                </div>
            </div>

            <button
                class="border border-white px-6 py-3 rounded-lg font-semibold hover:bg-sky-700 hover:text-primary-900 transition">
                <i data-feather="download-cloud" class="inline mr-2"></i> Lihat Semua Formulir
            </button>
        </div>
    </section>
@endsection
