<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController; 
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\BukuController;

Route::get('/', function () {
    return view('welcome');
});

// Menghubungkan URL ke Controller 
Route::get('/halo', [InfoController::class, 'halo']); 

Route::get('/kampus', [InfoController::class, 'kampus']);

Route::get('/dosen', [InfoController::class, 'dosen']); 

Route::get('mahasiswa/{nama}/{nim}', [InfoController::class, 
'detailMahasiswa']); 

// ROUTE PRODUK CONTROLER
Route::resource('produk', ProdukController::class);

// route buku controller
Route::resource('koleksi', BukuController::class);
