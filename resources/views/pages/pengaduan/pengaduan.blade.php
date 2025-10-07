@extends('layouts.app')

@section('title', 'Layanan Pengaduan Masyarakat')

@push('styles')
    {{-- CSS untuk animasi getar --}}
    <style>
        @keyframes shake {

            0%,
            100% {
                transform: translateX(0);
            }

            10%,
            30%,
            50%,
            70%,
            90% {
                transform: translateX(-8px);
            }

            20%,
            40%,
            60%,
            80% {
                transform: translateX(8px);
            }
        }

        .shake-animation {
            animation: shake 0.5s ease-in-out;
        }
    </style>
@endpush

@section('content')
    <section class="mt-1">
        {{-- Hero Section --}}
        <div class="bg-blue-900 text-white py-10 hero-section h-64 md:h-37 flex items-center justify-center">
            <div class=" p-20 container mx-auto px-4 text-center">
                <h1 class="text-xl md:text-4xl font-bold mb-4">Layanan Pengaduan Masyarakat</h1>
                <p class="text-1xl text-blue-100 max-w-2xl mx-auto">Sampaikan keluhan, kritik, dan saran Anda untuk kemajuan
                    desa kita bersama</p>
            </div>
        </div>

        {{-- Main Content --}}
        <main class="container mx-auto px-4 py-12">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

                {{-- Kolom Kiri: Form Pengaduan --}}
                <section class="bg-white rounded-xl shadow-lg p-8 border border-blue-100 animate-fadeIn">
                    <h2 class="text-2xl font-bold text-blue-900 mb-6 flex items-center">
                        <i data-feather="edit-3" class="mr-2"></i> Form Pengaduan
                    </h2>

                    <form id="complaintForm" action="{{ route('pengaduan.store') }}" method="POST"
                        enctype="multipart/form-data" class="space-y-6">
                        @csrf

                        {{-- Semua input field dengan div error-nya --}}
                        <div>
                            <label for="nama_lengkap" class="block text-gray-700 font-medium mb-2">Nama Lengkap</label>
                            <input type="text" id="nama_lengkap" name="nama_lengkap" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <div id="nama_lengkap-error" class="text-red-600 text-sm mt-1"></div>
                        </div>
                        <div>
                            <label for="nik" class="block text-gray-700 font-medium mb-2">NIK</label>
                            <input type="text" id="nik" name="nik" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="16 digit nomor NIK">
                            <div id="nik-error" class="text-red-600 text-sm mt-1"></div>
                        </div>
                        <div>
                            <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                            <input type="email" id="email" name="email"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <div id="email-error" class="text-red-600 text-sm mt-1"></div>
                        </div>
                        <div>
                            <label for="telepon" class="block text-gray-700 font-medium mb-2">Nomor Telepon</label>
                            <input type="tel" id="telepon" name="telepon" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <div id="telepon-error" class="text-red-600 text-sm mt-1"></div>
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
                            <div id="kategori-error" class="text-red-600 text-sm mt-1"></div>
                        </div>
                        <div>
                            <label for="isi_pengaduan" class="block text-gray-700 font-medium mb-2">Isi Pengaduan</label>
                            <textarea id="isi_pengaduan" name="isi_pengaduan" rows="5" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></textarea>
                            <div id="isi_pengaduan-error" class="text-red-600 text-sm mt-1"></div>
                        </div>
                        <div>
                            <label for="lampiran" class="block text-gray-700 font-medium mb-2">Lampiran Dokumen
                                (Opsional)</label>
                            <input type="file" id="lampiran" name="lampiran"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                            <div id="lampiran-error" class="text-red-600 text-sm mt-1"></div>
                        </div>

                        <div class="pt-2">
                            <button type="submit"
                                class="w-full bg-blue-900 text-white py-3 px-6 rounded-lg hover:bg-blue-800 transition font-semibold flex items-center justify-center">
                                <i data-feather="send" class="mr-2"></i> Kirim Pengaduan
                            </button>
                        </div>
                    </form>
                </section>

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
                            <div>
                                <label for="ticketNumber" class="block text-gray-700 font-medium mb-2">Nomor Tiket
                                    Pengaduan</label>
                                <div class="flex">
                                    <input type="text" id="ticketNumber" name="ticketNumber"
                                        class="flex-grow px-4 py-2 border border-gray-300 rounded-l-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                        placeholder="Masukkan nomor tiket">
                                    <button
                                        class="bg-blue-900 text-white px-6 py-2 rounded-r-lg hover:bg-blue-800 transition">
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
                                            Nomor tiket pengaduan akan dikirimkan via email/SMS setelah pengaduan Anda
                                            terverifikasi.
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

@push('scripts')
    <script>
        // Menunggu sampai seluruh halaman HTML dimuat sebelum menjalankan skrip
        document.addEventListener('DOMContentLoaded', function() {
            const complaintForm = document.getElementById('complaintForm');

            // Pastikan elemen form ada di halaman ini sebelum menambahkan event listener
            if (complaintForm) {
                complaintForm.addEventListener('submit', async function(e) {
                    e.preventDefault(); // Mencegah form submit cara biasa

                    const form = e.target;
                    const formData = new FormData(form);
                    const submitButton = form.querySelector('button[type="submit"]');

                    // Reset UI sebelum submit
                    submitButton.disabled = true;
                    submitButton.innerHTML = 'Mengirim...';
                    document.querySelectorAll('[id$="-error"]').forEach(el => el.textContent = '');
                    form.querySelectorAll('input, textarea, select').forEach(el => el.classList.remove(
                        'border-red-600', 'shake-animation'));

                    try {
                        const response = await fetch(form.action, {
                            method: 'POST',
                            body: formData,
                            headers: {
                                'Accept': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector(
                                    'meta[name="csrf-token"]').getAttribute('content')
                            }
                        });

                        const result = await response.json();

                        if (response.ok) {
                            // Blok Notifikasi Sukses
                            Swal.fire({
                                html: `
                            <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_lk80fpsm.json" background="transparent" speed="1" style="width: 150px; height: 150px; margin: 0 auto;" loop autoplay></lottie-player>
                            <h2 class="text-2xl font-bold text-gray-800 mt-4">Pengaduan Terkirim!</h2>
                            <p class="text-gray-600 mt-2">Terima kasih, pengaduan Anda telah kami terima. Silakan simpan nomor tiket berikut untuk melacak status pengaduan Anda:</p>
                            <div class="mt-4 bg-blue-50 border border-blue-200 text-blue-800 font-mono text-lg p-3 rounded-lg inline-block">
                                <strong id="ticket-number">${result.ticket_number}</strong>
                            </div>
                        `,
                                showConfirmButton: false,
                                showCloseButton: true,
                                footer: `<button id="copy-ticket" class="bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-700 transition">Salin Nomor Tiket</button>`,
                                didOpen: () => {
                                    document.getElementById('copy-ticket').addEventListener(
                                        'click', () => {
                                            const ticketNumber = document
                                                .getElementById('ticket-number')
                                                .innerText;
                                            navigator.clipboard.writeText(ticketNumber)
                                                .then(() => {
                                                    const copyButton = document
                                                        .getElementById(
                                                            'copy-ticket');
                                                    copyButton.innerText =
                                                        'Berhasil Disalin!';
                                                    copyButton.classList.replace(
                                                        'bg-blue-600',
                                                        'bg-green-500');
                                                    setTimeout(() => {
                                                        copyButton
                                                            .innerText =
                                                            'Salin Nomor Tiket';
                                                        copyButton.classList
                                                            .replace(
                                                                'bg-green-500',
                                                                'bg-blue-600'
                                                                );
                                                    }, 2000);
                                                });
                                        });
                                }
                            });
                            form.reset();
                        } else {
                            // Blok Penanganan Error
                            if (response.status === 422 && result.errors) {
                                let firstErrorField = null;
                                for (const field in result.errors) {
                                    if (!firstErrorField) firstErrorField = field;

                                    const errorElement = document.getElementById(`${field}-error`);
                                    const inputElement = document.getElementById(field);

                                    if (errorElement && inputElement) {
                                        inputElement.classList.add('border-red-600');
                                        errorElement.textContent = result.errors[field][0];
                                    }
                                }

                                const firstInputElement = document.getElementById(firstErrorField);
                                if (firstInputElement) {
                                    firstInputElement.classList.add('shake-animation');
                                    firstInputElement.addEventListener('animationend', () => {
                                        firstInputElement.classList.remove('shake-animation');
                                    }, {
                                        once: true
                                    });
                                    firstInputElement.focus(); // Fokuskan ke input pertama yang error
                                }
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Terjadi Kesalahan',
                                    text: result.message || 'Gagal mengirim pengaduan.'
                                });
                            }
                        }
                    } catch (error) {
                        console.error('Error:', error);
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal Terhubung',
                            text: 'Periksa koneksi internet Anda.'
                        });
                    } finally {
                        submitButton.disabled = false;
                        submitButton.innerHTML =
                            '<i data-feather="send" class="mr-2"></i> Kirim Pengaduan';
                        if (typeof feather !== 'undefined') {
                            feather.replace();
                        }
                    }
                });
            }
        });
    </script>
@endpush
