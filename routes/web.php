<?php

use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/profildesa', function () {
    return view('profildesa');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/pengaduan', function () {
    return view('pengaduan');
});

Route::get('/berita', [NewsController::class, 'index'])->name('Berita');
