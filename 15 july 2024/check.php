<?php
$email = $_POST['email'];
echo "<br>";
echo $_POST['password'];
echo "<br>";

session_start();
//$_SESSION['email'] = $email;
print_r($_SESSION);
?>