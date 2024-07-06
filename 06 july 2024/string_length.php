<?php
$pswd = "secretpswd";
if (strlen($pswd) < 10)
echo "Password is too short!";
else
echo "Password is valid!";
?>

<?php 
$str = "today is saturday";
echo strlen($str);