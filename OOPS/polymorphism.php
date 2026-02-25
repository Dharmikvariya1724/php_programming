<?php
// Same Class But Different Different Work Its Polymorphism

interface a{
    public function test1();
}

interface b{
    public function test2();
}
// First Time Work implements class A,B
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

echo "</br></br>";

// Second Time Work implements class A,B
class Bank implements a,b{
    public function test1(){
        echo "Check Aadhar Card<br>";
    }

    public function test2(){
        echo "Check Pan Card<br>";
    }

    public function OpenAccount(){
        echo "Your Accoubt Is SuccessFully Open :) ";
    }
}

$account = new Bank;

echo $account->test1();
echo $account->test2();
echo $account->OpenAccount();

?>