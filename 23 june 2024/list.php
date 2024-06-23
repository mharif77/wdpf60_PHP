<?php 
$fruits = ["mango","banana","lichi","grape"];
list ($var1,$var2,$var3,$var4) = $fruits;
echo $var1;
?>
<hr>
<?php
function UserProfile()
{
$user = ["Arif","arif077@example.com","01679504643"];

return $user;
}
list($name, $email, $phone) = UserProfile();
echo $name;
