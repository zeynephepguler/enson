@extends('layouts.master')
@section('content')
<body>
    <link rel="stylesheet" href="{{ asset('css/sec.css') }}" type="text/css">
<br>
<div>
<input type="button" class="bsvr renk" onclick="location='basvurucap'" value="Çap Başvurusu">
<input type="button" class="bsvr renk" onclick="location='basvuruytg'" value="Yatay Geçiş Başvurusu">
<input type="button" class="bsvr renk" onclick="location='basvurudgs'" value="Dikey Geçiş Başvurusu">
<input type="button" class="bsvr renk" onclick="location='basvuruintibak'" value="İntibak Başvurusu">
<input type="button" class="bsvr renk" onclick="location='basvuruyazokulu'" value="Yaz Okulu Başvurusu">
</div>

<div class="d2">
<label> Fakülte: </label>
<input name="ad" type="text" size="50px"> <br>
<label>  Bölüm : </label>
<input name="ad" type="text" size="50px"> <br>
<label> Numara:</label>
<input name="ad" type="text" size="50px"> <br> <br>
<label> Ekler: </label> <label>Trankript  Başarı Sıralaması </label>
</div>
<div >
  <form action="{{ route('capkontrol') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="basvuru turu" value="cap">

    <input type="hidden" name="cap" value="başvuru talebi var">

    <input type="hidden" name="ogrencino" value="{{$LoggedUserInfo['no']}}"><br>
    <a href="belgeler/CAP.docx"> Belgeyi İndir</a><br>
    <input type="file" name="dilekce" required class="course form-control"> <br><br>

    <button type="submit" class="btn btn-block btn-primary" onclick="location='basvurularim'" name="button" >Başvuru Yap</button>

  </form>
</div>
@stop
@php

@endphp
