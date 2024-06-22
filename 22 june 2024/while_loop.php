<?php
$count = 1;
while ($count <51) {
printf($count."<br>");
$count++;
}
?>

<hr>
<?php 
$x = 1;

while($x<51){
    echo $x;
    echo ",";
    $x++;
}
?>


<hr>
<?php 
$x = 1;
$output = "";
while($x<51){
    $output .= $x . ",";
    
    $x++;
}
echo $output;
?>

