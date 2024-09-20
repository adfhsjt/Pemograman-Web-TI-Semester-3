<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Penjumlahan : $hasilTambah";
echo "<br>";
echo "Pengurangan : $hasilKurang";
echo "<br>";
echo "Perkalian : $hasilKali";
echo "<br>";
echo "Bagi : $hasilBagi";
echo "<br>";
echo "Sisa Bagi : $sisaBagi";
echo "<br>";
echo "Pangkat : $pangkat";
echo "<br>";

var_dump($pangkat);
echo "<br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Sama : $hasilSama";
echo "<br>";
echo "Tidak Sama : $hasilTidakSama";
echo "<br>";
echo "Lebih Kecil : $hasilLebihKecil";
echo "<br>";
echo "Lebih Besar : $hasilLebihBesar";
echo "<br>";
echo "Lebih Kecil Sama : $hasilLebihKecilSama";
echo "<br>";
echo "Lebih Besar Sama : $hasilLebihBesarSama";
echo "<br>";

var_dump($hasilSama);
echo "<br>";
var_dump($hasilTidakSama);
echo "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "And : $hasilAnd";
echo "<br>";
echo "Or : $hasilOr";
echo "<br>";
echo "Not A : $hasilNotA";
echo "<br>";
echo "Not B : $hasilNotB";
echo "<br>";

var_dump($hasilAnd);
echo "<br>";
var_dump($hasilNotB);
echo "<br>";

$a += $b;
echo"Hasil += var a : {$a} <br>";
$a -= $b;
echo"Hasil -= var a : {$a} <br>";
$a *= $b;
echo"Hasil *= var a : {$a} <br>";
$a /= $b;
echo"Hasil /= var a : {$a} <br>";
$a %= $b;
echo"Hasil %= var a : {$a} <br>";

echo"Hasil += var a : {$a} <br>";
echo"Hasil -= var a : {$a} <br>";
echo"Hasil -= var a : {$a} <br>";
echo"Hasil *= var a : {$a} <br>";
echo"Hasil /= var a : {$a} <br>";
echo"Hasil %= var a : {$a} <br>";

var_dump($a);
echo"<br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Identik : $hasilIdentik";
echo "<br>";
echo "Tidak Identik : $hasilTidakIdentik";
echo "<br>";

var_dump($hasilIdentik);
echo "<br>";
var_dump($hasilTidakIdentik);
echo "<br>";


?>