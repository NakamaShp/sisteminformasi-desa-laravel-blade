@extends('layouts.app')

@section('title', 'Layanan Pengaduan Masyarakat')
@section('content')

<!-- Hero Section -->
<section class="mt-1">
    <div class="bg-blue-900 text-white py-10 hero-section h-64 md:h-40 flex items-center justify-center">
        <div class=" p-20 container mx-auto px-4 text-center">
            <h1 class="text-2xl md:text-3xl font-bold mb-4">Layanan Pengaduan Masyarakat</h1>
            <p class="text-medium text-blue-100 max-w-3xl mx-auto">Sampaikan keluhan, kritik, dan saran Anda untuk kemajuan desa kita bersama</p>
        </div>
    </div>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Form Pengaduan -->
            <section class="bg-white rounded-xl shadow-lg p-8 border border-blue-100 animate-fadeIn">
                <h2 class="text-2xl font-bold text-blue-900 mb-6 flex items-center">
                    <i data-feather="edit-3" class="mr-2"></i> Form Pengaduan
                </h2>

                <form id="complaintForm" class="space-y-6">
                    <div>
                        <label for="nama" class="block text-gray-700 font-medium mb-2">Nama Lengkap</label>
                        <input type="text" id="nama" name="nama" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <div>
                        <label for="nik" class="block text-gray-700 font-medium mb-2">NIK</label>
                        <input type="text" id="nik" name="nik" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="16 digit nomor NIK">
                    </div>

                    <div>
                        <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                        <input type="email" id="email" name="email"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <div>
                        <label for="telepon" class="block text-gray-700 font-medium mb-2">Nomor Telepon</label>
                        <input type="tel" id="telepon" name="telepon" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <div>
                        <label for="kategori" class="block text-gray-700 font-medium mb-2">Kategori Pengaduan</label>
                        <select id="kategori" name="kategori" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="">Pilih Kategori</option>
                            <option value="infrastruktur">Infrastruktur Desa</option>
                            <option value="pelayanan">Pelayanan Publik</option>
                            <option value="lingkungan">Lingkungan Hidup</option>
                            <option value="sosial">Masalah Sosial</option>
                            <option value="lainnya">Lainnya</option>
                        </select>
                    </div>

                    <div>
                        <label for="pengaduan" class="block text-gray-700 font-medium mb-2">Isi Pengaduan</label>
                        <textarea id="pengaduan" name="pengaduan" rows="5" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></textarea>
                    </div>

                    <div>
                        <label for="dokumen" class="block text-gray-700 font-medium mb-2">Lampiran Dokumen (Opsional)</label>
                        <input type="file" id="dokumen" name="dokumen"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <p class="text-sm text-gray-500 mt-1">Format: JPG, PNG, PDF (maks. 2MB)</p>
                    </div>

                    <div class="pt-2">
                        <button type="submit"
                            class="w-full bg-blue-900 text-white py-3 px-6 rounded-lg hover:bg-blue-800 transition font-semibold flex items-center justify-center">
                            <i data-feather="send" class="mr-2"></i> Kirim Pengaduan
                        </button>
                    </div>
                </form>
            </section>

            <!-- Info Pengaduan -->
            <section class="space-y-8 animate-fadeIn">
                <div class="bg-white rounded-xl shadow-lg p-8 border border-blue-100">
                    <h2 class="text-2xl font-bold text-blue-900 mb-4 flex items-center">
                        <i data-feather="info" class="mr-2"></i> Informasi Pengaduan
                    </h2>
                    <div class="space-y-4 text-gray-700">
                        <p>Layanan pengaduan ini merupakan sarana bagi masyarakat untuk menyampaikan keluhan, kritik, dan saran terkait penyelenggaraan pemerintahan dan pembangunan di Desa Air Senggeris</p>

                        <div class="bg-blue-50 p-4 rounded-lg">
                            <h3 class="font-semibold text-blue-900 mb-2">Proses Penanganan Pengaduan:</h3>
                            <ol class="list-decimal list-inside space-y-2">
                                <li>Pengaduan diterima oleh administrasi desa</li>
                                <li>Divalidasi dan diverifikasi oleh tim verifikasi</li>
                                <li>Diteruskan ke unit terkait untuk ditindaklanjuti</li>
                                <li>Proses penyelesaian dan monitoring</li>
                                <li>Feedback diberikan kepada pelapor</li>
                            </ol>
                        </div>

                        <div class="border-t border-gray-200 pt-4">
                            <h3 class="font-semibold text-blue-900 mb-2">Ketentuan:</h3>
                            <ul class="list-disc list-inside space-y-2">
                                <li>Pengaduan harus disampaikan dengan bahasa yang sopan dan jelas</li>
                                <li>Lampirkan bukti pendukung jika memungkinkan</li>
                                <li>Pengaduan anonim tidak akan diproses</li>
                                <li>Waktu respon maksimal 7 hari kerja</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Status Pengaduan -->
                <div class="bg-white rounded-xl shadow-lg p-8 border border-blue-100">
                    <h2 class="text-2xl font-bold text-blue-900 mb-6 flex items-center">
                        <i data-feather="check-circle" class="mr-2"></i> Cek Status Pengaduan
                    </h2>

                    <div class="space-y-4">
                        <div>
                            <label for="ticketNumber" class="block text-gray-700 font-medium mb-2">Nomor Tiket Pengaduan</label>
                            <div class="flex">
                                <input type="text" id="ticketNumber" name="ticketNumber"
                                    class="flex-grow px-4 py-2 border border-gray-300 rounded-l-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                    placeholder="Masukkan nomor tiket">
                                <button class="bg-blue-900 text-white px-6 py-2 rounded-r-lg hover:bg-blue-800 transition">
                                    Cek Status
                                </button>
                            </div>
                        </div>

                        <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <i data-feather="alert-triangle" class="h-5 w-5 text-yellow-400"></i>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-yellow-700">
                                        Nomor tiket pengaduan akan dikirimkan via email/SMS setelah pengaduan Anda terverifikasi.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
</section>


@endsection


<script>
    feather.replace();

    // Form submission handling
    document.getElementById('complaintForm').addEventListener('submit', function(e) {
        e.preventDefault();

        // Show success message (in a real app, this would be an AJAX call)
        alert('Terima kasih! Pengaduan Anda telah berhasil dikirim. Nomor tiket akan dikirimkan via email/SMS.');
        this.reset();
    });

    // Animation for sections
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
            section.classList.add('opacity-0');
            observer.observe(section);
        });
    });
</script>
</body>

</html>