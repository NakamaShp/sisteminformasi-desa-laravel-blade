<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Banner;

class NewsController extends Controller
{
    public function index()
    {

        $news = News::all();
        $banners = Banner::all();
        $featureds = News::where('is_featured', true)->get();
        return view('pages.news.berita', compact('news', 'banners', 'featureds'));
    }

    public function show($slug)
    {
        $news = News::where('slug', $slug)->first();
        $newests = News::orderby('created_at', 'desc')->get()->take(3);

        $categories = News::where('news_category_id', $news->news_category_id)
            ->where('id', '!=', $news->id)
            ->orderby('created_at', 'desc')
            ->get()
            ->take(4);

        return view('pages.news.detailnews', compact('news', 'newests', 'categories'));
    }

    public function view($slug)
    {
        $news = News::where('slug', $slug)->firstOrFail();

        // Tambah jumlah views setiap kali berita dibuka
        $news->increment('views');

        return view('news.show', compact('news'));

        if (!request()->hasCookie($cookieName)) {
            $news->increment('views');
            cookie()->queue(cookie($cookieName, true, 5)); // berlaku 5 menit
        }

        return view('news.show', compact('news'));
    }
}
