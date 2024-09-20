<?php
$harga_produk = 120000;

$diskon_persen = 20;

if ($harga_produk > 100000) {
    $diskon = ($diskon_persen / 100) * $harga_produk;
    $harga_setelah_diskon = $harga_produk - $diskon;
} else {
    $harga_setelah_diskon = $harga_produk; 
}

echo "Harga produk: Rp " . number_format($harga_produk, 0, ',', '.') . "<br>";
echo "Diskon: Rp " . number_format($diskon, 0, ',', '.') . "<br>";
echo "Harga setelah diskon: Rp " . number_format($harga_setelah_diskon, 0, ',', '.') . "<br>";
?>