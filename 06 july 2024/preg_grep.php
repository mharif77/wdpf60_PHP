<?php
$foods = array("pasta", "steak", "fish", "potatoes","laddu");
$food = preg_grep("/^l/", $foods);
print_r($food);
?>