<?php
$path = 'files/users.txt';
//echo realpath($path);

$path = 'files/book.pdf';
$mb = filesize($path)/1024/1024;
echo round($mb,2) . " MB";
?>