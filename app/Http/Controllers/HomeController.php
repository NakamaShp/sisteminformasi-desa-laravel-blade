<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeBanner;

class HomeController extends Controller
{
    public function index()
    {
        // 1. Ambil data banner
        // Hanya ambil banner yang aktif dan urutkan
        $banners = HomeBanner::where('is_active', true)
                            ->orderBy('order', 'asc') 
                            ->get();

        // 2. Kirim data ke view
        // Pastikan nama view ('pages.homepage') sesuai dengan path file Blade Anda
        return view('pages.homepage', [
            'banners' => $banners, // Variabel $banners dikirim ke view
        ]);
    }
}
