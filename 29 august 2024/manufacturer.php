<?php  $mysqli = new mysqli("localhost","root","","manu");  ?>
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
        $delete = $mysqli->query($db);

        if($delete){
            echo "deleted";
        }
        else{
            echo "Failed";
        }

    }
    $sql = "SELECT * FROM manufacturer";
    $ten = $mysqli->query($sql);
    
    ?>
    <form action="" method="post">
        <select name="manu" id="">
            <?php while($row = $ten->fetch_assoc()){ ?>

                <option value="<?php  echo $row['id'];?>"><?php  echo $row['id'];?><?php  echo $row['name'];?></option>
                
                
                <?php   }  ?>


        </select>
        <input type="submit" name="submit" value="DELETE">
    </form>
    <a href="product.php">product_list</a>
</body>
</html>