<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<fieldset>
        <legend>
            Data Dosen
        </legend>
        @foreach($dosen as $dosent)
        Nama Dosen : <strong> {{$dosent['namadosen']}}</strong> <br>
        NIPD : <strong> {{$dosent['nipd']}}</strong> <br>
        <br>
        Mahasiswa :
        <br>
        @foreach($dosent['mahasiswa'] as $mahasiswa)
        <br>
        Nama : {{$mahasiswa['nama']}} <br>
        Jurusan : {{$mahasiswa['jurusan']}} <br>
        NIPM : {{$mahasiswa['nipm']}} <br>
        @foreach($mahasiswa['matakuliah'] as $matakuliah)
        <li>{{$matakuliah}}</li>
        @endforeach
        @endforeach
        <hr>
        @endforeach
    </fieldset>
</body>
</html>