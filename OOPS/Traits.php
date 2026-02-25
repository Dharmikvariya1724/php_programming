<?php

Trait hello{
    public function sayhello(){
        echo "1. Hello Everyone</br>";
    }
    public function sayHi(){
        echo "2. Hi Everyone</br>";
    }
}

Trait by{
    public function sayby(){
        echo "3. By Everyone</br>";
    }
}

class base{
    use hello, by;
}
class base1{
    use hello;
}

$test = new base;
// $test1 = new base1;

$test->sayhello();
$test->sayHi();
$test->sayby();
// $test->sayhello();

?>