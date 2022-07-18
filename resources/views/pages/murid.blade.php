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
        @php
                $nilai_s = 0;
                @endphp

        @foreach ($nilai1 as $murid)
        <hr>
        Nama : {{ $murid['name'] }}<br>
        Jurusan : {{ $murid['jurusan'] }}<br>
        @foreach ($murid['data'] as $data)
        Mata pelajaran : {{ $data['mapel'] }}<br>
        nilai : {{ $data['nilai'] }}<br>
        
                @php
                $nilai_s += $data['nilai'];
                @endphp
                @endforeach
                @php
                $nr = $nilai_s / count($murid['data'])  
                @endphp
                @php
                NILAI RATA - RATA : {{$nr}}<br>
                $grade;
                if($nr >= 85 && $nr <= 100){
                    $grade = 'A';
                }elseif($nr >= 75 && $nr <= 84){
                    $grade = 'B';
                }elseif($nr >= 60 && $nr <= 74){
                    $grade = 'C';
                }elseif($nr >= 50 && $nr <= 59){
                    $grade = 'D';
                }elseif($nr >= 0 && $nr <= 49){
                    $grade = 'E';
                }
                @endphp
                Grade : {{$grade}}

        <hr>
        @endforeach
    </fieldset>
</body>
</html>