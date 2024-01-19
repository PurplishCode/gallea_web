<!DOCTYPE html>
<html lang="en">
<head>
    @extends('layout.link')
<style>
    
    body {
        
    }
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body class="min-vh-100 bg-dark" style="background: linear-gradient(to bottom, #4324234, #4343432);">

<section class="d-flex justify-content-center text-center text-white min-vh-100">
<div class="card border-secondary mt-5" style="width: 320px;height:440px;background:rgba(18, 18, 87, 0.404);">
  <div class="pt-4"><img src="{{ asset('Logo_EDR.png') }}" class="border-secondary border-rounded" style="width:50px;"></div>  
</div>
</section>
</body> 
</html>