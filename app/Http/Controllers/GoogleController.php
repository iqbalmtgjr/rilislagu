<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $userGoogle = Socialite::driver('google')->user();
            // dd($userGoogle->getId());
            $finduser = User::where('google_id', $userGoogle->getId())->first();

            if ($finduser) {
                Auth::login($finduser);

                toastr()->success('Selamat Datang di RilisLagu.id!', 'Haloo');
                return redirect('/dashboard');
            } else {
                $make_password = 'qweasdzxc';
                // $make_password = Str::random(8);
                $user = User::updateOrCreate(['email' => $userGoogle->email], [
                    'role' => 'user',
                    'name' => $userGoogle->getName(),
                    'google_id' => $userGoogle->id,
                    'avatar' => $userGoogle->getAvatar(),
                    'password' => Hash::make($make_password)
                ]);

                // $newPelanggan = Pelanggan::create(['user_id' => $user->id]);

                // Mail::to($user->email)->send(new NotifPendaftaranAkun($user, $make_password));
                Auth::login($user);

                toastr()->success('Selamat Datang di RilisLagu.id!', 'Halo');
                return redirect('/dashboard');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}