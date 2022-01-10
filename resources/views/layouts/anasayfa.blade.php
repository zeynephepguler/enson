@extends('layouts.anasayfaduzen')
@section('content')
<body>
    <link rel="stylesheet" href="{{ asset('css/a.css') }}" type="text/css">
<div class="but">
    <button type="button" name="button" class="button" onclick="location='ogrencigiris'"> Öğrenci Giriş  </button><br></br>
  <button type="button" name="button" class="button" onclick="location='admingiris'">  Admin Giriş </button><br></br>
  <button type="button" name="button" class="button" onclick="location='kayitol'">     Kayıt Ol     </button>

</body>
</div>
@stop
