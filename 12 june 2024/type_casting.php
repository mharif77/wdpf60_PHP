<?php
$x = 50;
$output = (float)$x;
var_dump($output);

echo gettype($output);
echo "<br>";
echo "<hr>";


$number = 50.45;
$output = (int) $number;
echo $output;

echo "<hr>";

$name = (bool) "arif";
echo $name;


$score = 1114;
$scoreboard = (array) $score;
echo $scoreboard[0]; // Outputs 1114
var_dump($scoreboard);

echo "<hr>";

$model = "Toyota";
$obj = (object) $model;
print_r($obj);

print $obj->scalar; // returns "Toyota


