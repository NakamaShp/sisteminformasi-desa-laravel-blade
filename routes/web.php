<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\ProfileController;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



// menu nav
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/pengajuan_surat/layanan', function () {
    return view('pengajuan_surat.layanan');
});

// halaman form domisili
Route::get('/pengajuan_surat/form_domisili', function () {
    return view('pengajuan_surat.form_domisili');
});

Route::get('/pengajuan_surat/detail_pengajuan', function () {
    return view('pengajuan_surat.detail_pengajuan');
});

// 
Route::get('/pengajuan_surat/cekstatus', function () {
    return view('pengajuan_surat.cekstatus');
});

Route::get('/pengajuan_surat/demo', function () {
    return view('pengajuan_surat.demo');
});

// Route::get('/', function () {
//     return view('pages.homepage');
// });
Route::get('/profildesa', function () {
    return view('pages.profildesa');
});
Route::get('/berita', function () {
    return view('pages.news.berita');
});
Route::get('/kontak', function () {
    return view('pages.kontak');
});
Route::get('/pengaduan', function () {
    return view('pages.pengaduan.pengaduan');
});


// berita
Route::get('/berita', [NewsController::class, 'index'])->name('Berita');
Route::get('/berita/{slug}', [NewsController::class, 'show'])->name('news.show');

// pengaduan
Route::post('/pengaduan', [PengaduanController::class, 'store'])->name('pengaduan.store');
Route::get('/pengaduan', [PengaduanController::class, 'create'])->name('pengaduan.create');
