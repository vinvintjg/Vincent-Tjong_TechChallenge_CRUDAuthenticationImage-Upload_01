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

<div style="padding-top: 20px"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header text-center">{{ __('INPUT NEW BOOKS') }} </div>
                        <div class="card-body">
                        {{-- <form method="POST" action="{{ route('register') }}"> --}}
                            {{-- @csrf --}}
                            <form action="{{ route('createBook') }}" method="POST" enctype="multipart/form-data">

                                @csrf

                                <div class="mb-3">
                                    <label for="Title" class="form-label">Name Of Book</label>
                                    <input name="Title" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Name Of Book">
                                    @error('Title')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="Author" class="form-label">Author Of Book</label>
                                    <input name="Author" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Author Of Book">
                                    @error('Author')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="Pages" class="form-label">Pages Of Book</label>
                                    <input name="Pages" type="numeric" class="form-control" id="formGroupExampleInput" placeholder="Input Pages Of Book">
                                    @error('Pages')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="Year" class="form-label">Year Release</label>
                                    <input name="Year" type="date" class="form-control" id="formGroupExampleInput" placeholder="Input Year Of Release Book">
                                    @error('Year')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="Image" class="form-label">Image of Book</label>
                                    <input name="Image" type="file" class="form-control" id="formGroupExampleInput" placeholder="Input Image Of Book">
                                    @error('Image')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                  </div>
                                <button type="submit" class="btn btn-success">Insert</button>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection

