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

<td><img src="{{ asset('img')  . '/' . $foto->lokasiFile }}" alt="" style="width: 270px; height:210px;"></td>
<td>
    <button class="btn btn-success edit-foto" data-bs-toggle="modal" data-bs-target="#editModal{{ $foto->fotoID }}" data-id="{{ $foto->fotoID }}">
  Edit
    </button>
    <button type="button" class="btn btn-danger delete-button" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $foto->fotoID }}" data-id="{{$foto->fotoID}}">DELETE</button>
</td>
</tr>

<div class="modal fade" id="editModal{{ $foto->fotoID }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit This Foto</h5>
    <button type="button" class="close" aria-label="Close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></div>    
    <div class="modal-body">
        <form action="{{ route('edit.foto', $foto->fotoID) }}" method="POST" class="form-group" enctype="multipart/form-data">
        @csrf
    @method('PUT')
    <div class="form-group pb-4">
        <label for="judulFoto" class="fw-300 d-flex flex-start" style="font-family:'Times New Roman', Times, serif; width:340px;">Judul Foto</label>
        <input type="text" name="judulFoto" id="judulFoto" placeholder="{{ $foto->judulFoto }}" class="form-control">
    </div>

    <div class="form-group pb-4">
        <label for="judulFoto" class="fw-300 d-flex flex-start" style="font-family:'Times New Roman', Times, serif; width:340px;">Deskripsi Foto</label>
        <input type="text" name="deskripsiFoto" id="deskripsiFoto" placeholder="{{ $foto->deskripsiFoto }}" class="form-control">
    </div>
    <div class="form-group pb-4">
        <label for="judulFoto" class="fw-300 d-flex flex-start" style="font-family:'Times New Roman', Times, serif; width:340px;">Upload File</label>
        <input type="file" name="lokasiFile" id="lokasiFile" placeholder="{{ $foto->lokasiFile }}" class="form-control">
    </div>

    <button class="btn btn-success" type="submit">Save</button>
    <button class="btn btn-danger" type="button" data-bs-dismiss="modal">Cancel</button>
</form>
    </div>
    </div>
    </div>
</div>
</div>

<div class="modal fade" id="deleteModal{{ $foto->fotoID }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Delete foto</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5>Would you like to delete this data?</h5>
                <form action="{{route('foto.destroy', $foto->fotoID)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <br>
                    <button class="btn btn-danger button-delete" type="submit">Delete</button>
                    <button class="btn-warning button-warning" data-bs-dismiss="modal" type="button">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endforeach
</table>
</div>

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