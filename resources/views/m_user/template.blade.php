<!DOCTYPE html>
<html>
    <head>
        <title>CRUD Laravel</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/solar/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>

Fungsi $request->validate digunakan untuk memvalidasi input dimasukkan 
sesuai dengan aturan yang telah ditetapkan sebelumnya yang diterima dari 
pengguna sebelum data disimpan atau diproses lebih lanjut.