<?php 
$fruits = array ("apple","orange", "banana", "grape");

echo "next:" . next($fruits);
echo "<br>";
echo "prev:" .  prev($fruits);
echo "<br>";
echo "end:" . end($fruits);
echo "<br>";
echo "current:" .  current($fruits);
echo "<br>";
echo "reset:" . reset($fruits);
echo "<br>";

print_r($fruits);
