<?php

namespace App\Http\Controllers;

use App\Models\DokumenDesa;
use Illuminate\Http\Request;

class DokumenDesaController extends Controller
{
    public function index()
    {
        $dokumen = DokumenDesa::all();

        return view('pages.layanan.layanan', compact('dokumen'));
    }
}
