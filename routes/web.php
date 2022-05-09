<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CekRoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Petugas\RakController;
use App\Http\Controllers\Petugas\BukuController;
use App\Http\Controllers\Petugas\KategoriController;
use App\Http\Controllers\Petugas\PenerbitController;
use App\Http\Controllers\Petugas\DashboardController;
use App\Http\Controllers\Petugas\TransaksiController;
use App\Http\Controllers\Peminjam\KeranjangController;
use App\Http\Controllers\Peminjam\BukuController as PeminjamBukuController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', PeminjamBukuController::class);

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/cek-role', CekRoleController::class);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // Admin dan Petugas
    Route::middleware(['role:admin|petugas'])->group(function () {
        Route::get('/dashboard', DashboardController::class);

        Route::get('/kategori', KategoriController::class);
        Route::get('/rak', RakController::class);
        Route::get('/penerbit', PenerbitController::class);
        Route::get('/buku1', BukuController::class);
        Route::get('/transaksi', TransaksiController::class);
    });

    // Peminjam
    Route::middleware(['role:peminjam'])->group(function () {
        Route::get('/keranjang', KeranjangController::class);
    });

    // Admin
    Route::middleware(['role:admin'])->group(function () {
        Route::get('/user', UserController::class);
    });
});
