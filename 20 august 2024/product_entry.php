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
    if (isset($_POST['submit'])) {
        extract($_POST);
        $sql = "INSERT INTO products (id,product_name,product_details,product_price,product_quantity) 
        VALUES (NULL,'$name','$details','$price','$quantity')";

        require_once("dbconfig.php");
        $result = $db->query($sql);

        echo $db->affected_rows;

        if ($db->affected_rows) {
            echo "Successfully Added";
        } else {
            echo "Failed";
        }

    }
    ?>

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
        <input type="submit" name="submit" value="SUBMIT">

    </form><br><br>

    <a href="all_products.php">product list</a>





</body>

</html>