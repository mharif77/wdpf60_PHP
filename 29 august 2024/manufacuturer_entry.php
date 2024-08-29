<?php  $mysqli = new mysqli("localhost","root","","manu");  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>answer to the Question no : 2</h1>
    <?php   
    
    if(isset($_POST['submit'])){
        extract($_POST);
        if($mysqli->query("CALL add_manufacturer('$name','$address','$contact')")){
            
            echo "Successfully added";
        }
        else{
            echo "Failed";
        }
    }
    ?>
    <form action="" method="post">
        Name : 
        <input type="text" name="name" placeholder="Enter manufacturer name"><br><br>
        Address : 
        <textarea name="address" id=""></textarea><br><br>
        contact :
        <input type="text" name="contact"><br>
        <input type="submit" name="submit" value="ADD">
    </form>
    <a href="manufacturer.php">manufacturer_list</a>
</body>
</html>