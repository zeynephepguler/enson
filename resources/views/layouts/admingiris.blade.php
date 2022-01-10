@extends('layouts.anasayfaduzen')
@section('content')
<body>
    <link rel="stylesheet" href="{{ asset('css/a.css') }}" type="text/css">
    <div class="but">
      <input type="text" size="50px" placeholder="Admin ID"> <br>
      <input type="text" size="50px" placeholder="Şifre"><br><br>


    <button type="button" name="button" class="button" onclick="location='admin'"> Giriş Yapınız </button>

</body>
</div>
@stop
