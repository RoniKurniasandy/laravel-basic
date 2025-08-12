@extends('layouts.master') <!-- Menggunakan layout utama 'master' -->

@section('konten') <!-- Awal section 'konten' yang akan diisi pada layout master -->

    <h1>Daftar Produk</h1> <!-- Judul halaman -->
    <hr> <!-- Garis horizontal sebagai pemisah -->

    <a href="/produk/tambah" type="button" class="btn btn-primary mb-3">Tambah Data</a> <!-- Tombol untuk menambah data produk -->

    <div class="card"> <!-- Awal card Bootstrap -->
        <div class="card-header">
            Daftar Produk <!-- Header card -->
        </div>
 
            <b>Nama Toko : {{ $nama_toko }} </b> 
            <b>Alamat : {{ $alamat }} </b> 
            <b>Tipe Toko : {{ $type }} </b> 

        <div class="card-body">

            <table class="table table-striped table-bordered"> <!-- Tabel dengan style Bootstrap -->
                <thead>
                    <tr>
                        <th scope="col">No</th> <!-- Kolom nomor urut -->
                        <th scope="col">Nama Produk</th> <!-- Kolom nama produk -->
                        <th scope="col">Stok</th> <!-- Kolom stok produk -->
                        <th scope="col">Harga</th> <!-- Kolom harga produk -->
                        <th scope="col">Aksi</th> <!-- Kolom aksi (edit/hapus) -->
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th> <!-- Nomor urut produk -->
                        <td>Tv</td> <!-- Nama produk -->
                        <td>10</td> <!-- Stok produk -->
                        <td>150000</td> <!-- Harga produk -->
                        <td>
                            <button type="button" class="btn btn-danger">Hapus</button> <!-- Tombol hapus -->
                            <button type="button" class="btn btn-warning">Edit</button> <!-- Tombol edit -->
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th> <!-- Nomor urut produk -->
                        <td>Laptop</td> <!-- Nama produk -->
                        <td>19</td> <!-- Stok produk -->
                        <td>20000</td> <!-- Harga produk -->
                        <td>
                            <button type="button" class="btn btn-danger">Hapus</button> <!-- Tombol hapus -->
                            <button type="button" class="btn btn-warning">Edit</button> <!-- Tombol edit -->
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th> <!-- Nomor urut produk -->
                        <td>Monitor</td> <!-- Nama produk -->
                        <td>5</td> <!-- Stok produk -->
                        <td>35000000</td> <!-- Harga produk -->
                        <td>
                            <button type="button" class="btn btn-danger">Hapus</button> <!-- Tombol hapus -->
                            <button type="button" class="btn btn-warning">Edit</button> <!-- Tombol edit -->
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection <!-- Akhir