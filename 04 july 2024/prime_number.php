<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_post['submit'])){

       //  print_r($_post);
        echo $_post['number']; 
        //$num = $_post['number'];
        echo  myfunction ($num);

    }
        function myfunction ($num){

            if($num == 1){
                return $num . 'is not a prime number';
            }
            else if( $num == 2){
                return $num . 'is a prime number';
            }
            else 
            for($x = 2; $x<$num; $x++){
        if($num  %  2 == 0){
            return $num . ' is not a prime number';
        }
        
        return $num . 'is a prime number';
            }
        }






    ?>
    <form action="" method="post">
        <input type="text" name="number">
        <input type="submit" name = "submit" value="check">
    </form>
</body>
</html>
