@extends('layouts.app')

@section('title', 'Layanan Pengaduan Masyarakat')

@section('content')
{{-- Hero & Form Content sama seperti sebelumnya --}}
<section class="mt-1">
    {{-- Hero Section --}}
    <div class="bg-blue-900 text-white py-10 hero-section h-64 md:h-30 flex items-center justify-center">
        <div class="p-20 container mx-auto px-4 text-center">
            <h1 class="text-xl md:text-3xl font-bold mb-2">Layanan Pengaduan Masyarakat</h1>
            <p class="text-1xl text-blue-100 max-w-xl mx-auto">Sampaikan keluhan, kritik, dan saran Anda untuk kemajuan
                desa kita bersama</p>
        </div>
    </div>

    {{-- Main Content --}}
    <main class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            {{-- Form Section --}}
            <section class="bg-white rounded-xl shadow-lg p-8 border border-blue-100">
                <h2 class="text-2xl font-bold text-blue-900 mb-6 flex items-center">
                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                        </path>
                    </svg>
                    Form Pengaduan
                </h2>

                <form id="complaintForm" action="{{ route('pengaduan.store') }}" method="POST"
                    enctype="multipart/form-data" class="space-y-6">
                    @csrf

                    {{-- Nama Lengkap --}}
                    <div>
                        <label for="nama_lengkap" class="block text-gray-700 font-medium mb-2 ">Nama Lengkap <span
                                class="text-red-500">*</span></label>
                        <input type="text" id="nama_lengkap" name="nama_lengkap" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Masukkan nama anda">
                        <div id="error-nama_lengkap" class="text-red-600 text-sm mt-1"></div>
                    </div>

                    {{-- NIK --}}
                    <div>
                        <label for="nik" class="block text-gray-700 font-medium mb-2">NIK <span
                                class="text-red-500">*</span></label>
                        <input
                            type="text"
                            id="nik"
                            minlength="16"
                            maxlength="16"
                            inputmode="numeric"
                            pattern="\d{16}"
                            name="nik"
                            required maxlength="16"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="16 digit nomor NIK">
                        <div id="error-nik" class="text-red-600 text-sm mt-1"></div>
                    </div>

                    {{-- Email --}}
                    <div>
                        <label for="email" class="block text-gray-700 font-medium mb-2">Email (Opsional)</label>
                        <input type="email" id="email" name="email"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Masukkan email anda">
                        <div id="error-email" class="text-red-600 text-sm mt-1"></div>
                    </div>

                    {{-- Telepon --}}
                    <div>
                        <label for="telepon" class="block text-gray-700 font-medium mb-2">Nomor Telepon <span
                                class="text-red-500">*</span></label>
                        <input type="tel" id="telepon" name="telepon" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Masukkan nomor telepon">
                        <div id="error-telepon" class="text-red-600 text-sm mt-1"></div>
                    </div>

                    {{-- Kategori --}}
                    <div>
                        <label for="kategori" class="block text-gray-700 font-medium mb-2">Kategori Pengaduan <span
                                class="text-red-500">*</span></label>
                        <select id="kategori" name="kategori" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="">Pilih Kategori</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category }}">{{ $category }}</option>
                            @endforeach
                        </select>
                        <div id="error-kategori" class="text-red-600 text-sm mt-1"></div>
                    </div>

                    {{-- Isi Pengaduan --}}
                    <div>
                        <label for="isi_pengaduan" class="block text-gray-700 font-medium mb-2">Isi Pengaduan <span
                                class="text-red-500">*</span></label>
                        <textarea id="isi_pengaduan" name="isi_pengaduan" rows="5" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></textarea>
                        <div id="error-isi_pengaduan" class="text-red-600 text-sm mt-1"></div>
                    </div>

                    {{-- Lampiran --}}
                    <div>
                        <label for="lampiran" class="block text-gray-700 font-medium mb-2">Lampiran Dokumen
                            (Opsional)</label>

                        <input type="file" id="lampiran" name="lampiran" accept=".jpg,.jpeg,.png,.pdf"
                            class="
                                    w-full 
                                    text-sm text-gray-900 
                                    border border-gray-300 
                                    rounded
                                    cursor-pointer 
                                    bg-gray-50 
                                    p-2.5 
                                    file:mr-4 file:py-2 file:px-4 
                                    file:rounded file:border-0
                                    file:text-sm file:font-semibold
                                    file:bg-gray-600 file:text-white
                                    hover:file:bg-gray-700">
                        <p class="text-xs text-gray-600 mt-1">Format: JPG, PNG, PDF. Ukuran Maksimum: 2MB.</p>
                        <div id="error-lampiran" class="text-red-600 text-sm mt-1"></div>
                    </div>

                    {{-- Submit Button --}}
                    <div class="pt-2">
                        <button type="submit" id="submitBtn"
                            class="w-full bg-blue-900 text-white py-3 px-6 rounded-lg hover:bg-blue-800 transition font-semibold">
                            Kirim Pengaduan
                        </button>
                    </div>
                </form>
            </section>

            {{-- Info Section (sama seperti sebelumnya) --}}
            {{-- Kolom Kanan: Info & Status Pengaduan --}}
            <section class="space-y-8 animate-fadeIn">
                <div class="bg-white rounded-xl shadow-lg p-8 border border-blue-100">
                    <h2 class="text-2xl font-bold text-blue-900 mb-4 flex items-center">
                        <i data-feather="info" class="mr-2"></i> Informasi Pengaduan
                    </h2>
                    <div class="space-y-4 text-gray-700">
                        <p>Layanan pengaduan ini merupakan sarana bagi masyarakat untuk menyampaikan keluhan, kritik,
                            dan saran terkait penyelenggaraan pemerintahan dan pembangunan di Desa Air Senggeris</p>
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

                <div class="bg-white rounded-xl shadow-lg p-8 border border-blue-100">
                    <h2 class="text-2xl font-bold text-blue-900 mb-6 flex items-center">
                        <i data-feather="check-circle" class="mr-2"></i> Cek Status Pengaduan
                    </h2>
                    <div class="space-y-4">
                        <button class="bg-blue-900 text-white px-6 py-2 rounded hover:bg-blue-800 transition">
                            Cek Status
                        </button>
                    </div>
                </div>
            </section>
        </div>
    </main>
</section>

{{-- LOAD LIBRARY DI SINI (SEBELUM SCRIPT) --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

{{-- SCRIPT LANGSUNG INLINE --}}
<script type="text/javascript">
    console.log('=== SCRIPT LOADED ===');
    console.log('Swal:', typeof Swal);
    console.log('Form:', document.getElementById('complaintForm'));

    // Tunggu DOM ready
    document.addEventListener('DOMContentLoaded', function() {
        console.log('DOM Ready!');

        const form = document.getElementById('complaintForm');
        const btn = document.getElementById('submitBtn');

        if (!form) {
            console.error('Form tidak ditemukan!');
            return;
        }

        console.log('Form found, adding event listener...');

        form.addEventListener('submit', function(e) {
            e.preventDefault();
            console.log('FORM SUBMITTED VIA AJAX!');

            // Disable button
            btn.disabled = true;
            btn.textContent = 'Mengirim...';

            // Clear errors
            document.querySelectorAll('[id^="error-"]').forEach(el => el.textContent = '');

            // Prepare data
            const formData = new FormData(form);

            // Send AJAX request
            fetch('{{ route("pengaduan.store") }}' , {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json'
                        },
                    })
                .then(response => response.json())
                .then(data => {
                    console.log('Response:', data);

                    if (data.success) {
                        // SUCCESS - Show SweetAlert
                        Swal.fire({
                            icon: 'success',
                            title: 'Pengaduan Terkirim!',
                            html: `
                                <p class="mb-4">Terima kasih, pengaduan Anda telah kami terima.</p>
                                <div class="bg-blue-50 border-2 border-blue-200 p-4 rounded-lg">
                                    <p class="text-sm text-gray-600 mb-2">Nomor Tiket Anda:</p>
                                    <p class="text-2xl font-bold text-blue-900">${data.ticket_number}</p>
                                </div>
                            `,
                            confirmButtonColor: '#1e3a8a',
                            confirmButtonText: 'OK'
                        });

                        // Reset form
                        form.reset();
                    } else {
                        // Validation errors
                        if (data.errors) {
                            for (let field in data.errors) {
                                const errorDiv = document.getElementById('error-' + field);
                                if (errorDiv) {
                                    errorDiv.textContent = data.errors[field][0];
                                }
                            }
                        }
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Terjadi Kesalahan',
                        text: 'Gagal mengirim pengaduan. Silakan coba lagi.'
                    });
                })
                .finally(() => {
                    // Re-enable button
                    btn.disabled = false;
                    btn.textContent = 'Kirim Pengaduan';
                });
        });
    });
</script>
@endsection