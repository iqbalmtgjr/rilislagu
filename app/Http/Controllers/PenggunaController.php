<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PenggunaController extends Controller
{
    public function index()
    {
        $data = User::latest()->get();
        return view('admin.pengguna.index', compact('data'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make(request()->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'role' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($request->password),
        ]);

        toastr()->success('Berhasil tambah pengguna', 'Sukses');
        return redirect()->back();
    }

    public function edit(string $id)
    {
        $data = User::find($id);
        return $data;
    }

    public function update(Request $request)
    {
        $validator = Validator::make(request()->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $request->id,
            'role' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            toastr()->error('Ada kesalahan inputan', 'Gagal');
            return back()->withErrors($validator)->withInput();
        }

        $data = User::find($request->id);
        $data->name = request('name');
        $data->email = request('email');
        $data->role = request('role');
        $data->save();

        toastr()->success('Berhasil update pengguna', 'Sukses');
        return redirect()->back();
    }

    public function destroy(string $id)
    {
        $data = User::find($id);
        $data->delete();

        toastr()->success('Berhasil hapus pengguna', 'Sukses');
        return redirect()->back();
    }
}
