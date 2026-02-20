<?php

for($a = 1; $a<=10; $a++){

    if($a == 5){
        echo "This Number is  :" . $a . "<br>";
        continue;
    }
    echo "number : " . $a . "<br>" ;
}

echo "<br>";

for($a = 1; $a<=10; $a++){

    if($a == 5){
        echo "This Number is  :" . $a . "<br>";
        break;
    }
    echo "number : " . $a . "<br>" ;
}

?>