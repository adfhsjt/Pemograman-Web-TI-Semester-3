<?php
$lantai = isset($_POST['lantai']) ? (int)$_POST['lantai'] : 1;
$tipe = isset($_POST['tipe']) ? $_POST['tipe'] : '';
$jumlah_hari = isset($_POST['jumlah_hari']) ? (int)$_POST['jumlah_hari'] : 1;
$diskon = isset($_POST['diskon']) ? $_POST['diskon'] : 'tidak_ada';

if ($jumlah_hari <= 0) {
    echo "Jumlah hari tidak valid";
    exit();
}

$harga_kamar = match ($tipe) {
    'standard' => 300000,
    'superior' => 400000,
    'deluxe' => 500000,
    default => 0
};

if ($harga_kamar == 0) {
    echo "Tipe kamar tidak valid";
    exit();
}

$harga_sewa = $harga_kamar * $jumlah_hari;

if ($lantai > 5) {
    $harga_sewa += 50000;
}

$diskon_rupiah = match ($diskon) {
    'member' => $harga_sewa * 0.1,
    'ulang_tahun' => 100000,
    default => 0
};

$harga_akhir = $harga_sewa - $diskon_rupiah;

echo "Total transaksi adalah Rp " . number_format($harga_sewa, 0, ',', '.') . "<br>" .
    "Harga diskon adalah Rp " . number_format($diskon_rupiah, 0, ',', '.') . "<br>" . "<br>" .
    "<span style='font-weight: bold; color: red'; >Yang harus dibayar adalah Rp " . number_format($harga_akhir, 0, ',', '.') . "</span>";

