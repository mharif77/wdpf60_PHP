<?php $mysqli = new mysqli("localhost","root","","evidence")  ?>
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
    $id = $_POST['company'];
    $mysqli->query("DELETE FROM manufacturer WHERE id = '$id'");
    if($mysqli->affected_rows){
        echo "<h1>successfully Deleted</h1>";
    }

}
?>
    <h1>answer to the question no : 3</h1>
    <?php  
   $result =  $mysqli->query("SELECT * FROM  manufacturer");
    
    ?>
    <h3>all manufacturers</h3>
    <form action="" method="post">
        <select name="company" id="">
            <option value="">select one</option>
            <?php  
             while($row = $result->fetch_object()){ ?>
             <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
             <?php
             }
            ?>
        </select>
        <input type="submit" name="submit" value="DELETE">
    </form>
    <br>
    <a href="products.php">all products</a>
</body>
</html>