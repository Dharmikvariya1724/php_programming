<?php

Trait Hello{
    public function sayhello(){
        echo "1. Hello Everyone</br>";
    }
}

Trait Hi{
    public function sayHi(){
        echo "2. Hi Everyone</br>";
    }
}

class Class1
{
    use Hello, Hi;

    public function sayHi(){
        echo "2. Hi Everyone First Prayoti</br>";
    }
    
}

$obj = new Class1;

$obj->sayhello();
$obj->sayHi();

?>