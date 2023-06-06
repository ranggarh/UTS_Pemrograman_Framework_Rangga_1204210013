<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang di Halaman Website MyInventory</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <div class="container text-center my-5">
        <h1 class="mb-4">Selamat Datang di Halaman Website MyInventory</h1>
        {{-- Contoh cara mereferensikan gambar di dalam file blade dengan menggunakan pendekatan Vite --}}
        <img class="img-thumbnail" src="{{ Vite::asset('resources/images/welcomeInven.jpeg') }}" width="650px" alt="image">

        <div class="col-md-2 offset-md-5 mt-4">
            <div class="d-grid gap-2">
                <a class="btn btn-success" href="{{ route('home') }}">Beranda</a>
            </div>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>
</html>


