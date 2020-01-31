<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center> FORM </center>
    @foreach ($form as $item)
        Nama : {{$item -> nama}}<br>
        Email :{{$item -> email}}<br>
        Asal Sekolah : {{$item -> asal_sekolah}}<br>
        Jenis Kelamin : {{$item -> jk}}<br>
        Tanggal Lahir : {{$item -> tgl_lahir}}<br>
        Alamat : {{$item -> alamat}}<br>
        No Handphone : {{$item -> nohp}}<hr>
    @endforeach
</body>
</html>
