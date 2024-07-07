<?php
$e = 'c:';

echo disk_free_space($e)/1024/1024/1024;
$f = 'f:';
echo "<hr>";
echo disk_free_space($f)/1024/1024/1024;
?>
<hr>

<?php
$e = 'e:';

$free = disk_free_space($e);
$total = disk_free_space($e);
$used = $total - $free;


echo $used/1024/1024/1024;
?>