@extends('layouts.master') <!-- Menggunakan layout utama 'master' -->

@section('konten') <!-- Awal section 'konten' yang akan diisi pada layout master -->

    <h1>Daftar Produk</h1> <!-- Judul halaman -->
    <hr> <!-- Garis horizontal sebagai pemisah -->

    <a href="/product/create" type="button" class="btn btn-primary mb-3">Tambah Data</a>
    <!-- Tombol untuk menambah data produk -->

    <div class="alert alert-primary" role="alert">
        <b> Nama Toko : {{ $data_toko['nama_toko'] }} </b> <br>
        <b> Alamat : {{ $data_toko['alamat']}} </b> <br>
        <b> Tipe Toko : {{ $data_toko['type'] }} </b> <br>

    </div>
    @if (session('pesan')) <!-- Mengecek apakah ada session 'status' -->
        <div class="alert alert-primary">
            {{ session('pesan') }} <!-- Menampilkan pesan status -->
        </div>
    
    @endif
    <div class="card"> <!-- Awal card Bootstrap -->

        
        <div class="card-header">
            Daftar Produk <!-- Header card -->
        </div>


        <div class="card-body">

            <table class="table table-striped table-bordered"> <!-- Tabel dengan style Bootstrap -->
                <thead>
                    <tr>
                        <th scope="col">No</th> <!-- Kolom nomor urut -->
                        <th scope="col">Nama Produk</th> <!-- Kolom nama produk -->
                        <th scope="col">Harga</th> <!-- Kolom stok produk -->
                        <th scope="col">Deskripsi</th> <!-- Kolom harga produk -->
                        <th scope="col">Aksi</th> <!-- Kolom aksi (edit/hapus) -->
                    </tr>
                </thead>
                <tbody>

                    @foreach ($data_produk as $item) <!-- Looping data produk -->

                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th> <!-- Nomor urut produk -->
                            <td>{{$item->nama_produk}}</td> <!-- Nama produk -->
                            <td>{{ $item->harga }}</td> <!-- Stok produk -->
                            <td>{{ $item->deskripsi_produk }}</td> <!-- Harga produk -->
                            <td>
                                <button type="button" class="btn btn-danger">Hapus</button> <!-- Tombol hapus -->
                                <a href="/product/{{ $item->id_produk }}/edit" class="btn btn-warning">Edit<a> <!-- Tombol edit -->
                                <a href="/product/{{ $item->id_produk }}" class="btn btn-info">Detail</a> <!-- Tombol Detail -->
                            </td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection <!-- Akhir