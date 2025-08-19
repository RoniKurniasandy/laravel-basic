<?php

namespace App\Models; // Namespace model

use Illuminate\Database\Eloquent\Model; // Import base Model Eloquent

class produk extends Model // Deklarasi class model produk, turunan dari Eloquent Model
{

    // Nama tabel yang digunakan oleh model ini
    protected $table = 'tb_produk'; 

    // Primary key pada tabel
    protected $primaryKey = 'id_produk'; 

    // Kolom yang boleh diisi secara massal
    // // protected $fillable = ['nama_produk','harga','stok']; //
    // fillable tidak digunakan karena tidak bisa digabung dengan guarded

    // Kolom yang tidak boleh diisi secara massal
    protected $guarded = ['id_produk'];
     
}


