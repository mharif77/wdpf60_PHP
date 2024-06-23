<?php 
$data = file("user.txt");
//echo "<pre>";
//print_r($data);
echo "<table border = '1' >";
echo "<tr><th>name</th><th>profession</th><th>colour</th></tr>";
foreach($data as $item) {
    $line = explode("|",$item);
    list($name,$prof,$color)=$line;
    echo "<tr><th>$name</th><th>$prof</th><th>$color</th></tr>";
    //echo "<pre>";
    //print_r($line);
    //print  $item . "<br>" ;
    }
echo "</table>";
?>