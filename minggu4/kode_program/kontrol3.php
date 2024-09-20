<?php
$poin = 400; 

if ($poin > 500) {
    $hadiah_tambahan = "YA";
} else {
    $hadiah_tambahan = "TIDAK";
}

echo "Total skor pemain adalah: " . $poin . "<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? " . $hadiah_tambahan . "<br>";
?>
