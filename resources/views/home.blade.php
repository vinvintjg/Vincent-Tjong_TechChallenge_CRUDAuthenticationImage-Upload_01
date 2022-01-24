@extends('layouts.layout')

{{-- @extends('layouts.app') --}}

@section('content')
<div style="padding-top: 20px"></div>
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
@endsection
