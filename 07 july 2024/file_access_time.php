<?php
$file = 'files/user.txt';
//echo  fileatime(($file));
echo "modified time" .  date("m-d-y g:i:sa", fileatime($file));
echo "created time" . date("m-d-y g:i:sa", fileatime($file));
echo "accessed time" . date("m-d-y g:i:sa", fileatime($file));
?>