@extends('layouts.master')
@section('content')
  <body>
      <link rel="stylesheet" href="{{ asset('css/sec.css') }}" type="text/css">
  <br>
  <div>
  <input type="button" class="bsvr renk" onclick="location='basvurularim'" value="Çap Başvurusu">
  <input type="button" class="bsvr renk" onclick="location='basvurularimyty'" value="Yatay Geçiş Başvurusu">
  <input type="button" class="bsvr renk" onclick="location='basvurularimdikey'" value="Dikey Geçiş Başvurusu">
  <input type="button" class="bsvr renk" onclick="location='basvurularimintibak'" value="İntibak Başvurusu">
  <input type="button" class="bsvr renk" onclick="location='basvurularimyaz'" value="Yaz Okulu Başvurusu">
  </div>
  <div class="">
  </table>


  </div>
  @isset($bilgilerdikey)
  <div class="">
  </table>

  <table border="1">
  <tr>
    <td>ogrencino</td>
    <td>Başvuru Durumu</td>
  </tr>
  @forelse($bilgilerdikey as $key => $item)
  @foreach ($basvurus as $basvuru)
  <tr>
  <td>{{$basvuru['ogrencino']}}</td>
  <td>{{$item['basvurudurumu']}}</td>
  </tr>
  <br>
  @empty

  @endforelse
  @endforeach
  </table>
  @endisset
@stop
