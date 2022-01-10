<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kontrol;

class KontrolController extends Controller
{
    public function kontrol(Request $numara, $sifresi)
    {


      @if ($numara==$no&$sifresi==$sifre) {

          return redirect('ogrencianasayfa');
      }@else {

        echo 'kullanıcı bulunamadı';
      }
    }
}
