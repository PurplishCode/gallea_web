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
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        @method('POST')
    <button type="submit" class="btn btn-primary">LOGOUT</a>
    </form>
    @endsection
</body>
</html>