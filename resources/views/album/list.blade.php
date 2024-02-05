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

 @foreach($assocAlbum as $assoc)

<div class="card">
    <div class="card-img-top">
        <img src="{{ $assoc->albumID }}" alt="">
    </div>
</div>

@endforeach

 @endsection   
</body>
</html>