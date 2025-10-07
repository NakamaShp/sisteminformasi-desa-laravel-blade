<?php

use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.homepage');
});

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
    return view('pages.pengaduan');
});

Route::get('/berita', [NewsController::class, 'index'])->name('Berita');
Route::get('/berita/{slug}', [NewsController::class, 'show'])->name('news.show');
