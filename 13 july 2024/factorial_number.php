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

       //  print_r($_post);
        $number= $_POST['number']; 
        //$num = $_post['number'];
        echo myfunction($number);

    }
        function myfunction($num){

           $fact = 1;
           for($i= $num; $i>1; $i--){
            $fact = $fact * $i;
           }
           return $num . " the factorial number is " . $fact;
    }
        ?>
    <form action="" method="post">
        <input type="text" name="number">
        <input type="submit" name = "submit" value="check">
    </form>
</body>
</html>