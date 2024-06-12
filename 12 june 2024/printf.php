<?php
printf("Bar Inventory:%d bottles of tonic %s.",100,"water");
echo "<br>";

printf("%d bottles of tonic water cost $%.5f.", 100, 43.2045);
echo "<br>";
 $cost = sprintf("$%.2f", 43.2); // $cost = $43.20
echo $cost;