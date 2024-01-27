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
    @include('layout.main')

@section('content')

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