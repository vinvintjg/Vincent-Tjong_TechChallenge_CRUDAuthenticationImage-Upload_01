@extends('layouts.app')

{{-- @extends('layouts.app') --}}

@section('content')
<div class="container">
    <div class="row justify-content-center text-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header">{{ __('DASHBOARD') }}</div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}
                    {{ __('You are logged in!') }}
                        <a href="{{ route('getCreatePage')}}">Click Here</a>
                </div>
            </div>
        </div>
    </div>
</div>

<head>
    <style>
        @keyframes spinning {

          from { transform: rotate(0deg) }
          to { transform: rotate(300deg) }
        }
        .spin {
        animation-name: spinning;
        animation-duration: 3s;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
        }


      </style>
</head>
<body>
    <div class="d-flex justify-content-center" style="height: 50px; padding-top: 70px">
        <img src="https://lh5.googleusercontent.com/-9p1vMf21Py4/TYgNGIt41xI/AAAAAAAAAC0/wbiShfRGVTM/s1600/iceweasel.png" height="350" class="spin" />
    </div>
</body>




@endsection


<head>
    <style>
        @keyframes spinning {

          from { transform: rotate(0deg) }
          to { transform: rotate(360deg) }
        }
        .spin {
        animation-name: spinning;
        animation-duration: 8s;
        animation-iteration-count: infinite;
        animation-timing-function: ease-out;
        }


      </style>
</head>
