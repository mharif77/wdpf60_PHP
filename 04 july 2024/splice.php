<?php  
$states = array("Alabama", "Alaska", "Arizona", "Arkansas",
"California", "Colorado", "Connecticut");

//$subset = array_slice($states, 2, -2);
$subset = array_slice($states, 2, 4);
//$subset = array_slice($states, 4, -2);
print_r($subset);