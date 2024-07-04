<?php 

$states = array("dhaka", "khulna", "rajshahi", "cumilla");
echo "<pre>";

print_r($states);

asort($states);
echo  "<hr>";
print_r($states);


arsort($states);
echo  "<hr>";
print_r($states);

?>
