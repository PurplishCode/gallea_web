<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.link')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body style="display: flex;">    
@include('layout.sidenav')
<div class="content-container">
    @yield('content')
</div>
</body>
</html>