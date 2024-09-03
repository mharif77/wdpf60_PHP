<?php $mysqli = new mysqli("localhost","root","","wdpf601");  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>answer to the Question no : 4 </h3>
<h3>product above 5000</h3>
<?php
$data = $mysqli->query("SELECT * FROM product_price_above_10000"); 
?>
<table border="2">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>price</th>
        <th>manufacture_id</th>
    </tr>
    <?php 
    while($row= $data->fetch_assoc()){   ?>
        <tr>
        <td><?php echo $row ['id'] ?></td>
        <td><?php echo $row ['name'] ?></td>
        <td><?php echo $row ['price'] ?></td>
        <td><?php echo $row ['manufacture_id'] ?></td>
        </tr>
        <?php
    }  
    ?>
</table>
<br>
<a href="manufacturer.php">all manufacturer</a>
</body>
</html>