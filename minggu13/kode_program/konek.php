<?php 
$host = "BUDAKPIDEUNG\SQLEXPRESS";

$connInfo = array("Database" => "prakwebdb", "UID" => "sa", "PWD" => "12345");
$conn = sqlsrv_connect($host, $connInfo);
if ($conn) {
    echo "Koneksi Berhasil.<br>";
} else {
    echo "Koneksi Gagal";
    die(print_r(sqlsrv_errors(), true));
}
?> 