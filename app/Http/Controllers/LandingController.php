<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\News;

class LandingController extends Controller
{
    public function index()
    {

        $news = News::all();
        $banners = Banner::all();
        

        return view('pages.landing', compact('banners', "news"));
    }
}
