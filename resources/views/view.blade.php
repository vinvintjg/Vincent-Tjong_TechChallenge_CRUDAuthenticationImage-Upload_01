{{-- <!DOCTYPE html>
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
<body> --}}
@extends('layouts.layout')
@section('content')
    <div style="padding-top: 20px"></div>
    {{-- @if ($datas->count()) --}}

    {{-- <div class="text-center">
        <form method="GET" action="{{url('books')}}">
            <input type="text" name="cari" placeholder="Search"/>
            <button class="" type="submit">Search</button>
        </form>
    <br>
    </div> --}}



    <div class="container">
        <div class="row justify-content-center text-center ">
            <div class="col-md-9">
            <div class="card shadow">
                <div class="card-header">{{ __('BOOK LIST') }}</div>
                    <div class="card-body">
                        <div class="text-center">
                            <form action="{{route('search1')}}" method="GET">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="cari" placeholder="Search" value=""/>
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </form>
                        <br>
                        </div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name Of Book</th>
                                <th scope="col">Author Of Book</th>
                                <th scope="col">Pages Of Book</th>
                                <th scope="col">Year Release</th>
                                <th scope="col">Edit Book</th>
                                <th scope="col">Delete Book</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($books as $book)
                                    <tr>
                                    <th scope="row">{{ $book->id }}</th>
                                    <td>{{ $book->Title }}</td>
                                    <td>{{ $book->Author }}</td>
                                    <td>{{ $book->Pages }}</td>
                                    <td>{{ $book->Year }}</td>
                                    <td>
                                        <a href="{{route('getBookById', ['id'=>$book->id])}}"><button type="submit" class="btn btn-success col-md-9">Edit</button></a>
                                    </td>
                                    <td>
                                        <form action="{{route('delete', ['id' => $book->id])}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger col-md-4.0">Delete</button>
                                        </form>
                                    </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $books->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- @else
    <div class="text-center">
        <h1>No Books Available</h1>
    </div>
    @endif --}}

@endsection
