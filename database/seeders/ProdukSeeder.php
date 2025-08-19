<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents; // Import trait opsional untuk seeder
use Illuminate\Database\Seeder; // Import base class Seeder
use Illuminate\Support\Facades\DB; // Import DB facade untuk query database

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void // Fungsi yang dijalankan saat seeder dijalankan
    {
        DB::table('tb_produk')->insert([ // Menyisipkan data ke tabel 'tb_produk'
            [
                'nama_produk' => 'Laptop Gaming', // Nama produk
                'harga' => 15000000, // Harga produk
                'deskripsi_produk' => 'Laptop gaming dengan spesifikasi tinggi', // Deskripsi produk
                'kategori_id' => 1, // ID kategori produk
                'created_at' => now(), // Waktu pembuatan data
            ],
            [
                'nama_produk' => 'Laptop Kantor',
                'harga' => 2000,
                'deskripsi_produk' => 'Laptop untuk kebutuhan kantor',
                'kategori_id' => 2,
                'created_at' => now(),
            ],
            [
                'nama_produk' => 'Keyboard',
                'harga' => 2000000,
                'deskripsi_produk' => 'Keyboard mekanik dengan lampu RGB',
                'kategori_id' => 3,
                'created_at' => now(),
            ]

        ]);
    }
}
