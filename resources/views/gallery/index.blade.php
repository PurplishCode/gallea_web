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

<div class="d-flex justify-content-center text-center">
    <table class="table">
        <thead>
        <tr>
            <th>
Nomor
            </th>
            <th>
judulFoto
            </th>
            <th>
Foto
            </th>
            <th>
                Action
            </th>
        </tr>
        </thead>
        @foreach($fotoData as $foto)

        <tr>
    <td>
        {{ $foto->fotoID }}
    </td>
    <td>
        {{ $foto->judulFoto }}
    </td>

<td><img src="{{ asset('img')  . '/' . $foto->lokasiFile }}" alt=""></td>
<td>
    <button class="btn btn-success edit-foto" data-toggle="modal" >
  Edit
    </button>
    <button type="button" class="btn btn-danger delete-button" data-toggle="modal" data-target="#deleteModal{{ $foto->fotoID }}" data-id="{{$foto->fotoID}}">DELETE</button>
</td>
</tr>
<div class="modal fade" id="deleteModal{{ $foto->fotoID }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Delete foto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5>Would you like to delete this data?</h5>
                <form action="{{route('foto.destroy', $foto->fotoID)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <br>
                    <button type="submit" class="btn btn-danger button-delete">YES</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endforeach
</table>
</div>

{{-- <div class="btn btn-primary">
    
<a href="{{ route('create.gallery') }}" style="text-decoration: none; color:aliceblue">Tambahkan Foto</a> --}}

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