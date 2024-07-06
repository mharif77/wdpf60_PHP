<?php
$text = "This is a link to http://www.wjgilmore.com/. and  https://classroom.google.com/ .";
echo preg_replace("/http:\/\/(.*)\//", "\${0}\",
$text);
?>