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
        <legend>belanja</legend>
        @foreach ($belanja as $belanja)
        <hr>
        Nama Pembeli : {{ $belanja['name'] }} <br>
        @php $total = 0 @endphp
        @foreach ($belanja['beli'] as $item)
        <li>{{$item['produk']}} : Rp.{{$item['harga']}}</li>
        @php $total += $item['harga'] @endphp
      
        @endforeach
        Total belanja : {{ $total }} <br>
        @if($total >= 250000 && $total < 500000)
        @php $cashback = $total * 0.05 @endphp
        Cashback : {{ $cashback }} <br>
        Total Harga : {{$total-$cashback}} 
        @elseif($total >=500000)
        @php $cashback =$total * 0.1 @endphp
        Cashback : {{ $cashback }} <br>
        Total Harga : {{$total-$cashback}} 
        @else
        @endif
        @endforeach
    </fieldset>
</body>
</html>