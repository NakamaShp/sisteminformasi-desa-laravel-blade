<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PengaduanController extends Controller
{
    // ... method create() Anda ...
    public function create()
    {
        $categories = [
            'Infrastruktur Desa',
            'Lingkungan Hidup',
            'Masalah Sosial',
            'Pendidikan Masyarakat',
            'Keamanan Masyarakat',
            'Lainnya',
        ];
        return view('pages.pengaduan.pengaduan', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap'  => 'required|string|max:255',
            'nik'           => 'required|digits:16|unique:pengaduans,nik',
            'email'         => 'nullable|email',
            'telepon'       => 'required|string|max:20',
            'kategori'      => 'required|string',
            'isi_pengaduan' => 'required|string',
            'lampiran'      => 'nullable|file|mimes:jpg,png,pdf|max:2048',
        ]);


        $nomorTiket = 'TKT-' . strtoupper(Str::random(8));

        $path = null;
        if ($request->hasFile('lampiran')) {
            $path = $request->file('lampiran')->store('lampiran_pengaduan', 'public');
        }

        Pengaduan::create([
            'nama_lengkap'  => $request->nama_lengkap,
            'nik'           => $request->nik,
            'email'         => $request->email,
            'telepon'       => $request->telepon,
            'kategori'      => $request->kategori,
            'isi_pengaduan' => $request->isi_pengaduan,
            'lampiran'      => $path,
            'nomor_tiket'   => $nomorTiket,
        ]);

        // ===============================================
        // === BAGIAN YANG DIUBAH: DARI JSON KE REDIRECT ===
        // ===============================================
        return redirect()->route('pengaduan.create')
            ->with('success', 'Pengaduan berhasil dikirim!')
            ->with('ticket_number', $nomorTiket);
    }
}
