<!DOCTYPE html>
<html lang="en">
<head>
    @extends('layout.link')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table class="table">
        <tr>
            <th>userID</th>
            <th>username</th>
            <th>email</th>
            <th>namaLengkap</th>
            <th>alamat</th>
        </tr>
        @foreach ($dataUser as $data)

        <tr>
            <td>{{ $data->userID }}</td>
            <td>{{ $data->username }}</td>
            <td>{{ $data->email }}</td>
            <td>{{ $data->namaLengkap }}</td>
            <td>{{ $data->alamat }}</td>
        </tr>            
        @endforeach
    </table>
</body>
</html>