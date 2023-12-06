<?php

use App\Models\ProdukSupplier;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\BahanBakuController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\RoleSupplierController;
use App\Http\Controllers\ProdukSupplierController;
use App\Http\Controllers\InfoPengirimanSupplierController;



Route::get('/utama', [AdminController::class, 'index']); // HALAMAN UTAMA
Route::get('/dashboard', [AdminController::class, 'dashboard']); // HALAMAN CONTENT UNTUK DASHBOARD


Route::get('/kalender', [AdminController::class, 'kalender']); // HALAMAN CONTENT UNTUK DASHBOARD    

//TABLE ,CHART 
Route::get('/table', [AdminController::class, 'table']);// HALAMAN CONTENT UNTUK TABLE CRUD
Route::get('/chart', [AdminController::class, 'charts']); // HALAMAN UTAMA UNTUK CHART
Route::get('/grafik', [AdminController::class, 'grafik']);

//HALAMAN UNTUK LOGIN , DAFTAR DAN LUPA PASSWORD 
Route::get('/', [AdminController::class, 'hallogin']); // HALAMAN UTAMA UNTUK LOGIN
Route::get('/register', [AdminController::class, 'daftar']); // HALAMAN UTAMA UNTUK DAFTAR AKUN
Route::get('/lupapassword', [AdminController::class, 'lupapw']); // HALAMAN UTAMA UNTUK LUPA PASSWORD
Route::get('/grafik', [AdminController::class, 'grafik'])->name('grafik');


//BAHAN BAKU
Route::get('/bahanbaku', [BahanBakuController::class, 'index'])->name('bahanbaku.index'); // HALAMAN UTAMA UNTUK BAHAN BAKU
Route::get('/tambahdata', [BahanBakuController::class, 'create'])->name('bahanbaku.create');  // HALAMAN UTAMA UNTUK TAMBAH BAHAN BAKU
Route::post('/tambah', [BahanBakuController::class, 'store'])->name('bahanbaku.store');  // HALAMAN UTAMA UNTUK TAMBAH BAHAN BAKU
// Route::get('/bahanbaku/{bahanbaku}/edit', [BahanBakuController::class, 'edit'])->name('bahanbaku.edit'); // HALAMAN EDIT DATA BAHAN BAKU
// //Route::put('/bahanbaku/{bahanbaku}', [BahanBakuController::class, 'update'])->name('bahanbaku.update'); // PROSES UPDATE DATA BAHAN BAKU
Route::get('/bahanbaku/{Kode_bahan}', [BahanBakuController::class, 'hapusbahan'])->name('bahanbaku.destroy'); //HAPUS 
// Route::post('/bahanbakuedit/{bahanbaku}', [BahanBakuController::class, 'update']); // PROSES UPDATE DATA BAHAN BAKU

Route::get('/bahanbaku/{Kode_bahan}/edit', [BahanBakuController::class, 'edit'])->name('bahanbaku.edit'); //EDIT
Route::post('/bahanbakuedit/{bahanbaku}', [BahanBakuController::class, 'update']); // PROSES UPDATE DATA BAHAN BAKU

//TRANSAKSI
Route::get('/transaksi', [TransaksiController::class, 'index']);
Route::get('/tambahdataTransaksi', [TransaksiController::class, 'create']);
Route::post('/tambahTransaksi', [TransaksiController::class, 'store']);

//PRODUK
Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/tambahProduk', [ProdukController::class, 'create']);
Route::post('/tambahProduk1', [ProdukController::class, 'store']); //TAMBAH
Route::get('/produk/{produk}/edit', [ProdukController::class, 'edit'])->name('produk.edit'); //EDIT
Route::post('/editproduk/{produk}', [ProdukController::class, 'update']); // PROSES UPDATE DATA BAHAN BAKU
Route::get('/produk/{id}', [ProdukController::class, 'destroy'])->name('produk.destroy'); //HAPUS 

//SUPPLIER
Route::get('/supplier', [SupplierController::class, 'index']); //HALAMAN AWAL
Route::get('/tambahSupplier', [SupplierController::class, 'create']); //HALAMAN CREATE
Route::post('/tambahsupplierbaru', [SupplierController::class, 'store'])->name('tambahsupplierbaru.store'); //HALAMAN TAMBAH 
Route::get('/supplier/{supplier}/edit', [SupplierController::class, 'edit'])->name('supplier.edit'); // HALAMAN EDIT DATA BAHAN BAKU
Route::get('/supplier/{id}', [SupplierController::class, 'hapussupplier'])->name('supplier.destroy'); //HAPUS 
Route::post('/supplieredit/{supplier}', [SupplierController::class, 'update']); // PROSES UPDATE DATA BAHAN BAKU

                    //  SUPPLIER
Route::get('/dashboardsupplier', [RoleSupplierController::class, 'dashboardsupplier']); // HALAMAN CONTENT UNTUK DASHBOARD

// PENGIRIMAN
Route::get('/infopengiriman', [InfoPengirimanSupplierController::class, 'index']); //HALAMAN AWAL
Route::get('/tambahpengiriman', [InfoPengirimanSupplierController::class, 'create']); //HALAMAN CREATE
Route::post('/tambahpengirimanbaru', [InfoPengirimanSupplierController::class, 'store'])->name('tambahpengiriman.store'); //HALAMAN TAMBAH 
Route::get('/infopengiriman/{info_pengiriman_suppliers}/edit', [InfoPengirimanSupplierController::class, 'edit'])->name('infopengiriman.edit'); // HALAMAN EDIT DATA BAHAN BAKU
Route::get('/infopengiriman/{id}', [InfoPengirimanSupplierController::class, 'hapussupplier'])->name('infopengiriman.destroy'); //HAPUS 
Route::post('/editpengiriman/{info_pengiriman_suppliers}', [InfoPengirimanSupplierController::class, 'update']); // PROSES UPDATE DATA BAHAN BAKU


//produk supplier
Route::get('/produksupplier', [ProdukSupplierController::class, 'index']);
Route::get('/tambahbahanSupplier', [ProdukSupplierController::class, 'create']);
Route::post('/tambahbahanSupplier1', [ProdukSupplierController::class, 'store']); // TAMBAH
Route::get('/produksupplier/{produkSupplier}/edit', [ProdukSupplierController::class, 'edit'])->name('produksupplier.edit'); // EDIT
Route::post('/editbahansupplier/{id}', [ProdukSupplierController::class, 'update'])->name('produksupplier.update'); // PROSES UPDATE DATA BAHAN BAKU
Route::get('/produksupplier/{id}', [ProdukSupplierController::class, 'hapusproduk'])->name('produksupplier.destroy'); // HAPUS


// Route::middleware(['role:admin'])->group(function () {
//     Route::get('/admin', function () {
//         return "Halo, admin!";
//     });
// });

// Route::middleware(['role:supplier'])->group(function () {
//     Route::get('/supplier', function () {
//         return "Halo, supplier!";
//     });
// });