<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        echo 'Harus terisi';
    } elseif (strlen($password) > 6) {
        echo 'Password maksimal 6 karakter';
    } elseif (!preg_match("/[a-z]/", $password) || !preg_match("/[A-Z]/", $password)) {
        echo 'Password harus terdiri dari huruf besar dan kecil';
    } else {
        $_SESSION['username'] = $username;
        echo 'Login berhasil, redirecting...';
    }
}
?>

