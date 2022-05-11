@extends('layouts.layout')
    @section('content')
        <div style="padding-top: 20px"></div>
        <div class="container">
            <div class="row justify-content-center text-center ">
                <div class="col-md-9">
                <div class="card shadow">
                    <div class="card-header">{{ __('GALLERY') }}</div>
                        <div class="card-body">
                            <form action="">
                                <a class="btn btn-primary" aria-current="page" href="{{ route('getCreatePage')}}">Upload New Image</a>
                            </form>
                                <br>
                                <tbody>
                                    @foreach ($books as $book)
                                        <td>
                                            <img src="{{asset('storage/Image/'.$book->Image)}}" alt="Error" style="height: 150px" >
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

    @endsection
