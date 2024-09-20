<?php
$nilai = [64, 70, 75, 78, 79, 85, 88, 90, 92, 96];

$n = count($nilai);
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n - 1 - $i; $j++) {
        if ($nilai[$j] > $nilai[$j + 1]) {
            // Tukar nilai
            $temp = $nilai[$j];
            $nilai[$j] = $nilai[$j + 1];
            $nilai[$j + 1] = $temp;
        }
    }
}

$nilaiTersisa = [];
for ($i = 2; $i < $n - 2; $i++) {
    $nilaiTersisa[] = $nilai[$i];
}

$jumlah = 0;
$jumlahNilai = 0;

foreach ($nilaiTersisa as $value) {
    $jumlah += $value;
    $jumlahNilai++;
}

$rataRata = $jumlah / $jumlahNilai;

echo "Rata-rata setelah mengabaikan 2 nilai terbesar dan 2 nilai terkecil adalah: " . $rataRata;
?>
