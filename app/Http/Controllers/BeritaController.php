<?php

namespace App\Http\Controllers;

use DOMDocument;
use App\Models\Berita;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Berita::latest()->get();
        return view('admin.berita.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.berita.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'judul' => 'required|max:200',
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

        $dom_isi = new DOMDocument();
        $dom_isi->loadHTML($request->isi, 10000);

        if ($dom_isi->getElementsByTagName('img')->length > 0) {
            $image = $dom_isi->getElementsByTagName('img');

            foreach ($image as $key => $img) {
                $src = $img->getAttribute('src');
                // $data = '';
                // if (strpos($src, ';') !== false && strpos($src, ',') !== false) {
                $data = base64_decode(explode(',', explode(';', $src)[1])[1]);
                // }
                $image_name =  '/gambar_isi/' . time() . $key . '.png';

                file_put_contents(public_path('admin/berita') . $image_name, $data);

                $img->removeAttribute('src');
                $img->setAttribute('src', 'http://localhost:8000/admin/berita' . $image_name);
            }
        }
        $isi = $dom_isi->saveHTML();

        if ($request->file('gambar')) {
            $nama_foto = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $request->file('gambar')->getClientOriginalName());
            $request->file('gambar')->move(public_path('admin/berita/gambar'), $nama_foto);
            Berita::create([
                'judul' => $request->judul,
                'isi' => $isi,
                'gambar' => $nama_foto,
                'is_published' => 1,
                'slug' => Str::of($request->judul)->slug('-'),
            ]);
        } else {
            Berita::create([
                'judul' => $request->judul,
                'isi' => $isi,
                'is_published' => 1,
                'slug' => Str::of($request->judul)->slug('-'),
            ]);
        }

        toastr()->success('Berhasil tambah berita', 'Sukses');
        return redirect('/kelola-berita');
    }

    public function edit(string $id)
    {
        $data = Berita::find($id);
        return view('admin.berita.edit', compact('data'));
    }

    public function status($id)
    {
        $data = Berita::find($id);
        if ($data->is_published == 1) {
            $data->is_published = 0;
        } else {
            $data->is_published = 1;
        }
        $data->save();

        toastr()->success('Berhasil ubah status', 'Sukses');
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required|max:50',
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

        $dom_isi = new DOMDocument();
        $dom_isi->loadHTML($request->isi, 10000);

        if ($dom_isi->getElementsByTagName('img')->length > 0) {
            $image = $dom_isi->getElementsByTagName('img');

            foreach ($image as $key => $img) {
                $src = $img->getAttribute('src');
                // $data = '';
                // if (strpos($src, ';') !== false && strpos($src, ',') !== false) {
                $data = base64_decode(explode(',', explode(';', $src)[1])[1]);
                // }
                $image_name =  '/gambar_isi/' . time() . $key . '.png';

                file_put_contents(public_path('admin/berita') . $image_name, $data);

                $img->removeAttribute('src');
                $img->setAttribute('src', 'http://localhost:8000/admin/berita' . $image_name);
            }
        }


        $isi = $dom_isi->saveHTML();

        if ($request->file('gambar')) {
            $nama_foto = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $request->file('gambar')->getClientOriginalName());
            $request->file('gambar')->move(public_path('admin/berita/gambar'), $nama_foto);
            Berita::find($id)->update([
                'judul' => $request->judul,
                'isi' => $isi,
                'gambar' => $nama_foto,
                'is_published' => 1,
                'slug' => Str::of($request->judul)->slug('-'),
            ]);
        } else {
            Berita::find($id)->update([
                'judul' => $request->judul,
                'isi' => $isi,
                'is_published' => 1,
                'slug' => Str::of($request->judul)->slug('-'),
            ]);
        }

        toastr()->success('Berhasil update berita', 'Sukses');
        return redirect('/kelola-berita');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd($id);
        $data = Berita::find($id);
        if ($data->gambar) {
            @unlink(public_path('admin/berita/gambar/' . $data->gambar));
        }
        $data->delete();

        toastr()->success('Berhasil hapus berita', 'Sukses');
        return redirect('/kelola-berita');
    }
}
