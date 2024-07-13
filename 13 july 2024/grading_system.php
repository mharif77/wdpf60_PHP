<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>grading system</title>
</head>
<body>
    <h1>Grading system</h1>

<?php 
if(isset($_POST['submit'])){
    $grade = $_POST["grade"];
    $grade = strtoupper($grade);
    switch($grade){
        case "A" :
            echo "Excellent" ;
            break ;
            case "B" :
                echo "Good" ;
                break ;
             default:
                    echo "fail" ;
                   
            
    }
}
    ?>
<form action="" method="post">
   <input type="text" name="grade" placeholder="enter grade letter"><br>
        <input type="submit" name="submit" placeholder="submit">
    </form>

</body>
</html>