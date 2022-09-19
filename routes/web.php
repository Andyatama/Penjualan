<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    KategoriController,
    BarangController,
    SupplierController,
    PembeliController,
    PembelianController,
    PenjualanController,
    DashboardController
};


Route::get('/', [DashboardController::class, 'index']);

// Route Barang
Route::resource('/barang', BarangController::class);
Route::get('/barang/{id}/edit', [BarangController::class, 'edit']);
Route::get('/barang/{id}/hapus', [BarangController::class, 'destroy']);


// Route Kategori
Route::resource('/kategori', KategoriController::class);
Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit']);
Route::get('/kategori/hapus/{id}', [KategoriController::class, 'destroy']);

// Route Suppplier
Route::resource('/supplier', SupplierController::class);
Route::get('/supplier/{id}/edit', [SupplierController::class, 'edit']);
Route::get('/supplier/{id}/hapus', [SupplierController::class, 'destroy']);

// Route Pembeli
Route::resource('/pembeli', PembeliController::class);
Route::get('/pembeli/{id}/edit', [PembeliController::class, 'edit']);
Route::get('/pembeli/{id}/hapus', [PembeliController::class, 'destroy']);

//Route Pembelian
Route::resource('/pembelian', PembelianController::class);
Route::get('/pembelian/edit/{id}', [PembelianController::class, 'edit']);
Route::get('/pembelian/hapus/{id}', [PembelianController::class, 'destroy']);

//Route Penjualan
Route::resource('/penjualan', PenjualanController::class);
Route::get('/penjualan/{id}/edit', [PenjualanController::class, 'edit']);
Route::get('/penjualan/{id}/hapus', [PenjualanController::class, 'destroy']);