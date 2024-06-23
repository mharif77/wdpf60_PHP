<?php 
$divisions = [
    "Dhaka" => array("population" => "11,353,140", "spot" => "ahsan manjil","food" => "hotch potch" ),
    "Rajshahi" => array("population" => "1,711,263", "spot" => "ambagan","food" => "mango"),
    "khulna" => array("population" => "1,711,263", "spot" => "sundarban","food" => "honey")
];

echo $divisions["khulna"]["population"];

echo "<pre>";

var_dump($divisions);