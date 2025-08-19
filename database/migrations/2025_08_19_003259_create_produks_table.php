<?php

use Illuminate\Database\Migrations\Migration; // Import class Migration dari Laravel
use Illuminate\Database\Schema\Blueprint; // Import class Blueprint untuk mendefinisikan struktur tabel
use Illuminate\Support\Facades\Schema; // Import Schema facade untuk manipulasi database

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void // Fungsi yang dijalankan saat migrate
    {
        Schema::create('tb_produk', function (Blueprint $table) { // Membuat tabel 'produks'
            $table->id('id_produk'); // Membuat kolom primary key 'id_produk' bertipe big integer auto increment
            $table->string('nama_produk'); // Membuat kolom 'nama_produk' bertipe string (varchar)
            $table->integer('harga'); // Membuat kolom 'harga' bertipe integer
            $table->text('deskripsi_produk'); // Membuat kolom 'deskripsi_produk' bertipe text
            $table->integer('kategori_id'); // Membuat kolom 'kategori_id' bertipe integer
            $table->timestamps(); // Membuat kolom 'created_at' dan 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void // Fungsi yang dijalankan saat rollback
    {
        Schema::dropIfExists('produks'); // Menghapus tabel 'produks' jika ada
    }
};


