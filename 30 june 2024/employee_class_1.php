<?php 
class employee{
public $name;
public $age;
public $address;

public function info(){
    $full = "";
    $full .= "name: " . $this->name . "<br>";
    $full .= "age: " . $this->age . "<br>";
    $full .= "address: " . $this->address . "<br>";
    return $full;
}
}//end of class
$obj1 = new employee;
 $obj1->name= "arif";


$obj1->age= 20;

 $obj1->address="basabo";
 echo  $obj1->info();
