<?php $mysqli = new mysqli("localhost","root","","evidence")  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>answer to the question no : 4</h1>
    <h3>all products (product_above_6000_price)</h3>
    <?php 
     $data = $mysqli->query("SELECT * FROM  product_above_6000_price ");
    
    
    ?>
    <table border="2">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>price</th>
            
        </tr>
        <?php 
        while($row = $data->fetch_assoc()){ ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['price']; ?></td>
        </tr>
<?php
        
        }
        
        ?>
    </table>
    <br>
    <a href="manufacturers.php">all manufacturers</a>
</body>
</html>