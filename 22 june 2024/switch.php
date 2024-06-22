<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $abc = $_POST['category'];
    switch($abc){
        case "news":
        echo "What's happening around the world";
        break;
        case "weather":
        echo "Your weekly forecast";
        break;
        case "sports":
        echo "Latest sports highlights";
        echo "From your favorite teams";
        break;
        default:
        echo "Welcome to my web site";
        }
    
    ?>
    <form action="" method="POST">
        <select name="category" id="">
            <option value="select one">select one</option>
            <option value="news">news</option>
            <option value="weather">Weather</option>
            <option value="sports">sports</option>
        </select>
        <input type="submit" name = "submit" value ="SUBMIT">
    </form>
</body>
</html>