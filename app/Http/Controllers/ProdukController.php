<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // Import Request untuk menangani permintaan HTTP
use App\Models\produk; // Import model produk

// Controller untuk mengelola data produk
class ProdukController extends Controller
{
    // Method untuk menampilkan halaman daftar produk
    public function index()
    {
        // Data toko yang akan dikirim ke view
        $toko = [
            'nama_toko' => 'Toko Biru Jaya',
            'alamat'=> 'Jl. Toko No. 1',
            'type'=> 'Ruko',
        ];
        $produk = produk::get(); // Mengambil semua data produk dari model produk
        // $queryBuilder = DB::table('tb_produk')->get{}; // Mengambil semua data produk menggunakan query builder
        return view('pages.produk.show',[ // Mengembalikan view 'pages.product' beserta data toko
            'data_toko' => $toko,
            'data_produk' => $produk,
        ]);
    }

    // Method untuk menampilkan halaman tambah produk
    public function create(){
        return view('pages.produk.add'); // Mengembalikan view 'pages.addProduct'
    }
    public function store(Request $request) {




        // menambahkan data produk baru ke tb_produk
        // DB::table('tb_produk')->create([]);
        // query tambah data
        produk::create([ // Membuat data produk baru dengan data yang diterima dari form
            'nama_produk' => $request->nama_produk, // Mengambil nama produk dari input form
            'harga' => $request->harga_produk, // Mengambil harga produk dari input form
            'deskripsi_produk' => $request->deskripsi, // Mengambil deskripsi produk dari input form
            'kategori_id' => 1, // ID kategori produk (misalnya 1 untuk kategori tertentu)
        ]);

        return redirect('/product')->with('pesan', 'berhasil menambahkan data'); // Mengarahkan kembali ke halaman daftar produk
    }

    public function show($id){
        // query untuk mengambil data produk berdasarkan ID
        $data = produk::findOrFail($id); // Mengambil data produk berdasarkan ID yang diberikan

        // query builder
        // DB::table('tb_produk')->where('id_produk', $id)->firstOrFail(); // Mengambil data produk berdasarkan ID menggunakan query builder

        return view('pages.produk.detail', ['produk' => $data]); // Mengembalikan view 'pages.produk.detail' dengan data produk
    }

    public function edit($id) {
        $produk = produk::findOrFail($id); // Mengambil data produk berdasarkan ID yang diberikan

        return view('pages.produk.edit', ['data' => $produk]); // Mengembalikan view 'pages.produk.edit' dengan data produk
    }

    public function update($id,Request $request)  {
             $request->validate([ // Validasi data yang diterima dari form
            'nama_produk' => 'required|min:8', // Nama produk harus diisi
            'harga_produk' => 'required', // Harga produk harus diisi dan berupa angka
            'deskripsi' => 'required', // Deskripsi produk harus diisi
        ],[
            'nama_produk.min'=>'Nama produk minimal 8 karakter', // Pesan kesalahan jika nama produk kurang dari 8 karakter
            'nama_produk.max'=>'Nama produk maksimal 12 karakter', // Pesan kesalahan jika nama produk lebih dari 12 karakter
            'nama_produk.required'=>'Nama produk harus diisi', // Pesan kesalahan jika harga produk tidak diisi
            'harga_produk.required'=>'Harga produk harus diisi', // Pesan kesalahan jika harga produk tidak diisi
            'deskripsi.required'=>'Deskripsi produk harus diisi', // Pesan kesalahan jika deskripsi produk tidak diisi
        ]);

        // query untuk simpan data produk yang telah diupdate
        produk::where ('id_produk',$id)->update([
            'nama_produk'=> $request->nama_produk, // Mengambil nama produk dari input form
            'harga'=> $request->harga_produk, // Mengambil nama produk dari input form
            'deskripsi'=> $request->deskripsi_produk, // Mengambil nama produk dari input form
        ]);

        return redirect('/product')->with('pesan', 'berhasil mengupdate data'); // Mengarahkan kembali ke halaman daftar produk dengan pesan sukses

    }
}