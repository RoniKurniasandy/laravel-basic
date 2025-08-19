@extends('layouts.master') <!-- Menggunakan layout utama 'master' -->

@section('konten') <!-- Awal section 'konten' yang akan diisi pada layout master -->

    <h1>Detail Produk</h1> <!-- Judul halaman -->
    <hr> <!-- Garis horizontal sebagai pemisah -->

    <div class="card"> <!-- Awal card Bootstrap -->
        <div class="card-header">
            Detail Produk 
        </div>

        <div class="card-body">
            <img src="https://placehold.co/600x400" class="img-fluid" alt="...">
        <p>Nama Produk : {{$produk->nama_produk}} </p>
        <p>Harga : {{$produk->harga}} </p>
        <p>Deskripsi : {{$produk->deskripsi_produk}} </p>
        <p>Kategori : Barang Elektronik </p>
        <p>Stok : Tersedia 3 </p>
        <a href="/product" class="btn btn-primary">Kembali Ke Halaman Produk</a>
        </div>
    </div>
@endsection <!-- Akhir