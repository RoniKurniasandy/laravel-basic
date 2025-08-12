<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Controller untuk mengelola data produk
class ProdukController extends Controller
{
    // Method untuk menampilkan halaman daftar produk
    public function getProduk()
    {
        // Data toko yang akan dikirim ke view
        $data_toko = [
            'nama_toko' => 'Toko Biru Jaya',
            'alamat'=> 'Jl. Toko No. 1',
            'type'=> 'Ruko',
        ];
        return view('pages.product', $data_toko); // Mengembalikan view 'pages.product' beserta data toko
    }

    // Method untuk menampilkan halaman tambah produk
    public function tambahProduk(){
        return view('pages.addProduct'); // Mengembalikan view 'pages.addProduct'
    }
}