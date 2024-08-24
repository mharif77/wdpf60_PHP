<?php $db = new mysqli("localhost", "root", "", "evidence"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>answer to the question no : 3</h3>
    <?php

    $sql = 'SELECT * FROM product_above_10000_price';
    $data = $db->query($sql);

    ?>
    <table border="2">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>price</th>
            <th>manufacture_id</th>

        </tr>
        <?php

        while ($row = $data->fetch_assoc()) { ?>

            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['price'] ?></td>
                <td><?php echo $row['manufacture_id'] ?></td>
            </tr>
        <?php } ?>
    </table>

</body>

</html>