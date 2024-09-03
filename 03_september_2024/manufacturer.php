<?php $mysqli = new mysqli("localhost","root","","wdpf601");  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>answer to the question no : 3</h1>   

<h3>manufacturer</h3>
<?php 
if(isset($_POST['submit'])){
    $ten = $_POST['manu'];
    $db = "DELETE FROM manufacturer WHERE id = '$ten'";
    $one = $mysqli->query($db);
    if($one){
        echo "deleted";
    }
    else{
        echo "failed";
    }
}
$sql = "SELECT * FROM manufacturer";
$one = $mysqli->query($sql);
?>
<form action="" method="post">
    <select name="manu" id="">
        <?php  while($row = $one->fetch_assoc()){  ?>
            <option value="<?php echo $row['id']; ?>"><?php echo $row['id'] ?> <?php echo $row['name'] ?></option>
            <?php 
         } 
         ?>
    </select>
    <input type="submit" name="submit" value="DELETE">
</form>
<br>

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
<a href="product.php">product_list</a>

</body>
</html>