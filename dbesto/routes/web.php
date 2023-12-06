<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\BahanBakuController;
use App\Http\Controllers\TransaksiController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/utama', [AdminController::class, 'index']); // HALAMAN UTAMA
Route::get('/dashboard', [AdminController::class, 'dashboard']); // HALAMAN CONTENT UNTUK DASHBOARD

//TABLE ,CHART 
Route::get('/table', [AdminController::class, 'table']);// HALAMAN CONTENT UNTUK TABLE CRUD
Route::get('/chart', [AdminController::class, 'charts']); // HALAMAN UTAMA UNTUK CHART

//HALAMAN UNTUK LOGIN , DAFTAR DAN LUPA PASSWORD 
Route::get('/login', [AdminController::class, 'hallogin']); // HALAMAN UTAMA UNTUK LOGIN
Route::get('/register', [AdminController::class, 'daftar']); // HALAMAN UTAMA UNTUK DAFTAR AKUN
Route::get('/lupapassword', [AdminController::class, 'lupapw']); // HALAMAN UTAMA UNTUK LUPA PASSWORD

//BAHAN BAKU
Route::get('/bahanbaku', [BahanBakuController::class, 'index'])->name('bahanbaku.index'); // HALAMAN UTAMA UNTUK BAHAN BAKU
Route::get('/tambahdata', [BahanBakuController::class, 'create'])->name('bahanbaku.create');  // HALAMAN UTAMA UNTUK TAMBAH BAHAN BAKU
Route::post('/tambah', [BahanBakuController::class, 'store'])->name('bahanbaku.store');  // HALAMAN UTAMA UNTUK TAMBAH BAHAN BAKU
Route::get('/bahanbaku/{bahanbaku}/edit', [BahanBakuController::class, 'edit'])->name('bahanbaku.edit'); // HALAMAN EDIT DATA BAHAN BAKU
// Route::put('/bahanbaku/{bahanbaku}', [BahanBakuController::class, 'update'])->name('bahanbaku.update'); // PROSES UPDATE DATA BAHAN BAKU
Route::delete('/bahanbaku/{bahanbaku}', [BahanBakuController::class, 'destroy'])->name('bahanbaku.destroy');


//TRANSAKSI
Route::get('/transaksi', [TransaksiController::class, 'index']);
Route::get('/tambahdataTransaksi', [TransaksiController::class, 'create']);
Route::post('/tambahTransaksi', [TransaksiController::class, 'store']);

//PRODUK
Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/tambahProduk', [ProdukController::class, 'create']);
Route::post('/tambahProduk1', [ProdukController::class, 'store']);
Route::put('/produk/{id}', [ProdukController::class, 'update'])->name('produk.update');


Route::get('/bahanbaku/{bahanbaku}/edit', [BahanBakuController::class, 'edit'])->name('bahanbaku.edit'); // HALAMAN EDIT DATA BAHAN BAKU
Route::put('/bahan', [BahanBakuController::class, 'update']); // PROSES UPDATE DATA BAHAN BAKU
Route::delete('/bahanbaku/{bahanbaku}', [BahanBakuController::class, 'destroy'])->name('bahanbaku.destroy');

//SUPPLIER
Route::get('/supplier', [SupplierController::class, 'index'])->name('supplier.index'); // HALAMAN UTAMA UNTUK BAHAN BAKU
Route::get('/tambahSupplier', [SupplierController::class, 'create'])->name('supplier.create');  // HALAMAN UTAMA UNTUK TAMBAH BAHAN BAKU
Route::post('/tambahSupplier1', [SupplierController::class, 'store'])->name('supplier.store');  // HALAMAN UTAMA UNTUK TAMBAH BAHAN BAKU
