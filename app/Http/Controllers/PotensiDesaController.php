<?php

namespace App\Http\Controllers;

use App\Models\PotensiDesa;
use Illuminate\Http\Request;

class PotensiDesaController extends Controller
{
    public function index()
    {

        $potensiDesa = PotensiDesa::all();

        return view('pages.profildesa', compact('potensiDesa'));
    }
}
