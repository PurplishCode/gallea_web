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
<div>hiweqeqe</div>
@endsection


   @if (Session::get("successful"))
       <div class="alert alert-warning" role="warning">{{ Session::get("successful") }}</div>
   @endif
 
    {{-- Form LOGOUT --}}
    {{-- <form method="POST" action="{{ route('logout') }}">
        @method("POST")
        @csrf
    <button type="submit" class="btn btn-primary">LOGOUT</button>
    </form> --}}
</body>
</html>