<?php $mysqli = new mysqli("localhost","root","","wdpf601");  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>answer to the Question no : 02</h1>
    <h3>manufacturer</h3>
    <?php  
    if(isset($_POST['submit'])){
        extract($_POST);
        if($mysqli->query("CALL add_manufacturer('$name','$address','$contact')")){
            echo "successfully added";
        }
        else{
            echo "failed";
        }
    }
    ?>
    <form action="" method="post">
        name : <br>
        <input type="text" name="name" placeholder="Enter manufacturer"><br><br>
        address : <br>
        <textarea name="address" id="" placeholder="Enter address"></textarea><br>
        contact_no : <br>
        <input type="text" name="contact" placeholder="Enter contact"> <br>
        <input type="submit" name="submit" value="SUBMIT">
    </form>
    <br>
    <a href="manufacturer.php">manufacturer_list</a>
    
</body>
</html>