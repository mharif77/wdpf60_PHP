<?php 

$files = array('picture1.jpg', 'picture10.jpg', 'Picture2.jpg', 'picture20.jpg');

echo "<pre>";
print_r($files);

natsort($files);
//natcasesort($files);

echo "<pre>";
print_r($files);