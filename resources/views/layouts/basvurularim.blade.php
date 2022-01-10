@extends('layouts.master')
@section('content')
  <div class="">
try{
</table>

<table border="1">
<tr>
    <td>ogrencino</td>
    <td>Başvuru Durumu</td>
</tr>
@forelse($bilgiler as $key => $item)
@foreach ($basvurus as $basvuru)
<tr>
  <td>{{$basvuru['ogrencino']}}</td>
  <td>{{$item['basvurudurumu']}}</td>
</tr>
@empty

@endforelse
@endforeach
</table>


}catch{
  
}

</div>
@stop
