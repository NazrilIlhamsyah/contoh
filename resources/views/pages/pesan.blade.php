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
<legend>pemesanan</legend>

    @if($a == null)
        <strong>{{$a}}</strong>
    @elseif($a == 'mie goreng')
        Makanan : <strong>{{$a}}</strong><br>
        harga : Rp. 5000
    @elseif($a == 'seblak')
        Makanan : <strong>{{$a}}</strong><br>
        harga : Rp. 7500
    @elseif($a == 'nasi padang')
        Makanan : <strong>{{$a}}</strong><br>
        harga : Rp. 15000
    @else
        Makanan :  <strong>{{$a}}</strong><br>
    <hr>
    @endif
    @if($b == null)
        <strong>{{$b}}</strong>
    @elseif($b == 'kopi')
        Minuman : <strong>{{$b}}</strong><br>
        harga : Rp. 3000
    @elseif($b == 'teh')
        Minuman : <strong>{{$b}}</strong><br>
        harga : Rp. 2000
    @elseif($b == 'jus')
        Minuman : <strong>{{$b}}</strong><br>
        harga : Rp. 11000
    @else
        Minuman :  <strong>{{$b}}</strong><br>
    <hr>
    @endif
    @if($c == null)
        <strong>{{$c}}</strong>
    @elseif($c == 'kecil')
        Cemilan : <strong>{{$c}}</strong><br>
        harga : Rp. 4000
    @elseif($c == 'sedang')
        Cemilan : <strong>{{$c}}</strong><br>
        harga : Rp. 5000
    @elseif($c == 'besar')
        Cemilan : <strong>{{$c}}</strong><br>
        harga : Rp. 10000
    @else
        Cemilan :  <strong>{{$c}}</strong><br>
    <hr>
    @endif
    </fieldset>
</body>
</html>