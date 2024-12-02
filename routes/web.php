<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\FacebookController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing');
});
Route::get('/master', function () {
    return view('dashboard');
});

// Landing Page
Route::get('/layanan-kami', function () {
    return view('landing.layanan-kami');
});
Route::get('/paket-harga', function () {
    return view('landing.paket-harga');
});
// Route::get('/berita', );

Route::group(['middleware' => 'isTamu'], function () {
    Route::get('/daftar', [AuthController::class, 'register'])->name('register');
    Route::post('/daftar', [AuthController::class, 'postRegister'])->name('postRegister');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'postLogin'])->name('postLogin');

    //Login FB
    Route::controller(FacebookController::class)->group(function () {
        Route::get('auth/facebook', 'redirectToFacebook')->name('auth.facebook');
        Route::get('auth/facebook/callback', 'handleFacebookCallback');
    });

    //Login Google
    Route::controller(GoogleController::class)->group(function () {
        Route::get('auth/google', 'redirectToGoogle')->name('auth.google');
        Route::get('auth/google/callback', 'handleGoogleCallback');
    });
});

Route::group(['middleware' => 'isLogin'], function () {
    // dashboard
    Route::get('/dashboard', [HomeController::class, 'index']);

    // profil

    // berita
    Route::get('/kelola-berita', [BeritaController::class, 'index']);

    // submit lagu

    // logout
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
