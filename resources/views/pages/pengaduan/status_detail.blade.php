{{-- resources/views/pengaduan/status_detail.blade.php --}}

@extends('layouts.app')

@section('title', 'Status Pengaduan: ' . $pengaduan->nomor_tiket)

@section('content')
    <section class="mt-1">
        <div class="bg-blue-900 text-white py-10 h-36 md:h-30 flex items-center justify-center">
            <div class="p-20 container mx-auto px-4 text-center">
                <h1 class="text-xl md:text-3xl font-bold mb-2">Detail Status Pengaduan</h1>
                <p class="text-l text-blue-100 max-w-xl mx-auto">Informasi terkini mengenai keluhan Anda.</p>
            </div>
        </div>

        <main class="container mx-auto px-4 py-12">
            @include('partials.flash-message') {{-- Pastikan Anda memiliki partial untuk menampilkan session message (jika ada) --}}

            <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-lg p-8 border border-blue-100">
                <h2 class="text-3xl font-bold text-blue-900 mb-6">
                    Kode Pengaduan: <span class="text-green-600">{{ $pengaduan->nomor_tiket }}</span>
                </h2>

                {{-- Display Status --}}
                <div
                    class="mb-8 p-4 rounded-lg
                @if ($pengaduan->status == 'Selesai') bg-green-100 border-l-4 border-green-500
                @elseif ($pengaduan->status == 'Diproses') bg-yellow-100 border-l-4 border-yellow-500
                @else bg-gray-100 border-l-4 border-gray-500 @endif
            ">
                    <h3 class="text-xl font-semibold mb-1">Status Saat Ini:</h3>
                    <p
                        class="text-2xl font-bold
                    @if ($pengaduan->status == 'Selesai') text-green-700
                    @elseif ($pengaduan->status == 'Diproses') text-yellow-700
                    @else text-gray-700 @endif
                ">
                        {{ $pengaduan->status }}
                    </p>
                    <p class="text-sm mt-2 text-gray-600">Terakhir diperbarui:
                        {{ $pengaduan->updated_at->format('d M Y H:i') }}</p>
                </div>

                {{-- Detail Pengaduan --}}
                <div class="space-y-4 text-gray-700">
                    <div class="border-b pb-3">
                        <p class="font-medium text-blue-900">Nama Pelapor:</p>
                        <p class="ml-4">{{ $pengaduan->nama_lengkap }} (NIK: {{ $pengaduan->nik }})</p>
                    </div>
                    <div class="border-b pb-3">
                        <p class="font-medium text-blue-900">Kategori:</p>
                        <p class="ml-4">{{ $pengaduan->kategori }}</p>
                    </div>
                    <div class="border-b pb-3">
                        <p class="font-medium text-blue-900">Isi Pengaduan:</p>
                        <p class="ml-4 whitespace-pre-wrap">{{ $pengaduan->isi_pengaduan }}</p>
                    </div>
                    @if ($pengaduan->lampiran)
                        <div class="border-b pb-3">
                            <p class="font-medium text-blue-900">Lampiran:</p>
                            <a href="{{ asset('storage/' . $pengaduan->lampiran) }}" target="_blank"
                                class="ml-4 text-blue-600 hover:underline">Lihat Dokumen/Foto</a>
                        </div>
                    @endif

                    {{-- Kolom Tindak Lanjut/Respon Admin --}}
                    @if ($pengaduan->respon)
                        <div class="pt-6 border-t border-gray-300">
                            <h3 class="text-xl font-bold text-green-700 mb-2 flex items-center">
                                <i data-feather="message-circle" class="mr-2 w-5 h-5"></i> Respon & Tindak Lanjut
                            </h3>
                            <div class="bg-gray-50 p-4 rounded-lg border border-gray-200">
                                <p class="whitespace-pre-wrap">{{ $pengaduan->respon }}</p>
                            </div>
                        </div>
                    @endif
                </div>

                <div class="mt-8 text-center">
                    <a href="{{ url('/pengaduan') }}"
                        class="inline-flex items-center bg-blue-900 text-white px-6 py-2 rounded-lg font-semibold hover:bg-blue-800 transition duration-150">
                        &larr; Kembali ke Halaman Utama Pengaduan
                    </a>
                </div>
            </div>
        </main>
    </section>

    <script>
        // Inisialisasi Feather Icons jika digunakan di status_detail view
        document.addEventListener('DOMContentLoaded', function() {
            feather.replace();
        });
    </script>
@endsection
