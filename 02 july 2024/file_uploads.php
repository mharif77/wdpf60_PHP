<?php

if(isset($_FILES['image'])){
    $filename = $_FILES['image']['name'];
    $filetmp = $_FILES['image']['tmp_name'];
    move_uploaded_file($filetmp,"image/".$filename);
    echo "image upload successfully";
    

}


?>
<form method="post" enctype="multipart/form-data">
    <input type="file" name ="image"/>
    <input type="submit" value ="submit">
</form>