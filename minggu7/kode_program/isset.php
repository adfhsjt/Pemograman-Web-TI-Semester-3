<?php
$data = array("nama" => "Jane","usia" => "25");
if(isset($data["nama"])){
    echo "Nama : " . $data["nama"] . "<br>";
    echo "Usia : " . $data["usia"] . "<br>";
} else {
    echo "Variabel 'nama' tidak ditemukan dalam array.";
}
?>