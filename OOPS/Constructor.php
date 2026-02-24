<?php

class person{

    public $name;
    public $age;

    function __construct($name = "Hello", $age =25 ){
        $this->name = $name;
        $this->age = $age;
    }

    function show(){
        echo $this->name . " - " .    $this->age . "<br>";
    }
}

    $p1 = new person();
    $p2 = new person("ASD" , 12);
    $p3 = new person("DSA" , 21);
    $p1->show();
    $p2->show();
    $p3->show();

?>