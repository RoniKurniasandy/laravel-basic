<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder // Seeder utama yang akan menjalankan seeder lainnya
{
    /**
     * Seed the application's database.
     */
    public function run(): void // Fungsi yang dijalankan saat seeder dijalankan
    {
        // \App\Models\User::factory(10)->create();

        $this->call(ProdukSeeder::class); // Memanggil seeder ProdukSeeder untuk mengisi data produk
    }
}
