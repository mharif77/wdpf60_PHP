<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $results = ["arif" => 50, "mizan" => 42, "sohag" => 49, "noyon" => 45, "kajol" => 55];
    ?>
    <table border="4">
        <tr>
            <th>Student name</th>
            <th>obtained score</th>
        </tr>
        <?php
        foreach ($results as $name => $score) {
            echo "<tr>";
            echo "<td>$name</td>";
            echo "<td>$score</td>";
            echo "</tr>";

        }
        ?>

    </table>
</body>

</html>