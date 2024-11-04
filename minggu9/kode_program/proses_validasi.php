<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        echo 'Harus terisi';
    } elseif (strlen($password) < 5) {
        echo 'Password minimal 5 karakter';
    } elseif (!preg_match("/[a-z]/", $password) || !preg_match("/[0-9]/", $password)) {
        echo 'Password harus terdiri dari huruf besar, kecil, dan';
    } else {
        $_SESSION['username'] = $username;
        echo 'Login berhasil, redirecting...';
    }
}
?>

