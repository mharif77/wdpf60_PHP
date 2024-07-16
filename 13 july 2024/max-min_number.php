<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php
    if (isset($_POST['submit'])) {
        $numbers = $_POST["numbers"];
        $numArray = explode(",", $numbers);
        //print_r($numArray);
        $max = $numArray[0];
        $min = $numArray[0];
        for ($i = 0; $i < count($numArray); $i++) {
            if ($numArray[$i] > $max) {
                $max = $numArray[$i];
            }
            if ($numArray[$i] < $min) {
                $max = $numArray[$i];
            }
        }
        echo "Among these numbers $numbers<br>";
        echo "maximum number is: $max" . "<br>minimum number : $min";


    }
    ?>
    <form action="" method="post">
        <input type="text" name="numbers"><br>
        <input type="submit" name="submit" value="SUBMIT">
    </form>

</body>

</html>