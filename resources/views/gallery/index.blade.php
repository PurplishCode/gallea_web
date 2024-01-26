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

    <div>{{ Session::get("email") }}</div>

    <div>{{ Session::get("success") }}</div>

    @section('content')

    <form method="POST" action="{{ route('logout') }}">
        @method("POST")
        @csrf
    <button type="submit" class="btn btn-primary">LOGOUT</button>
    </form>

</body>
</html>