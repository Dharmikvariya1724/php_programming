<?php

class Calculation{

    public $a, $b, $c;

    function sum(){
        $this->c=$this->a + $this->b;
        return $this->c;
    }

    function sub(){
        $this->c = $this->a - $this->b;
        return $this->c;
    }

}

    $c1 = new Calculation();
        $c1->a = 20;
        $c1->b = 10;

    $c2 = new Calculation();
        $c2->a = 50;
        $c2->b = 35;

    $c1->sum();
    $c2->sub();

echo "Two Number + :" . $c1->sum() . "<br>";
echo "Two Number - :" . $c2->sub() . "\n";


?>