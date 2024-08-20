<?php require_once("dbconfig.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>all products</title>
</head>

<body>
    <h3>product list</h3>
    <?php
    $sql = "SELECT * FROM  products";
    $data = $db->query($sql); ?>

    <table border="2">
        <tr>
            <th>id</th>
            <th>product</th>
            <th>details</th>
            <th>price</th>
            <th>quantity</th>
            <th>Action</th>
        </tr>
        <?php

        while ($row = $data->fetch_assoc()) { ?>

            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['product_name'] ?></td>
                <td><?php echo $row['product_details'] ?></td>
                <td><?php echo $row['product_price'] ?></td>
                <td><?php echo $row['product_quantity'] ?></td>
                <td><a onclick="return confirm('Are you sure to delete')"
                        href="product_delete.php?id=<?php echo $row['id'] ?>"><img src="bin.jpg" alt="" width="25"></a></td>
            </tr>

            <?php
        }
        // echo "<pre>";
        // print_r($row);
        ?>
    </table>
    <br><br>
    <a href="product_entry.php">New Product</a>
</body>

</html>