<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <body style="background-image: linear-gradient(to right, #4682B4, #00FFFF, #00FA9A);">
    <title>Document</title>
</head>
<body>

    <h1>HASIL DATA PENJUALAN</h1>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Pembeli</th>
            <th scope="col">Barang</th>
            <th scope="col">Harga</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Jam</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                  <th scope="row">{{ $book->id }}</th>
                  <td>{{ $book->NamaPembeli }}</td>
                  <td>{{ $book->Barang }}</td>
                  <td>{{ $book->Harga }}</td>
                  <td>{{ $book->Jumlah }}</td>
                  <td>{{ $book->Tanggal }}</td>
                  <td>{{ $book->Jam }}</td>
                  <td>
                    <a href="{{route('getBookById', ['id'=>$book->id])}}"><button type="submit" class="btn btn-success">Edit</button></a>
                    <form action="{{route('delete', ['id' => $book->id])}}" method="post">
                      @csrf
                      @method('delete')
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                  </td>
                </tr>
            @endforeach
        </tbody>
      </table>
</body>
</html>
