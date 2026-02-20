<?php

    $a = 50;
    $b = 20;

    echo $a > $b;
    echo "<br>";
    var_dump ($a > $b);

    echo "<br>";

    if($a > $b)
    {
        echo "A is Biggest in B";
    }else if($a <=> $b){
        echo "B is Biggest In A";
    }else{
        echo "A = B";
    }


?>