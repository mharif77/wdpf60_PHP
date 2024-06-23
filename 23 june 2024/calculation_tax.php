<?php 
function calculationtax($price, $tax){
    $total = $price + $price * $tax;
    return $total;
}
echo calculationtax(10,0.3);
?>

