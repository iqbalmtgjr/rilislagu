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
            $finduser = User::where('google_id', $userGoogle->id)->first();

            if ($finduser) {
                Auth::login($finduser);
                return redirect()->intended('home')->with('sukses', 'Selamat Datang di OrderKuy!');
            } else {
                $make_password = Str::random(8);
                $user = User::updateOrCreate(['email' => $userGoogle->email], [
                    'role' => 'user',
                    'name' => $userGoogle->getName(),
                    'google_id' => $userGoogle->getId(),
                    'avatar' => $userGoogle->getAvatar(),
                    'password' => Hash::make($make_password)
                ]);

                // $newPelanggan = Pelanggan::create(['user_id' => $user->id]);

                // Mail::to($user->email)->send(new NotifPendaftaranAkun($user, $make_password));
                // Auth::login($user);

                return redirect()->intended('home')->with('sukses', 'Selamat Datang di OrderKuy!');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
