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

@stop
