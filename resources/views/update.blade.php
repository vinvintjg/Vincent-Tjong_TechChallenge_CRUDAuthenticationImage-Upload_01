<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <body style="background-image:linear-gradient(to right, #4682B4, #00FFFF, #00FA9A);">
    <title>Document</title>
</head>
<body>

    <h1>UPDATE DATA</h1>

    <form action="{{route('updateBook', ['id' => $book->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="NamaPembeli" class="form-label">Nama Pembeli</label>
            <input name="NamaPembeli" type="text" class="form-control" id="formGroupExampleInput" value="{{$book->NamaPembeli}}" placeholder="Masukkan Nama Pembeli">
        </div>
        <div class="mb-3">
            <label for="Barang" class="form-label">Barang</label>
            <input name="Barang" type="text" class="form-control" id="formGroupExampleInput" value="{{$book->Barang}}" placeholder="Masukkan Nama Barang">
        </div>
        <div class="mb-3">
            <label for="Harga" class="form-label">Harga</label>
            <input name="Harga" type="text" class="form-control" id="formGroupExampleInput" value="{{$book->Harga}}" placeholder="Masukkan Harga Barang">
        </div>
        <div class="mb-3">
            <label for="Jumlah" class="form-label">Jumlah</label>
            <input name="Jumlah" type="text" class="form-control" id="formGroupExampleInput" value="{{$book->Jumlah}}" placeholder="Masukkan Jumlah Barang">
        </div>
        <div class="mb-3">
            <label for="Tanggal" class="form-label">Tanggal</label>
            <input name="Tanggal" type="date" class="form-control" id="formGroupExampleInput" value="{{$book->Tanggal}}" placeholder="Masukkan Tanggal Penjualan Barang">
        </div>
        <div class="mb-3">
            <label for="Jam" class="form-label">Jam</label>
            <input name="Jam" type="time" class="form-control" id="formGroupExampleInput" value="{{$book->Jam}}" placeholder="Masukkan Jam Penjualan Barang">
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</body>
</html>
