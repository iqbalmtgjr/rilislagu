<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\SubmitlaguController;
use App\Http\Controllers\KelolapaketController;

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

//maintanance
Route::get('/optimize-clear', function () {
    Artisan::call('optimize:clear');
    return 'Optimization cache cleared!';
});


// Landing Page
// Route::get('/', [LandingController::class, 'index']);
Route::get('/', [LandingController::class, 'index2']);
Route::get('/layanan-kami', [LandingController::class, 'layananKami']);
Route::get('/rilis-terbaru', [LandingController::class, 'rilisTerbaru']);
Route::get('/paket-harga', [LandingController::class, 'paketHarga']);
Route::get('/kontak', [LandingController::class, 'kontak']);
Route::get('/artikel', [BeritaController::class, 'artikel']);
Route::get('/artikel/{slug}', [BeritaController::class, 'beritaSatuan'])->name('berita.show');
Route::get('about', [LandingController::class, 'about']);
Route::get('contact', [LandingController::class, 'contact']);
Route::post('contact', [LandingController::class, 'contactstrore'])->name('contact.store');


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

    Route::group(['middleware' => ['checkRole:admin']], function () {

        //pengguna
        Route::get('/kelola-pengguna', [PenggunaController::class, 'index']);
        Route::post('/pengguna/tambah', [PenggunaController::class, 'store'])->name('pengguna.tambah');
        Route::get('/pengguna/edit/{id}', [PenggunaController::class, 'edit'])->name('pengguna.edit');
        Route::put('/pengguna/update', [PenggunaController::class, 'update'])->name('pengguna.update');
        Route::get('/pengguna/destroy/{id}', [PenggunaController::class, 'destroy'])->name('pengguna.destroy');

        //paket
        Route::get('/kelola-paket', [KelolapaketController::class, 'index']);
        Route::post('/kelola-paket/post', [KelolapaketController::class, 'store'])->name('paket.tambah');
        Route::get('/kelola-paket/edit/{id}', [KelolapaketController::class, 'edit'])->name('paket.edit');
        Route::put('/kelola-paket/update', [KelolapaketController::class, 'update'])->name('paket.update');
        Route::get('/kelola-paket/destroy/{id}', [KelolapaketController::class, 'destroy'])->name('paket.destroy');

        // berita
        Route::get('/kelola-berita', [BeritaController::class, 'index']);
        Route::get('/kelola-berita/tambah', [BeritaController::class, 'create']);
        Route::get('/kelola-berita/edit/{id}', [BeritaController::class, 'edit'])->name('berita.edit');
        Route::post('/kelola-berita/post', [BeritaController::class, 'store'])->name('berita.post');
        Route::post('/kelola-berita/update/{id}', [BeritaController::class, 'update'])->name('berita.update');
        Route::get('/kelola-berita/status/{id}', [BeritaController::class, 'status'])->name('berita.status');
        Route::get('/kelola-berita/destroy/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy');

        // rilis lagu
        Route::get('/rilis-lagu', [SubmitlaguController::class, 'indexAdmin'])->name('rilis.index');
        Route::get('/rilis-lagu/show/{id}', [SubmitlaguController::class, 'show'])->name('rilis.show');
    });

    Route::group(['middleware' => ['checkRole:user']], function () {
        // lihat paket lagu
        Route::get('/lihat-paket', [KelolapaketController::class, 'lihatpaket'])->name('lihat.paket');

        // submit lagu sisi user
        Route::get('/submit', [SubmitlaguController::class, 'index'])->name('submit');
        Route::get('/submit/create', [SubmitlaguController::class, 'create'])->name('submit.create');
        Route::post('/submit', [SubmitlaguController::class, 'store'])->name('submit.store');
        Route::get('/submit/show/{id}', [SubmitlaguController::class, 'show'])->name('submit.show');
        Route::get('/submit/destroy', [SubmitlaguController::class, 'destroy'])->name('submit.destroy');
    });

    // logout
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
