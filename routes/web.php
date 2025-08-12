<?php

use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

// Rute untuk halaman utama ('/'), mengembalikan view 'pages.beranda'
Route::get('/', function () {
    return view('pages.beranda'); // Mengembalikan tampilan beranda
});

// Rute untuk halaman about ('/about'), mengirim data ke view 'pages.about'
Route::get('/about', function () {
    return view('pages.about', [    
        'nama' =>'John Doe',      // Nama yang dikirim ke view
        'umur' =>30,              // Umur yang dikirim ke view
        'alamat' =>'Jl. Bunga No. 123', // Alamat yang dikirim ke view
    ]);
});

// Rute untuk halaman contact ('/contact'), langsung mengembalikan view tanpa data tambahan
Route::view('/contact', 'pages.contact');



// Satu controller banyak method
// Rute untuk halaman product ('/product'), langsung mengembalikan view tanpa data tambahan
Route::get('/product', [ProdukController::class, 'getProduk']);

// Rute untuk halaman tambah produk ('/product/tambah'), mengarahkan ke method 'tambahProduk' pada ProdukController
Route::get('/product/tambah', [ProdukController::class, 'tambahProduk']);
