@extends('layouts.anasayfaduzen')
@section('content')
<body>
    <link rel="stylesheet" href="{{ asset('css/a.css') }}" type="text/css">

    <div class="div1" >
    <ul ><left>
      <li><a href="/kayitol">Kayıt Ol</a></li>
      <li><a href="/ogrencigiris">Giriş Yap</a></li>
      <li><a href="/sifremiunuttum">Şifremi Unuttum</a></li>
    </ul>
    </div>

<form action="{{ route('kayitkontrol') }}" method="post">
            @if(Session::get('fail'))
               <div class="alert alert-danger">
                  {{ Session::get('fail') }}
               </div>
            @endif

           @csrf
              <div class="form-group">
                 <br>
                 <input type="text" class="form-control" name="no" placeholder="Numaranızı Giriniz" value="{{ old('no') }}">
                 <span class="text-danger">@error('no'){{ $message }} @enderror</span>
              </div>
              <div class="form-group">
                 <input type="password" class="form-control" name="sifre" placeholder="Şifrenizi Giriniz">
                 <span class="text-danger">@error('sifre'){{ $message }} @enderror</span>
              </div><br>
              <button type="submit" class="btn btn-block btn-primary">Giriş Yap</button>
              <br>
              <a href="{{ route('kayitol') }}">Önce Kayıt Olmayı Deneyin</a>
           </form>
      </div>
   </div>
</div>
@stop
