<?php
$pswd = "abcdE";
$pswd2 = "abcde";
if (strcmp($pswd, $pswd2) != 0) {
echo "Passwords do not match!";
} else {
echo "Passwords match!";
}

echo "<hr>";



if (strcasecmp($pswd, $pswd2) != 0) {
echo "Passwords do not match!";
} else {
echo "Passwords match!";
}

?>