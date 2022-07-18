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
            Data Nilai
        </legend>
        @foreach($mahasiswa as $mahasiswat)
        Nama Dosen  :  {{$mahasiswat['namadosen']}}<br>
        Mata Kuliah : {{$mahasiswat['pel']}}<br>
        <br>
        @php $d = 0 @endphp
        @foreach($mahasiswat['mahasiswa'] as $mahasiswa)
        Nama  : {{$mahasiswa['nama']}} <br>
        Nilai : {{$mahasiswa['nilai']}} <br>
        <br>
        @php $d += $mahasiswa ['nilai'] @endphp
        @endforeach
        Nilai Rata-rata : {{$d/count($mahasiswat['mahasiswa'])}}
        <hr>
        @endforeach
    </fieldset>
</body>
</html>