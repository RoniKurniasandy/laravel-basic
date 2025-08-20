
@extends('layouts.master') <!-- Menggunakan layout utama 'master' -->
@section('konten') <!-- Awal section 'konten' yang akan diisi pada layout master -->
<h1>Update Daftar Produk</h1>
    <div class="card"> <!-- Awal card Bootstrap -->
        <div class="card-header">Update data produk</div> <!-- Header card -->
        <div class="card-body"> <!-- Body card -->
            <form action="/product/{{ $data->id_produk }}" method="POST"> <!-- Form untuk menambah produk, dikirim ke /product dengan metode POST -->
                    @method('PUT') <!-- Metode PUT untuk update data -->
                    @csrf <!-- Token CSRF untuk keamanan form -->
                <div class="row"> <!-- Awal row Bootstrap -->
                    <div class="col-sm-6"> <!-- Kolom kiri (setengah lebar) -->
                        <div class="mb-3">
                            <label class="form-label">Nama Produk</label> <!-- Label input nama produk -->
                            <input type="text" name="nama_produk" class="form-control" value="{{ $data->nama_produk }}"> <!-- Input nama produk -->
                            @error('nama_produk')
                                <div id="emailHelp" class="form-text text-danger">{{ $message }}</div> <!-- Pesan error validasi nama produk -->
                            @enderror
                        </div>
                    </div>

                    <div class="col-sm-6"> <!-- Kolom kanan (setengah lebar) -->
                        <div class="mb-3">
                            <label class="form-label">Harga Produk</label> <!-- Label input harga produk -->
                            <input type="number" name="harga_produk" class="form-control" value="{{ $data->harga }}"> <!-- Input harga produk -->
                            @error('harga_produk')
                                <div id="emailHelp" class="form-text text-danger">{{ $message }}</div> <!-- Pesan error validasi harga produk -->
                            @enderror
                        </div>
                    </div>

                    <div class="col-12"> <!-- Kolom penuh untuk deskripsi -->
                        <div class="form-floating">
                            <textarea class="form-control" name="deskripsi" placeholder="Leave a comment here"
                                style="height: 100px">{{ $data->deskripsi_produk }}</textarea> <!-- Input textarea deskripsi produk -->
                            <label>Deskripsi Produk</label> <!-- Label textarea -->
                        </div>
                        @error('deskripsi')
                            <div id="emailHelp" class="form-text text-danger">{{ $message }}</div> <!-- Pesan error validasi deskripsi -->
                        @enderror
                    </div>  
                    <div class="col-sm-12 mt-3"> <!-- Kolom penuh untuk tombol submit -->
                        <button type="submit" class="btn btn-primary">Update</button> <!-- Tombol submit -->
                    </div>
            </form>
        </div>
    </div>
@endsection <!-- Akhir section 'konten' -->






