<?php 
$fruits = array ("apple","orange", "banana", "grape");
echo "<pre>";
print_r($fruits);
$flipped = array_flip($fruits);
print_r($flipped);