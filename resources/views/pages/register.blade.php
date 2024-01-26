<!DOCTYPE html>
<html lang="en">
<head>
    <style>
          body {
            background: linear-gradient(to bottom, #4AABFA, #331DF8CC);
            margin: 0;
            
    }
    </style>
    @extends('layout.link')
    @extends('layout.script')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body>
    @if (Session::get("error"))
        <div>{{ Session::get("error") }}</div>
    @endif
    
<section class="d-flex justify-content-center text-center text-white align-items-center min-vh-100">
<div class="card border-secondary bg-dark" style="width: 490px;height:480px">
<div class="col text-white pt-4">
    <h3>REGISTRATION</h3>
<form action="{{ url('register') }}"
method="POST" class="form-group pt-4">
@csrf
@method('POST')
<div class="d-flex justify-content-center text-center">
    <input type="text" class="form-control" style="width: 380px;" name="username">
</div>
<div class="pt-4"></div>
<div class="d-flex justify-content-center text-center">
    <input type="password" class="form-control" style="width: 380px;" name="password">
</div>
<div class="pt-4"></div>
<div class="d-flex justify-content-center text-center">
    <input type="text" class="form-control" style="width: 380px;" name="email">
</div>
<div class="pt-4"></div>
<div class="d-flex justify-content-center text-center">
    <input type="text" class="form-control" style="width: 380px;" name="namaLengkap">
</div>
<div class="pt-4"></div>
<div class="d-flex justify-content-center text-center">
    <input type="text" class="form-control" style="width: 380px;" name="alamat">
</div>

<div class="pt-3"></div>
<button type="submit" class="btn btn-secondary">SUBMIT</button>
</form>

</div>
</div>
<div class="card border-secondary bg-dark" style="width: 300px;height:480px;">
    
   <div class="pt-2 d-flex justify-content-center text-center card-img-overlay" style="position:     absolute; right:150px; z-index:2;"><h4 class="d-flex text-black justify-content-center" style="font-family:fantasy;">Selamat Datang Pengguna Baru!</h4></div>
    <img src="{{ asset('loginNew.jpg') }}" alt="loginBanner" style="box-sizing:border-box;z-index:1;position: relative;height:100%;" class="card-img">
    
    </div>     
</section>
</body>
</html>