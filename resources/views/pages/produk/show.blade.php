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
        <div class="card-header d-flex justify-content-between align-items-center">
            Daftar Produk <!-- Header card -->
            <div class="d-flex gap-2">
                @if (Request()->keyword != '')
                
                <a href="/product" class="btn btn-info h-100">Reset</a>

                @endif

            <form class="input-group mb-3" style="width: 350px">
                <input type="text" class="form-control" value="{{ Request()->keyword }}" name="keyword" placeholder="Cari data produk">
                <button class="btn btn-success" type="submit" id="button-addon2">Cari Data</button>
            </form>
            </div>
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

                    @forelse ($data_produk as $item) <!-- Looping data produk -->

                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th> <!-- Nomor urut produk -->
                            <td>{{$item->nama_produk}}</td> <!-- Nama produk -->
                            <td>{{ $item->harga }}</td> <!-- Stok produk -->
                            <td>{{ $item->deskripsi_produk }}</td> <!-- Harga produk -->
                            <td>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#hapus{{ $item->id_produk }}">
                                    Hapus
                                </button>
                                <!-- <button type="button" class="btn btn-danger">Hapus</button> Tombol hapus -->
                                <a href="/product/{{ $item->id_produk }}/edit" class="btn btn-warning">Edit<a>
                                        <!-- Tombol edit -->
                                        <a href="/product/{{ $item->id_produk }}" class="btn btn-info">Detail</a>
                                        <!-- Tombol Detail -->
                            </td>
                        </tr>
                    @empty <!-- Jika tidak ada data produk -->
                    <tr>
                        <td colspan="5" class="text-center">Data yang anda cari tidak ada!!</td>
                    </tr>
                    @endforelse <!-- Akhir looping data produk -->
                </tbody>
            </table>
        </div>
    </div>
    @foreach ($data_produk as $item) <!-- Looping data produk untuk modal hapus -->
        <div class="modal fade" id="hapus{{ $item->id_produk }}" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="/product/{{ $item->id_produk }}" method="POST" class="modal-content">
                        @csrf <!-- Token CSRF untuk keamanan -->
                        @method('DELETE') <!-- Metode DELETE untuk menghapus data -->
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi!!</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Apakah anda yakin ingin menghapus produk {{ $item->nama_produk }}?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection <!-- Akhir  -->