<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KelolapaketController extends Controller
{
    public function index()
    {
        $data = Paket::latest()->get();
        return view('admin.paket.index', compact('data'));
    }

    public function lihatpaket()
    {
        return view('admin.paket.lihat-paket');
    }

    public function store(Request $request)
    {
        $validator = Validator::make(request()->all(), [
            'nama_paket' => 'required|string|max:255',
            'harga' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            toastr()->error('Ada kesalahan inputan', 'Gagal');
            return back()->withErrors($validator)->withInput();
        }

        Paket::create([
            'nama_paket' => $request->nama_paket,
            'harga' => $request->harga,
        ]);

        toastr()->success('Berhasil tambah paket', 'Sukses');
        return redirect()->back();
    }

    public function edit(string $id)
    {
        $data = Paket::find($id);
        return $data;
    }

    public function update(Request $request)
    {
        $validator = Validator::make(request()->all(), [
            'nama_paket' => 'required|string|max:255',
            'harga' => 'required|number|max:255',
        ]);

        if ($validator->fails()) {
            toastr()->error('Ada kesalahan inputan', 'Gagal');
            return back()->withErrors($validator)->withInput();
        }

        $data = Paket::find($request->id);
        $data->update([
            'nama_paket' => $request->nama_paket,
            'harga' => $request->harga,
        ]);

        toastr()->success('Berhasil update paket', 'Sukses');
        return redirect()->back();
    }

    public function destroy(string $id)
    {
        $data = Paket::find($id);
        $data->delete();

        toastr()->success('Berhasil hapus paket', 'Sukses');
        return redirect()->back();
    }
}
