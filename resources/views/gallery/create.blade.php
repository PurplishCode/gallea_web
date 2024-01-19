e<!DOCTYPE html>
<html lang="en">
<head>
    @extends("layout.main")
    
    <style>
      body {
            background: linear-gradient(to bottom, #F0BA56C5, #F3AA35F5);
            margin: 0;
          
    }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body class="">
    <section class=" d-flex text-center justify-content-center min-vh-100">
        <div class="card border-secondary bg-dark mt-5"  style="width: 400px;height: 400px;">
            <form method="POST" action="{{ url('post.gambar') }}" class="form-group text-white row" style="font-family:Georgia, 'Times New Roman', Times, serif;">
            @csrf
            @method("POST")
            <div class="d-flex justify-content-center text-center pt-4">
<h5>Tambahkan Gambar</h1>
            </div>
            <div class="d-flex justify-content-center text-center pt-4 ">
               
                <input class="form-control border-secondary" type="text" placeholder="Title" style="width: 310px;" aria-describedby="basic-addon1">     
            </div>
            <div class="d-flex justify-content-center text-center pt-4 ">
               
                <input class="form-control border-secondary" type="text" placeholder="Title" style="width: 310px;" aria-describedby="basic-addon1">     
            </div>
            </form>
        </div>
    </section>
</body>
</html>