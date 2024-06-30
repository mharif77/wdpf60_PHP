<?php 
$fruits = array ("apple","orange", "banana", "grape");


echo count($fruits);

$locations = array("Italy", "Amsterdam", array("Boston","Des Moines"),
"Miami",array("dhaka","rajshahi","sylhet","cumilla"));
echo "<br>";
echo count($locations,1);
echo "<br>";
echo sizeof($locations);