<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataBarangController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    if (Auth::check()) {
        if (Auth::user()->hak_akses == 'admin') {
            return redirect()->route('dashboard');
        } elseif (Auth::user()->hak_akses == 'petugas') {
            return redirect()->route('barang-masuk');
        }
    }

    return view('login'); // Jika belum login, tampilkan halaman login
})->name('login');
Route::post('/', [LoginController::class, 'authenticate'])->name('login.process');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/data-barang', [DataBarangController::class, 'index'])->name('data-barang');
    // Route::get('/data-barang/edit/{id}', [DataBarangController::class, 'edit'])->name('data-barang.edit');
    Route::post('/data-barang/update/{id}', [DataBarangController::class, 'update'])->name('data-barang.update');
    Route::delete('/data-barang/{id}', [DataBarangController::class, 'destroy'])->name('data-barang.destroy');

    Route::get('/pengguna', [UserController::class, 'index'])->name('pengguna');
    Route::post('/pengguna/store', [UserController::class, 'store'])->name('pengguna.store');
    Route::put('/pengguna/update/{id}', [UserController::class, 'update'])->name('pengguna.update');
    Route::delete('/pengguna/delete/{id}', [UserController::class, 'destroy'])->name('pengguna.destroy');
});

Route::get('/barang-masuk', [BarangMasukController::class, 'index'])->name('barang-masuk');
Route::post('/barang-masuk/store', [BarangMasukController::class, 'store'])->name('barang-masuk.store');
Route::put('/barang-masuk/update/{id}', [BarangMasukController::class, 'update'])->name('barang-masuk.update');
Route::delete('/barang-masuk/delete/{id}', [BarangMasukController::class, 'destroy'])->name('barang-masuk.destroy');

Route::get('/barang-keluar', [BarangKeluarController::class, 'index'])->name('barang-keluar');
Route::post('/barang-keluar/store', [BarangKeluarController::class, 'store'])->name('barang-keluar.store');
Route::put('/barang-keluar/update/{id}', [BarangKeluarController::class, 'update'])->name('barang-keluar.update');
Route::delete('/barang-keluar/delete/{id}', [BarangKeluarController::class, 'destroy'])->name('barang-keluar.destroy');
Route::get('/barang/get-data/{kode_barang}', [BarangKeluarController::class, 'getBarangData'])->name('barang.getData');
