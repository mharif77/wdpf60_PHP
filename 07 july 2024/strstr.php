<?php
$url = "sales@example.com";
echo ltrim(strstr($url, "@"),"@");
?>
<hr>

<?php
$url = "sales@example.com";
$withdot =  strstr($url, ".");
$withoutdot = ltrim($withdot,".");
echo $withoutdot;
?>