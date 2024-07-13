<?php
//full syntax
echo "Hello World<br>";

?>

<?
//open short tag
echo "Hello World With short tag<br>";
?>

<?="Hello World With short circuit";
// short circuit
?>
<hr>

<?php    
$text = "this is\tsome text that\nwe might like to parse.";    
print_r(preg_split("/[\n\t]/",$text));    
?>
