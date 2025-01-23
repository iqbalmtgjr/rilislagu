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

    public function about()
    {
        return view('landing2.about');
    }

    public function contact()
    {
        return view('landing2.contact');
    }

    public function contactstrore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required|max:255',
            'isi' => 'required',
            'gambar' => 'mimes:jpeg,jpg,png',
        ]);

        if ($validator->fails()) {
            toastr()->error('Ada kesalahan inputan', 'Gagal');
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
    }
}
