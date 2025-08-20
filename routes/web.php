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
Route::get('/product', [ProdukController::class, 'index']); // menampilkan data

// Rute untuk halaman tambah produk ('/product/tambah'), mengarahkan ke method 'tambahProduk' pada ProdukController
Route::get('/product/create', [ProdukController::class, 'create']); // mengarahkan ke method 'create' pada ProdukController
Route::post('/product',[ProdukController::class, 'store']); // mengelola data yang telah dikirim dari form data
Route::get('/product/{id}', [ProdukController::class, 'show']); // menampilkan detail produk berdasarkan ID

Route::get('/product/{id}/edit', [ProdukController::class, 'edit']); // mengarahkan ke method 'edit' pada ProdukController
Route::put('/product/{id}', [ProdukController::class, 'update']); // mengelola data yang telah dikirim dari form edit produk

Route::delete('/product/{id}', [ProdukController::class, 'destroy']); // menghapus data produk berdasarkan ID


