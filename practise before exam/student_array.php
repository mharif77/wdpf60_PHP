<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $student = [
        "Arif" => 60,
        "noyon" => 70,
        "kalam" => 40,
        "Akash" => 80,
        "Antor" => 60
    ];
    echo "<pre>";
    print_r($student);
    echo "<br>";
    echo "<table>";
    echo "<tr><th>Name</th><th>Mark</th></tr>";

    foreach ($student as $name => $mark) {
        echo "<tr><td>$name</td><td>$mark</td></tr>";
    }
    echo "</table>";
    $max = max($student);
    $student = array_search($max, $student);
    echo "<br>";

    echo "$student get Maximum Marks: $max";
    ?>
</body>

</html>