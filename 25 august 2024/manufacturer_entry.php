<?php $mysqli = new mysqli("localhost", "root", "", "evidence") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>answer to the question no : 2

    </h1>
    <h3>new manufacturer</h3>
    <?php
    if (isset($_POST['submit'])) {
        extract($_POST);
        $mysqli->query("CALL add_manufacturer('$name', '$address', '$contact')");
    }
    ?>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Enter manufacturer name"><br>
        <textarea name="address" placeholder="Enter address"></textarea><br>
        <input type="text" name="contact"><br>
        <input type="submit" name="submit" value="SUBMIT">
    </form>
</body>

</html>