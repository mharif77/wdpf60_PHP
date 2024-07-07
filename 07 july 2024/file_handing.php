<?php
$fh = fopen("files/user.txt", 'r');
//print_r($fh);
//echo fgets($fh);
while (!feof($fh)){
echo fgets($fh)."<br>";
}
fclose($fh);
?>


