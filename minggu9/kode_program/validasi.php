<?php
session_start();

// Cek apakah form disubmit
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        $error = "Harus terisi";
    } elseif (strlen($password) < 5) {
        $error = "Password minimal 5 karakter";
    // } elseif (!preg_match('/[a-z]/', $password) || !preg_match('/[A-Z]/', $password)) {
    //     $error = "Password harus terdiri dari huruf besar dan kecil";
    } else {
        $_SESSION['username'] = $username;
        header('Location: home.php');
        exit;
    }

    $_SESSION['error'] = $error;
    header('Location: page_login.php');
    exit;
}
?>
