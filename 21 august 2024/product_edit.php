<?php require_once("dbconfig.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Product Edit</h3>

    <?php

    $sql = "SELECT * FROM catagories";
    $catag = $db->query($sql);


    $id = $_REQUEST['id'];


    // print_r($row);
    

    if (isset($_POST['update'])) {
        extract($_POST);
        $sql = "UPDATE products SET product_name = '$name', product_details = '$details', product_price = '$price',product_quantity = '$quantity ', product_catagory = '$catagory' WHERE id = '$id'";



        $result = $db->query($sql);

        echo $db->affected_rows;

        if ($db->error) {
            echo "Failed";
        } else {
            echo "Successfully";
        }

    }
    $sql = "SELECT * FROM products WHERE id = '$id'";
    $data = $db->query($sql);
    $row = $data->fetch_object();
    ?>

    <legend>Product Entry</legend>
    <form action="" method="post">
        product name : <br>
        <input type="text" name="name" placeholder="Enter product name"
            value="<?php echo $row->product_name; ?>"><br><br>
        product details : <br>
        <textarea name="details" id=""
            placeholder="Enter your product details"><?php echo $row->product_details; ?></textarea><br><br>
        product price : <br>
        <input type="number" name="price" placeholder="Enter product price"
            value="<?php echo $row->product_price; ?>"><br><br>
        product quantity : <br>
        <input type="number" name="quantity" placeholder="Enter product quantity"
            value="<?php echo $row->product_quantity; ?>"><br><br>
        <select name="catagory" id="">
            <option value="">select one</option>
            <?php
            while ($cat = $catag->fetch_assoc()) { ?>
                <option value="<?php echo $cat['cat_id'] ?>" <?php echo $row->product_catagory == $cat['cat_id'] ? "selected" : " "; ?>><?php echo $cat['name'] ?></option>

                <?php

            }
            ?>

        </select><br>
        <input type="submit" name="update" value="UPDATE">
        <input type="hidden" name="id" value="<?php echo $id ?>">

    </form><br><br>

    <a href="all_products.php">product list</a>





</body>

</html>