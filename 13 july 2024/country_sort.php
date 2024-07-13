<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>country and capital where country wise sorting</h1>
    <?php
    $countries = [
        "bangladesh"=>"dhaka",
    "srilanka"=>"colombo",
    "uganda"=>"kampala",
    "chaina"=>"beijing",
    "japan"=>"tokoyo"
    ];
    ksort($countries);
    foreach($countries as $country=>$capital){
        echo "$country : $capital <br> "; 
    }
    ?>
</body>
</html>