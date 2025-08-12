<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags untuk responsivitas dan karakter -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS dari CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title> <!-- Judul halaman -->
  </head>
  <body>
      
  @include('layouts.navbar') <!-- Menyisipkan file navbar -->

    <!-- Konten utama halaman -->
    <div class="container mt-3">
        <!-- Tempat untuk konten dinamis dari setiap halaman -->
        @yield('konten') <!-- Section konten yang akan diisi oleh child view -->
    </div>

    @include('layouts.footer') <!-- Menyisipkan file footer -->

    <!-- Bootstrap JS dari CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>




