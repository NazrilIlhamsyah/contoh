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
        <legend>Data Berat Badan</legend>
            @if($bmi2 <= 17.0)
                Berat Badan : {{$berat}}<br>
                Tinggi Badan : {{$tinggi}}<br>
                Hasil BMI : {{$bmi2}}<br>
                Status Kesehatan : Kurus, kekurangan berat badan berat<br>
                umur :{{$umur2}}
            @elseif($bmi2 <= 17.4)
                Berat Badan : {{$berat}}<br>
                Tinggi Badan : {{$tinggi}}<br>
                Hasil BMI : {{$bmi2}}<br>
                Status Kesehatan : Kurus, kekurangan berat badan ringan<br>
                umur :{{$umur2}}
            @elseif($bmi2 <= 18.5)
                Berat Badan : {{$berat}}<br>
                Tinggi Badan : {{$tinggi}}<br>
                Hasil BMI : {{$bmi2}}<br>
                Status Kesehatan : normal<br>
                umur :{{$umur2}}
            @elseif($bmi2 <= 25.1)
                Berat Badan : {{$berat}}<br>
                Tinggi Badan : {{$tinggi}}<br>
                Hasil BMI : {{$bmi2}}<br>
                Status Kesehatan :gemuk, kelebihan berat badan tingkat ringan<br>
                umur :{{$umur2}}
            @elseif($bmi2 >= 27.1)
                Berat Badan : {{$berat}}<br>
                Tinggi Badan : {{$tinggi}}<br>
                Hasil BMI : {{$bmi2}}<br>
                Status Kesehatan : gemuk, kelebihan berat badan tingkat ringan<br>
                umur :{{$umur2}}
            @endif
    </fieldset>
</html>