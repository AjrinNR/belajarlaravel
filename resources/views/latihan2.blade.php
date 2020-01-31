<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Daftar Tabungan<br>
    @foreach ($tabungan as $item)
        Nama : {{$item -> nama}}<br>
        Nis : {{$item -> nis}}<br>
        Kelas : {{$item -> kelas}}<br>
        Jml : {{$item -> jml}}<br>


    @if ( $item -> jml >=50000)
        {{$paket = 'Paket A'}}
    @elseif ($item -> jml >= 10001 AND $item -> jml <=50000)
        {{$paket = ' Paket B'}}
    @elseif($item -> jml >= 1 AND $item -> jml <=10000)
        {{$paket = ' Paket C'}}
    @endif
        <hr>
    @endforeach
</body>
</html>
