<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.link')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body>
@extends('layout.main')
@section('content')
@foreach ($fotoData as $foto)
    <div class="container-fluid d-flex flex-shrink-0">
        <div class="card card-secondary">
            <div class="card-img">
                @if ($foto->lokasiFile)
                              <div class="container">
                                <div class="card">
                                    <div class="card-img-top">
                                        <img src="{{ asset('img' . '/' .$foto->lokasiFile) }}" alt="{{ $foto->judulFoto }}" style="max-width: 200px; max-height: 200px">
                                    </div>
                                </div>
                              </div>
                            @endif
            </div>
        </div>
    </div>
@endforeach

<div class="btn btn-primary">
    
<a href="{{ route('create.gallery') }}" style="text-decoration: none; color:aliceblue">Tambahkan Foto</a>

</div>
@endsection
 
    {{-- Form LOGOUT --}}
    {{-- <form method="POST" action="{{ route('logout') }}">
        @method("POST")
        @csrf
    <button type="submit" class="btn btn-primary">LOGOUT</button>
    </form> --}}
</body>
</html>