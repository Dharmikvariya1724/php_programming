<?php

abstract class Test{
    abstract function hello(); // Must have this Function
}

class exam extends Test{
    // extends Test Class to Forcefully Add in Child Class if you want to make it abstract Class.
    function hello(){ 
        echo "Hii Dharmik";
    }
}

$obj = new exam;
$obj->hello();

?>