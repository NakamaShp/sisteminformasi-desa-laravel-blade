<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// menu nav

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/layanan', function () {
    return view('pages.layanan.layanan');
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

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
