@extends('layouts.admintema')
@section('content')
<body>
    <link rel="stylesheet" href="{{ asset('css/sec.css') }}" type="text/css">
<br>
<div>
<input type="button" class="bsvr renk" onclick="location='adminbasvurucap'" value="Çap Başvurusu">
<input type="button" class="bsvr renk" onclick="location='adminbasvuruytg'" value="Yatay Geçiş Başvurusu">
<input type="button" class="bsvr renk" onclick="location='adminbasvurudgs'" value="Dikey Geçiş Başvurusu">
<input type="button" class="bsvr renk" onclick="location='adminbasvuruintibak'" value="İntibak Başvurusu">
<input type="button" class="bsvr renk" onclick="location='adminbasvuruyazokulu'" value="Yaz Okulu Başvurusu">
</div>
<table border="1">
  <tr>
      <td>ogrencino</td>
      <td>dilekce</td>
      <td>Başvuru Durumu</td>
      <td>Onayla</td>
      <td>Reddet</td>
  </tr>
  @forelse($bilgiler as $key => $item)
@foreach ($basvurus as $basvuru)

  <tr>
    <td>{{$basvuru['ogrencino']}}</td>
    <td><a href="uploads/dilekce/{{$basvuru['dilekce']}}">indir</a></td>
    <td>{{$item['basvurudurumu']}}</td>
    <td><a href="{{url('onaylandi/'.$key)}}"><button type="submit" class="btn btn-block btn-primary" name="button" >Onayla</button></a></td>
    <td><a href="{{url('reddedildi/'.$key)}}"><button type="submit" class="btn btn-block btn-primary" name="button" >Reddet</button></a></td>

  </tr>
@empty

@endforelse
@endforeach
</table>

@stop
