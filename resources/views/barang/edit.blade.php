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
    <div class="container-sm mt-5">
        <form action="{{route('listBarang.update', ['listBarang'=>$barang->id])}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-6">

                    <div class="mb-3 text-center">
                        <i class="bi-dropbox fs-1"></i>
                        <h4>Edit Inventory Barang</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="kodeBarang" class="form-label">Kode Barang</label>
                            <input class="form-control @error('kodeBarang') is-invalid @enderror" type="text" name="kodeBarang" id="kodeBarang" value="{{$errors->any() ? old('kodeBarang'): $barang->kodeBarang}}" placeholder="Masukkan Kode Barang">
                            @error('kodeBarang')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="namaBarang" class="form-label">Nama Barang</label>
                            <input class="form-control @error('namaBarang') is-invalid @enderror" type="text" name="namaBarang" id="namaBarang" value="{{$errors->any() ? old('namaBarang'): $barang->namaBarang}}" placeholder="Masukkan Nama Barang">
                            @error('namaBarang')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <input class="form-control @error('deskripsi') is-invalid @enderror" type="text" name="deskripsi" id="deskripsi" value="{{$errors->any() ? old('deskripsi'): $barang->deskripsi}}" placeholder="Masukkan Deskripsi Produk">
                            @error('deskripsi')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input class="form-control @error('harga') is-invalid @enderror" type="text" name="harga" id="harga" value="{{$errors->any() ? old('harga'): $barang->harga}}" placeholder="Masukkan Harga Produk">
                            @error('harga')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="satuan" class="form-label">Kategori Satuan</label>
                            <select name="satuan" id="satuan" class="form-select">
                                @php
                                    $selected = "";
                                    if ($errors->any())
                                        $selected = old('satuan');
                                    else
                                        $selected = $barang->satuan_id;
                                @endphp

                                @foreach ($satuans as $satuan)
                                    <option value="{{ $satuan->id }}" {{ $barang->satuan_id == $satuan->id ? 'selected' : '' }}>{{ $satuan->kodeSatuan.' - '.$satuan->namaSatuan }}</option>
                                @endforeach
                            </select>
                            @error('satuan')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>

                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('listBarang.index') }}" class="btn btn-success btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Cancel</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-success btn-lg mt-3"><i class="bi-check-circle me-2"></i> Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    @vite('resources/js/app.js')
</body>
</html>
