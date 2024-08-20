<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Result Sheet</title>
    <style>
        td,
        th {
            border: 2px solid;

        }

        table {
            border-collapse: collapse;
        }
    </style>
</head>

<body>

</body>

</html>

<?php

$students = [
    "Arif" => 80,
    "Noman" => 60,
    "Sakib" => 30,
    "Rabbi" => 50,
    "Jibon" => 70
];

echo "<pre>";
print_r($students);
echo "<br>";

echo "<table>";
echo "<tr><th>Name</th><th>Mark</th></tr>";

foreach ($students as $name => $mark) {
    echo "<tr><td>$name</td><td>$mark</td></tr>";
}

echo "</table>";
$max = max($students);
$students = array_search($max, $students);
echo "<br>";
echo "$students get Maximum Marks: $max";


?>