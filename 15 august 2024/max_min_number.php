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
        $number = $_POST['number'];
        $numArray = explode(",", $number);
        $max = $numArray[0];
        $min = $numArray[0];

        for ($i = 1; $i < count($numArray); $i++) {
            if ($numArray[$i] > $max) {
                $max = $numArray[$i];
            }
            if ($numArray[$i] < $min) {
                $min = $numArray[$i];
            }

        }
        echo "among this number: $number<br>";
        echo "maximum number are : $max" . "<br>minimum number are : $min";
    }
    ?>
    <form action="" method="post">
        <input type="text" name="number" placeholder="enter number">
        <input type="submit" name="submit" value="Check">
    </form>
</body>

</html>