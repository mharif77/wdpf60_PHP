<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Registration Form</h1>
    <?php
    if (isset($_REQUEST['submit'])) {
        $msg = form_validation();
        if ($msg) {
            echo "<ul>";
            foreach ($msg as $m) {
                echo "<li>$m</li>";
            }
            echo "</ul>";
        } else {
            echo " <h1 style = 'color:blue'>Validation ok</h1>";
        }

        //print_r($msg);
    }
    function form_validation()
    {
        $errors = [];
        $fullname = $_REQUEST['fullname'];
        if ($fullname == "") {
            $errors[] = "<h3 style = 'color:red'>you must enter a fullname</h3>";
        }
        // if (isset($_REQUEST['Gender'])) {
    
        //     $Gender = $_REQUEST['Gender'];
        //     if ($Gender == "") {
        //         $errors[] = "you must select Gender";
        //     }
        // }else{
    
        //     return $errors = "you must select Gender";
        // }
    
        $District = $_REQUEST['District'];
        if ($District == "") {
            $errors[] = "<h3 style = 'color:red'>you must select a District</h3>";
        }

        $Address = $_REQUEST['Address'];
        if ($Address == "") {
            $errors[] = "<h3 style = 'color:red'>you must select a Address</h3>";
        }
        $Hobbies = $_REQUEST['Hobbies'];
        if (empty($Hobbies)) {
            $errors[] = "you must select a one Hobbies";
        }
        return $errors;
    }
    ?>
    <fieldset>
        <legend>Registration Form</legend>
        <form action="" method="post">
            Name: <br>
            <input type="text" name="fullname" placeholder="Enter your name"><br>
            Gender: <br>
            <input type="radio" name="Gender" value="male" checked> male
            <input type="radio" name="Gender" value="male"> female <br>
            District: <br>
            <select name="District" id="">
                <option value="">select one</option>
                <option value="Dhaka">Dhaka</option>
                <option value="Rajshahi">Rajshahi</option>
                <option value="Khulna">Khulna</option>
                <option value="Madaripur">Madaripur</option>
                <option value="Gazipur">Gazipur</option>

            </select><br>
            Hobbies: <br>
            <input type="checkbox" name="Hobbies[]" value="Cricket" checked>Cricket
            <input type="checkbox" name="Hobbies[]" value="Football">Football
            <input type="checkbox" name="Hobbies[]" value="Watching drama">Watching drama
            <input type="checkbox" name="Hobbies[]" value="listening to music">listening to music <br>

            Address: <br>
            <textarea name="Address" placeholder="Enter your address"></textarea> <br>
            <input type="submit" name="submit" value="Register">
        </form>
    </fieldset>
</body>

</html>