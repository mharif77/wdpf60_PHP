<?php $mysqli = new mysqli("localhost", "root", "", "classicmodels") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h3>search products</h3>
    
    <form action="" method="get">
        <input type="text" name="term" placeholder="search here">
        <input type="submit" name="submit" value="SEARCH">
    </form>
       <?php 
       if(isset($_GET['submit'])){
        $term = $_GET['term'];
        // echo $mysqli;
         $result= $mysqli->query("SELECT ProductCode,productName,buyPrice FROM products WHERE productName LIKE '%$term%'");
         $record = $result->num_rows;

         echo "<h2>with th keword $term we have found $record number of records</h2>";
       
        }

        while($row = $result->fetch_object()){
            echo "product code:" . $row->ProductCode . "Product Name:" . $row->productName . "product price:" . $row->buyPrice . "<hr>";
        }
       
       ?>
</body>
</html>