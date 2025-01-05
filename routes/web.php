<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\DetailPenjualanController;

use Illuminate\Support\Facades\Route;


route::get('/login', [LoginController::class, 'showLogin'])->name('login');
route::post('/actionlogin', [LoginController::class, 'actionLogin'])->name('actionlogin');
route::get('/logout', [LoginController::class, 'actionLogout'])->name('actionlogout');


Route::middleware('auth')->group(function () {
    route::get('/', [DashboardController::class, 'index']);
});


Route::get('/user', [UserController::class, 'index']);
Route::get('/user/tambah', [UserController::class, 'create']);
Route::post('/user/simpan', [USerController::class, 'store']);
Route::get('/user/{id}/show', [UserController::class, 'show']);
Route::post('/user/{id}/update', [UserController::class, 'update']);
Route::get('/user/{id}/destroy', [UserController::class, 'destroy']);

Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/produk/tambah', [ProdukController::class, 'create']);
Route::post('/produk/simpan', [ProdukController::class, 'store']);
Route::get('/produk/{id}/show', [ProdukController::class, 'show']);
Route::post('/produk/{id}/update', [ProdukController::class, 'update']);
Route::get('/produk/{id}/destroy', [ProdukController::class, 'destroy']);

Route::get('/jenis', [JenisController::class, 'index']);
Route::get('/jenis/tambah', [JenisController::class, 'create']);
Route::post('/jenis/simpan', [JenisController::class, 'store']);
Route::get('/jenis/{id}/show', [JenisController::class, 'show']);
Route::post('/jenis/{id}/update', [JenisController::class, 'update']);
Route::get('/jenis/{id}/destroy', [JenisController::class, 'destroy']);

Route::get('/pelanggan', [PelangganController::class, 'index']);
Route::get('/pelanggan/tambah', [PelangganController::class, 'create']);
Route::post('/pelanggan/simpan', [PelangganController::class, 'store']);
Route::get('/pelanggan/{id}/show', [PelangganController::class, 'show']);
Route::post('/pelanggan/{id}/update', [PelangganController::class, 'update']);
Route::get('/pelanggan/{id}/destroy', [PelangganController::class, 'destroy']);

Route::get('/penjualan', [PenjualanController::class, 'index']);
Route::get('/penjualan/tambah', [PenjualanController::class, 'create']);
Route::post('/penjualan/simpan', [PenjualanController::class, 'store']);
Route::get('/penjualan/{id}/show', [PenjualanController::class, 'show']);
Route::post('/penjualan/{id}/update', [PenjualanController::class, 'update']);
Route::get('/penjualan/{id}/destroy', [PenjualanController::class, 'destroy']);


Route::get('/penjualan/{id}/detail', [DetailPenjualanController::class, 'detail']);
Route::get('/penjualan/detail/tambahdetail', [DetailPenjualanController::class, 'create']);
Route::post('/detail_penjualan/simpan', [DetailPenjualanController::class, 'store']);
Route::get('/detail_penjualan/{id}/destroy', [PenjualanController::class, 'destroy']);
