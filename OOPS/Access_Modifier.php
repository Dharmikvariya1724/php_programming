<?php
/*  #Public Function
class base{

public $name;

    public function __construct($n){
        $this->name = $n;
    }

    public function show(){
        echo "Your Name : " . $this->name . "</br>" ;
    }
}

$test = new base("FFFF"); // Old Value 

$test->name = "Dharmik Variya";  // This Value Is ovewr Ride in Base Function

$test->show();

*/

/* # Protected Function

class base{

protected $name;

    public function __construct($n){
        $this->name = $n;
    }

    protected function show(){
        echo "Your Name : " . $this->name . "</br>" ;
    }
}

class derived extends base{
    public function get(){
        echo "Your Name : " . $this->name . "</br>";
    }
}

$test = new derived("FFFFFFVVVVTTT");

// $test->name = "Dharmik Variya";
$test->get();
// $test->show();
*/
/*
#private 
class base{

private $name;

    public function __construct($n){
        $this->name = $n;
    }

    public function show(){
        echo "Your Name : " . $this->name . "</br>" ;
    }
}
 
class derived extends base{
    public function get(){
        echo "Your Name : " . $this->name . "</br>";
    }
}

$test = new derived("FFFF"); // Old Value 

$test->name = "Dharmik Variya";  // This Value Is ovewr Ride in Base Function

$test->show(); // Private Function inside Value Not Print
$test->get(); // Private Function inside Value Print using derived Class.
*/

?>