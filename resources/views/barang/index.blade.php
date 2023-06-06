<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    @include('layout.nav')

    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
                <h4 class="mb-3">{{ $pageTitle }}</h4>
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2">
                    {{-- <a href="{{ route('employees.create') }}" class="btn btn-primary">Create Employee</a> --}}
                    <a href="{{route('listBarang.create')}}" class="btn btn-success">Tambahkan Barang</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="table-responsive border p-3 rounded-3">
            <table class="table table-bordered table-hover table-striped mb-0 bg-white">
                <thead class="bg-success text-light">
                    <tr>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Deskripsi</th>
                        <th>Kategori Satuan</th>
                        <th>Harga</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barangs as $barang)
                    <tr>
                        <td>{{ $barang->kodeBarang }}</td>
                        <td>{{ $barang->namaBarang}}</td>
                        <td>{{ $barang->deskripsi}}</td>
                        <td>{{ $barang->satuan->namaSatuan}}</td>
                        <td>{{ $barang->harga }}</td>
                        <td>@include('barang.actions')</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
    @vite('resources/js/app.js')
</body>
</html>
