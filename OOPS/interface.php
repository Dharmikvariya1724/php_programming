<?php

interface a{
    public function test1();
}

interface b{
    public function test2();
}

class C implements a,b{
    public function test1(){
        echo "Hello Dharmik</br>";
    }

    public function test2(){
        echo "Hello Variya Dharmik </br> ";
    }

    public function test3(){
        echo "Test1 And Test2 Was Complete :) ";
    }
    
}

$link = new c;

echo $link->test1();
echo $link->test2();
echo $link->test3();

?>