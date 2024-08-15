<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 style='color:green'>Students Result</h1>
    <?php
    $results = ["arif" => 50, "mizan" => 42, "sohag" => 49, "noyon" => 45, "kajol" => 55];
    ?>
    <table border="1">
        <?php
        foreach ($results as $name => $score) { ?>
            <tr>
                <td><?php echo $name; ?></td>
                <td><?php echo $score; ?></td>

            </tr>
        <?php } ?>

        <tr>
            <td colspan="2">
                <?php $maxcore = max($results);
                $student = array_search($maxcore, $results);
                echo "<h4 style= 'color:lightcoral'>maximum score $maxcore obtained by  $student</h4>";
                ?>
            </td>
        </tr>
    </table>
</body>

</html>