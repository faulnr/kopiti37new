<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Auth\AuthController;

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


Route::get('/login', [AuthController::class, 'login'])->name('auth.login');

Route::middleware(['guest'])->group(function () {
    //Home
    Route::get('/', [HomeController::class, 'index'])->name('home');
    //Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
      
    Route::controller(KategoriController::class)->prefix('kategori')->group(function () {
		Route::get('', [KategoriController::class, 'index'])->name('kategori');
		Route::get('tambah', 'tambah')->name('kategori.tambah');
		Route::post('tambah', 'simpan')->name('kategori.tambah.simpan');
		Route::get('edit/{id}', 'edit')->name('kategori.edit');
		Route::post('edit/{id}', 'update')->name('kategori.tambah.update');
		Route::get('hapus/{id}', 'hapus')->name('kategori.hapus');
	});

    Route::controller(ProdukController::class)->prefix('produk')->group(function () {
		Route::get('', [ProdukController::class, 'index'])->name('produk');
		Route::get('tambah', 'tambah')->name('produk.tambah');
		Route::post('tambah', 'simpan')->name('produk.tambah.simpan');
		Route::get('edit/{id}', 'edit')->name('produk.edit');
		Route::post('edit/{id}', 'update')->name('produk.tambah.update');
		Route::get('hapus/{id}', 'hapus')->name('produk.hapus');
	});
});
