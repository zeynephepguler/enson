@extends('layouts.master')
@section('content')

  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Bilgilerim</title>
      <link rel="stylesheet" href="{{ asset('bootstrap-3.1.1/css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/a.css') }}" type="text/css">
  </head>
  <body>
      <div class="container">
           <div class="row">
              <div class="col-md-6 col-md-offset-3">
                     <h4>Kişisel Bilgiler</h4><hr>
                     <img src="uploads/ogrenci/{{ $LoggedUserInfo['image'] }}" width="200px">
                     <table class="table table-hover">
                       <tr><td class="tab">Numara:</td> <td class="tab2">{{ $LoggedUserInfo['no'] }}</td></tr>
                       <tr><td class="tab">İsim:</td> <td class="tab2">{{ $LoggedUserInfo['ad'] }}</td></tr>
                       <tr><td class="tab">Soyisim:</td> <td class="tab2">{{ $LoggedUserInfo['soyad'] }}</td></tr>
                       <tr><td class="tab">Tc:</td> <td class="tab2">{{ $LoggedUserInfo['tc'] }}</td></tr>
                       <tr><td class="tab">Doğum Tarihi:</td> <td class="tab2">{{ $LoggedUserInfo['tarih'] }}</td> </tr>
                       <tr><td class="tab">Telefon:</td> <td class="tab2">{{ $LoggedUserInfo['telefon'] }}</td></tr>
                       <tr><td class="tab">E-mail:</td> <td class="tab2">{{ $LoggedUserInfo['email'] }} </td> </tr>
                       <tr><td class="tab">Sınıf:</td> <td class="tab2">{{ $LoggedUserInfo['sinifsec'] }} </td> </tr>
                       <tr><td class="tab">Adres:</td> <td class="tab2">{{ $LoggedUserInfo['adres'] }}</td></tr>
                       <tr><td><a href="{{ route('cıkıs') }}">Logout</a></td> <td> </td></tr>
                     </table>
              </div>
           </div>
      </div>
  </body>
  </html>

@stop
