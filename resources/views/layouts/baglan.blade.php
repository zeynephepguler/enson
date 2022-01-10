@php
$connect=mysql_connect("kobs","root","");

//Bağlantı yapıldıktan sonra localhost içerisinde seçilecek veritabanı belirtiliyor..
mysql_select_db("kullanis");

// Türkçe karakter sorunlarına karşı çözüm satırları..
mysql_query("SET NAMES 'latin5'");
mysql_query("SET CHARACTER SET latin5");
mysql_query("SET COLLATION_CONNECTION = 'latin5_turkish_ci'");
@endphp
