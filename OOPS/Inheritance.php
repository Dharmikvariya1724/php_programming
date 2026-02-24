<?php

class emp{
public $name;
public $age;
public $salary;

    function __construct($n, $a, $s){
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }

    function info(){
        echo "<h3>Employee Profile</h3>";
        echo "Emp Name : " . $this->name . "</br>";
        echo "Emp Name : " . $this->age . "</br>";
        echo "Emp Name : " . $this->salary . "</br>";
    }
}

class man extends emp{
public $ta = 1000;
public $phone = 300;
public $totalsalary;

    function info(){
        $this->totalsalary = $this->salary + $this->ta + $this->phone;
        echo "<h3>Manegar Profile</h3>";
        echo "Manegar Name : " . $this->name . "</br>";
        echo "Manegar age : " . $this->age . "</br>";
        echo "Manegar totalsalary : " . $this->totalsalary . "</br>";
    }
}

$e1 = new man("RAM", 25, 10000);
$e2 = new emp("ieswer", 21, 7500);

$e1->info();
$e2->info();

?>