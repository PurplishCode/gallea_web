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
<div class="card border-secondary mt-5" style="width: 370px;height:440px;background:rgba(18, 18, 87, 0.404);">
  <div class="pt-4"><img src="{{ asset('Logo_EDR.png') }}" class="border-secondary border-rounded" style="width:50px;"></div>
  <div class="pt-3"><h4 class="text-bold" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">LOGIN</h4></div>
  <div class="d-flex">
    <form class="form-group" action="{{ url('login') }}" method="POST">
        @csrf
        @method("POST")
        <div class="p-3">
            <label for="email" class="form-label d-flex flex-column-start">E-MAIL:</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width: 310px;" name="email">
    <div id="emailHelp" class="form-text text-white d-flex flex-column-start">We'll never share your E-mail to anyone.</div>
    </div>
    
    <div class="p-3">
        <label for="password" class="form-label d-flex flex-column-start">PASSWORD:</label>
    <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width: 310px;" name="password">
</div>
<div class="pt-4">
    <button type="submit" class="btn btn-secondary" style="width: 250px">SUBMIT</button>
</div>
    </form>   
    </div>  
</div>  
</section>
</body> 
</html>