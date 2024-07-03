<?php
class oop{
    private $name;
    private $age;
 public function __construct($name,$age){
    $this ->name= $name;
    $this ->age= $age;
 }
 public function sayHello(){
     echo "Hello" . $this ->name;
 }
  
 
}
$obj=new oop("arif",30);
print_r($obj);
echo "<br>"; /* Now Automatically Execute __construct Method
                  And Will show "Welcome to PHP World " First.*/
 
// echo "<br>";
 
// $obj->sayHello(); // Result: Hello World
 
?>