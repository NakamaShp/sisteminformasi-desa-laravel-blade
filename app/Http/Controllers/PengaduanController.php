<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class PengaduanController extends Controller
{
    /**
     * Menampilkan form pengaduan
     */
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

    /**
     * Menyimpan pengaduan baru
     */
    public function store(Request $request)
    {
        // 1. VALIDASI INPUT
        $validatedData = $request->validate([
            'nama_lengkap'  => 'required|string|max:255',
            'nik'           => 'required|digits:16',
            'email'         => 'nullable|email|max:255',
            'telepon'       => 'required|string|max:20',
            'kategori'      => 'required|string|max:255',
            'isi_pengaduan' => 'required|string',
            'lampiran'      => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ], [
            // Custom error messages
            'nama_lengkap.required' => 'Nama lengkap harus diisi',
            'nik.required' => 'NIK harus diisi',
            'nik.digits' => 'NIK harus 16 digit',
            'email.email' => 'Format email tidak valid',
            'telepon.required' => 'Nomor telepon harus diisi',
            'kategori.required' => 'Kategori harus dipilih',
            'isi_pengaduan.required' => 'Isi pengaduan harus diisi',
            'lampiran.mimes' => 'Lampiran harus berformat jpg, jpeg, png, atau pdf',
            'lampiran.max' => 'Ukuran lampiran maksimal 2MB',
        ]);

        // Gunakan database transaction untuk memastikan data konsisten
        DB::beginTransaction();

        try {
            // 2. GENERATE NOMOR TIKET UNIK
            do {
                $nomorTiket = 'TKT-' . strtoupper(Str::random(8));
            } while (Pengaduan::where('nomor_tiket', $nomorTiket)->exists());

            // 3. HANDLE UPLOAD FILE
            $path = null;
            if ($request->hasFile('lampiran')) {
                $file = $request->file('lampiran');
                
                // Validasi file ada dan valid
                if ($file->isValid()) {
                    $fileName = $nomorTiket . '_' . time() . '.' . $file->getClientOriginalExtension();
                    $path = $file->storeAs('lampiran_pengaduan', $fileName, 'public');
                    
                    // Log upload berhasil
                    Log::info('File uploaded successfully: ' . $path);
                }
            }

            // 4. SIMPAN KE DATABASE
            $pengaduan = Pengaduan::create([
                'nama_lengkap'  => $validatedData['nama_lengkap'],
                'nik'           => $validatedData['nik'],
                'email'         => $validatedData['email'] ?? null,
                'telepon'       => $validatedData['telepon'],
                'kategori'      => $validatedData['kategori'],
                'isi_pengaduan' => $validatedData['isi_pengaduan'],
                'lampiran'      => $path,
                'nomor_tiket'   => $nomorTiket,
                'status'        => 'Pending',
            ]);

            // Commit transaction jika semua berhasil
            DB::commit();

            // Log success
            Log::info('Pengaduan berhasil dibuat', [
                'id' => $pengaduan->id,
                'nomor_tiket' => $nomorTiket,
                'nama' => $validatedData['nama_lengkap']
            ]);

            // 5. RETURN JSON RESPONSE untuk JavaScript
            return response()->json([
                'success' => true,
                'message' => 'Pengaduan berhasil dikirim!',
                'ticket_number' => $nomorTiket,
                'data' => [
                    'id' => $pengaduan->id,
                    'nama' => $pengaduan->nama_lengkap,
                    'kategori' => $pengaduan->kategori,
                    'created_at' => $pengaduan->created_at->format('d/m/Y H:i')
                ]
            ], 201);

        } catch (\Illuminate\Validation\ValidationException $e) {
            // Rollback jika validasi gagal
            DB::rollBack();
            
            return response()->json([
                'success' => false,
                'message' => 'Validasi gagal',
                'errors' => $e->errors()
            ], 422);

        } catch (\Exception $e) {
            // Rollback jika ada error
            DB::rollBack();
            
            // Log error detail
            Log::error('Gagal menyimpan pengaduan: ' . $e->getMessage(), [
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'trace' => $e->getTraceAsString()
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan pada server. Silakan coba beberapa saat lagi.',
                'error' => config('app.debug') ? $e->getMessage() : null
            ], 500);
        }
    }

    /**
     * Menampilkan daftar pengaduan (untuk admin)
     */
    public function index()
    {
        $pengaduans = Pengaduan::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.pengaduan.index', compact('pengaduans'));
    }

    /**
     * Menampilkan detail pengaduan
     */
    public function show($id)
    {
        $pengaduan = Pengaduan::findOrFail($id);
        return view('admin.pengaduan.show', compact('pengaduan'));
    }

    /**
     * Update status pengaduan
     */
    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:Pending,Diproses,Selesai'
        ]);

        $pengaduan = Pengaduan::findOrFail($id);
        $pengaduan->status = $request->status;
        $pengaduan->save();

        return response()->json([
            'success' => true,
            'message' => 'Status berhasil diupdate',
            'status' => $pengaduan->status
        ]);
    }
}