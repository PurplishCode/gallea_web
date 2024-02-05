e<!DOCTYPE html>
<html lang="en">
<head>
   @include('layout.link')
    
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
            <form method="POST" action="{{ route('post-gambar') }}" class="form-group text-white row" style="font-family:Georgia, 'Times New Roman', Times, serif;" enctype="multipart/form-data">
            @csrf
            @method("POST")
            <div class="d-flex justify-content-center text-center pt-4">
<h5>Tambahkan Gambar</h1>
            </div>
            <div class="d-flex justify-content-center text-center pt-4 ">
                <div class="justify-content-center text-center pt-4 align-items-center">
               
                    <input class="form-control border-secondary" type="text" placeholder="judulFoto" style="width: 310px;" aria-describedby="basic-addon1" name="judulFoto">
                     
                    <input class="form-control border-secondary" type="text" placeholder="deskripsiFoto" style="width: 310px;" aria-describedby="basic-addon1" name="deskripsiFoto">      
                     
                    <input name="lokasiFile" class="form-control border-secondary" type="file" placeholder="lokasiFile" style="width: 310px;" aria-describedby="basic-addon1"  >
                    
                    <select name="albumID" id="albumID">
                    @foreach($albumData as $album)
                        <option value="{{ $album->albumID }}">{{ $album->namaAlbum }}</option>
                    @endforeach    
                    </select>
    <div class="btn btn-primary">
        <button type="submit" class="btn btn-primary">SUBMIT</button>
    </div>      
            </div>
            
            </div>
            </form>
        </div>
    </section>
</body>
</html>