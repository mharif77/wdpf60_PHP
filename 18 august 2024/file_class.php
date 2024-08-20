<?php
class File
{
    public function __construct($x)
    {
        $this->fileinfo = $x;
    }
    public function upload()
    {
        $info = $this->fileinfo;
        $name = $info['name'];
        $tmpname = $info['tmp_name'];
        $filesize = $info['size'];
        $allowedsize = 512000;
        $allowedtype = ["jpg", "png"];
        $errors = array();
        $data = pathinfo($name);
        $ext = strtolower($data['extension']);

        if ($filesize > $allowedsize) {
            $errors[] = "file size must be within 500kb";
        }
        if (!in_array($ext, $allowedtype)) {
            $errors[] = "file size must be jpg and png";
        }
        if (count($errors) > 0) {
            foreach ($errors as $err) {
                echo $err . "<br>";
            }
        } else {
            if (move_uploaded_file($tmpname, "upload/" . $name)) {
                echo "uploded successfully";
            }
        }


    }
}
?>