{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body> --}}

@extends('layouts.layout')
@section('content')

    <h1>DAFTAR PENJUALAN BARANG</h1>

    <form action="{{route('logout')}}" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger">logout</button>
    </form>

    <form action="{{ route('createBook') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="NamaPembeli" class="form-label">Nama Pembeli</label>
            <input name="NamaPembeli" type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Nama Pembeli">
        </div>
        <div class="mb-3">
            <label for="Barang" class="form-label">Barang</label>
            <input name="Barang" type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Nama Barang">
        </div>
        <div class="mb-3">
            <label for="Harga" class="form-label">Harga</label>
            <input name="Harga" type="numeric" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Harga Barang">
        </div>
        <div class="mb-3">
            <label for="Jumlah" class="form-label">Jumlah</label>
            <input name="Jumlah" type="numeric" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Jumlah Barang">
        </div>
        <div class="mb-3">
            <label for="Tanggal" class="form-label">Tanggal</label>
            <input name="Tanggal" type="date" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Tanggal Penjualan Barang">
        </div>
        <div class="mb-3">
            <label for="Jam" class="form-label">Jam</label>
            <input name="Jam" type="time" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Jam Penjualan Barang">
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Genre Id</label>
            <input name="genreId" type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Genre Id">
        </div>
        @error('Harga')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <button type="submit" class="btn btn-success">Insert</button>
    </form>

@endsection

{{--
</body>
</html> --}}
