<?php
$kursiRestoran = 45;
$kursiDitempati = 28;
$kursiKosong = $kursiRestoran - $kursiDitempati;
$persentaseKursiKosong = ($kursiKosong / $kursiRestoran) * 100;

echo"Jumlah Kursi Restoran : {$kursiRestoran} <br>";
echo"Jumlah Kursi Ditempati : {$kursiDitempati} <br>";
echo"Jumlah Kursi Kosong : {$kursiKosong} <br>";
echo "Persentase Kursi Kosong : {$persentaseKursiKosong}%<br>";

?>