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
    
<div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card" style="width: 800px;">
          <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Form</h4>
          </div>
          <div class="card-body">
            <form method="POST" action="{{ route('post.album') }}">
                @csrf
                @method('POST')
              <div class="form-group">
                <label for="name">Nama Album:</label>
                <input type="text" class="form-control" id="namaAlbum" placeholder="Enter your Album Name" name="namaAlbum">
              </div>
              <div class="form-group pt-3">
                <label for="deskripsi">Deskripsi:</label>
                <input type="text" class="form-control" id="deskripsi" placeholder="Enter your Description" name="deskripsi">
              </div>
             
            <div class="pt-3"><button type="submit" class="btn btn-primary">Submit</button></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
    @endsection
</body>
</html>