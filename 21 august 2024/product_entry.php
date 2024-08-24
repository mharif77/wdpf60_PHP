<?php require_once("dbconfig.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Product Entry</h3>

    <?php

    $sql = "SELECT * FROM catagories";
    $catag = $db->query($sql);


    if (isset($_POST['submit'])) {
        extract($_POST);
        $sql = "INSERT INTO products (id,product_name,product_details,product_price,product_quantity,product_catagory) 
        VALUES (NULL,'$name','$details','$price','$quantity','$catagory')";


        $result = $db->query($sql);

        // echo $db->affected_rows;

        if ($db->error) {
            echo " Failed";
        } else {
            echo "Successfully";
        }

    }
    ?>


    <fieldset>
        <legend>Product Entry</legend>

        <form action="" method="post">
            product name : <br>
            <input type="text" name="name" placeholder="Enter product name"><br><br>
            product details : <br>
            <textarea name="details" id="" placeholder="Enter your product details"></textarea><br><br>
            product price : <br>
            <input type="number" name="price" placeholder="Enter product price"><br><br>
            product quantity : <br>
            <input type="number" name="quantity" placeholder="Enter product quantity"><br><br>
            catagory : <br>
            <select name="catagory" id="">
                <option value="">select one</option>
                <?php
                while ($row = $catag->fetch_assoc()) { ?>
                    <option value='<?php echo $row['id'] ?>'><?php echo $row['name'] ?></option>

                    <?php

                }
                ?>

            </select><br>
            <input type="submit" name="submit" value="SUBMIT">

        </form><br><br>
    </fieldset>

    <a href="all_products.php">product list</a>





</body>

</html>