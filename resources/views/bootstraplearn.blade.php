<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body>
    @extends('layout.link')
   <div class="container bg-dark">
<p class="text-center text-white">Ini Container</p>
   </div>

   <div class="container-fluid bg-dark">
<p class="text-center text-white">Ini Container Fluid</p>

</div>

<button type="button" data-bs-toggle="modal" class="btn btn-primary" data-bs-target="#myModal">Open Modal</button>

<div class="modal fade" id="myModal">
<div class="modal-dialog">
<div class="modal-content">

    <div class="modal-header">Modal</div>
    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
</div>    
</div>    
</div>

</body>
</html>