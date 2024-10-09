<?php
$input = $_POST['input'];
$email = $_POST['email'];
$input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "Email valid <br>";
} else {
    echo "Email tidak valid <br>";
}
echo $input;
?>