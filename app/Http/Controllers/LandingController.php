<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $berita = Berita::where('is_published', 1)->orderByDesc('created_at')->limit(3)->get();
        return view('landing.index', compact('berita'));
    }

    public function index2()
    {
        $berita = Berita::where('is_published', 1)->orderByDesc('created_at')->limit(3)->get();
        return view('landing2.index', compact('berita'));
    }

    public function rilisTerbaru()
    {
        return view('landing2.rilis-terbaru');
    }

    public function layananKami()
    {
        return view('landing2.layanan-kami');
    }

    public function paketHarga()
    {
        return view('landing2.paket-harga');
    }
}
