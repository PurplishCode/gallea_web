<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body>
    @extends('layout.main')
    @section('content')
    <div class="btn btn-primary content-container   "><a href="{{ route('create.album') }}" style="text-decoration: none; color:aliceblue">Buat Album</a></div>

    @foreach($dataAlbum as $data)
  <div class="container-fluid flex-shrink-0">
    <div class="card card-secondary bg-dark text-white" style="width: 18rem; height: 18rem;margin-right:10px">
    <div class="card-body">
    <h5 class="card-title">{{ $data->namaAlbum }}</h5><p class="card-text">{{ $data->deskripsi }}</p>   
    </div>
 
</div>
  </div>
    @endforeach
    @endsection
</body>
</html>