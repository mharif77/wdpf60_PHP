<?php  $mysqli = new mysqli("localhost","root","","wdpf601");  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if(isset($_POST['submit'])){
        extract($_POST);
        $sql =  $mysqli->query("SELECT * FROM users WHERE email = '$user' AND password = '$pass'");
        if($sql->num_rows>0){
            echo "valid user";
        }
        else{
            echo "invalid user";
        }
    }
    ?>
    <form action="" method="post">
        user name : <br>
        <input type="text" name="user" placeholder="Enter your user name"><br><br>
        password : <br>
        <input type="text" name="pass" placeholder="Enter your password"><br><br>
        <input type="submit" name="submit" value="login"><br>
    </form>
</body>
</html>