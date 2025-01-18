<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\Submitlagu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubmitlaguController extends Controller
{
    public function indexAdmin()
    {
        $data = Submitlagu::latest()->get();
        $paket = Paket::all();
        return view('admin.rilis-lagu.index', compact('data', 'paket'));
    }
    public function index()
    {
        $data = Submitlagu::where('user_id', auth()->user()->id)->latest()->get();
        $paket = Paket::all();
        return view('admin.submitlagu.index', compact('data', 'paket'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            // 'email' => 'required|email|max:50',
            'judul_rilisan' => 'required|max:100',
            'tipe_rilisan' => 'required|max:50',
            'jenis_karya' => 'required|max:50',
            'nama_artis_utama' => 'required|max:50',
            'url_spotify_utama' => 'nullable|max:255',
            'url_apple_music_artis_utama' => 'nullable|max:255',
            'artis_featuring' => 'nullable|max:50',
            'url_spotify_artis_featuring' => 'nullable|max:255',
            'url_apple_music_artis_featuring' => 'nullable|max:255',
            'artwork' => 'required|mimes:jpg,jpeg,png',
            'tanggal_rilis' => 'date',
            'genre_musik' => 'required|max:50',
            'sub_genre' => 'required|max:50',
            'lagu_tanpa_vocal' => 'required|boolean',
            'bahasa_judul' => 'required|max:50',
            'bahasa_lirik' => 'required|max:50',
            'nama_label' => 'required|max:50',
            'file_lagu' => 'required|mimes:wav',
            'nama_pencipta' => 'required|max:50',
            'nama_produser' => 'required|max:50',
            'nama_komposer' => 'required|max:50',
            'nama_pemegang_hak_cipta' => 'required|max:50',
            'upc' => 'nullable|max:50',
            'additional_credits' => 'nullable',
            'konten_dewasa' => 'required|boolean',
            'tambahan_lirik_file' => 'nullable|mimes:jpg,jpeg,png',
            'detik_mulai' => 'required',
            'saya_adalah' => 'required|max:50',
            'url_sosial_media_artis' => 'required|max:255',
            'url_web_artis' => 'required|max:255',
            'kota_asal' => 'required|max:50',
            'no_hp' => 'required|max:50',
            'jenis_layanan' => 'required|max:50',
            'upload_ktp' => 'required|mimes:jpg,jpeg,png',
            // 'jasa_tambahan' => 'required|max:50',
        ]);

        if ($validator->fails()) {
            toastr()->error('Ada Kesalahan Saat Penginputan!, lebih teliti lagi', 'Gagal');
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        if ($request->hasFile('upload_ktp')) {
            $ktp = $request->file('upload_ktp');
            $nama_ktp = $ktp->getClientOriginalName();
            $ktp->move(public_path('files/ktp'), $nama_ktp);
        } else {
            $nama_ktp = null;
        }

        if ($request->hasFile('artwork')) {
            $artwork = $request->file('artwork');
            $nama_artwork = $artwork->getClientOriginalName();
            $artwork->move('files/artwork', $nama_artwork);
        } else {
            $nama_artwork = null;
        }

        if ($request->hasFile('tambahan_lirik_file')) {
            $tambahan_lirik_file = $request->file('tambahan_lirik_file');
            $nama_tambahan_lirik = $tambahan_lirik_file->getClientOriginalName();
            $tambahan_lirik_file->move('files/lirik', $nama_tambahan_lirik);
        } else {
            $nama_tambahan_lirik = null;
        }

        if ($request->hasFile('file_lagu')) {
            $lagu = $request->file('file_lagu');
            $nama_lagu = $lagu->getClientOriginalName();
            $lagu->move('files/lagu', $nama_lagu);
        } else {
            $nama_lagu = null;
        }


        Submitlagu::create([
            'user_id' => auth()->user()->id,
            'email' => auth()->user()->email,
            'judul_rilisan' => $request->judul_rilisan,
            'tipe_rilisan' => $request->tipe_rilisan,
            'jenis_karya' => $request->jenis_karya,
            'nama_artis_utama' => $request->nama_artis_utama,
            'url_spotify_utama' => $request->url_spotify_utama,
            'url_apple_music_artis_utama' => $request->url_apple_music_artis_utama,
            'artis_featuring' => $request->artis_featuring,
            'url_spotify_artis_featuring' => $request->url_spotify_artis_featuring,
            'url_apple_music_artis_featuring' => $request->url_apple_music_artis_featuring,
            'url_youtube' => $request->url_youtube,
            'url_sosial_media' => $request->url_sosial_media,
            'artwork' => $nama_artwork,
            'tanggal_rilis' => $request->tanggal_rilis,
            'genre_musik' => $request->genre_musik,
            'sub_genre' => $request->sub_genre,
            'lagu_tanpa_vocal' => $request->lagu_tanpa_vocal,
            'bahasa_judul' => $request->bahasa_judul,
            'bahasa_lirik' => $request->bahasa_lirik,
            'nama_label' => $request->nama_label,
            'file_lagu' => $nama_lagu,
            'nama_pencipta' => $request->nama_pencipta,
            'nama_produser' => $request->nama_produser,
            'nama_komposer' => $request->nama_komposer,
            'nama_pemegang_hak_cipta' => $request->nama_pemegang_hak_cipta,
            'upc' => $request->upc,
            'additional_credits' => $request->additional_credits,
            'konten_dewasa' => $request->konten_dewasa,
            'tambahan_lirik_file' => $nama_tambahan_lirik,
            'detik_mulai' => $request->detik_mulai,
            'saya_adalah' => $request->saya_adalah,
            'url_sosial_media_artis' => $request->url_sosial_media_artis,
            'url_web_artis' => $request->url_web_artis,
            'kota_asal' => $request->kota_asal,
            'no_hp' => $request->no_hp,
            'jenis_layanan' => $request->jenis_layanan,
            'upload_ktp' => $nama_ktp,
            'jasa_tambahan' => $request->jasa_tambahan,
        ]);

        toastr()->success('Berhasil Submit Lagu!', 'Sukses');
        return redirect()->back();
    }

    public function show($id)
    {
        $data = Submitlagu::findOrFail($id);
        return view('admin.rilis-lagu.detail', compact('data'));
    }
}
