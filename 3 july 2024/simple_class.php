<?php
class SimpleClass
{
    // property declaration
    public $var = 'Hello Simple Class';
public const a="America";
 
    // Static method declaration
    public static function sayHello() {
        echo "Hello World";
    }
}
SimpleClass::sayHello();
echo SimpleClass::a;
/*
access class method using directly class name and scope resolution Operator ::
 Result: Hello World
*/
?>