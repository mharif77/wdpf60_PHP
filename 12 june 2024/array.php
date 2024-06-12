<?php
//numeric indexed array
$rivers = array("padma","meghna","jamuna","surma");
echo "<pre>";
print_r($rivers);

$rivers[10] = "tista";
$rivers[11] = "gomit";
print_r($rivers);
echo "<hr>";

//$capitals = ["bangladesh"=>"dhaka", "England"=>"london"];
$capitals  = array("bangladesh"=>"dhaka", "England"=>"london");

$capitals["bhutan"] = "thimpu";

print_r($capitals);


//associative array