<?php
class test{
    public $name;
    private $mobile;
    function __construct($name, $mobile){
        $this->name = $name;
        $this->mobile = $mobile;
    }
    public function __clone(){
        echo "During Cloning I'm only Executing! And I can change anything\n";
        $this->mobile="01922009988";
    }
}
$obj1 = new test("Farhaan" , "01700000000");
$obj2 =  $obj1; //Copy of the object
$obj2->name = "Habibr";
print_r($obj1);
echo "<br>";
var_dump($obj2);
?>