<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

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
Route::group(['middleware' => 'isTamu'], function () {
    Route::get('/daftar', [AuthController::class, 'register'])->name('register');
    Route::post('/daftar', [AuthController::class, 'postRegister'])->name('postRegister');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'postLogin'])->name('postLogin');
});

Route::group(['middleware' => 'isLogin'], function () {
    // dashboard
    Route::get('/dashboard', [HomeController::class, 'index']);

    // profil

    // berita

    // submit lagu

    // logout
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
