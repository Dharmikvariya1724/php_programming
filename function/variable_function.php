<?php 

// Function Call By Name...

function wow($name){
    echo "Hello $name ";
}

$func = "wow";

$func("Dharmik");

echo "<br><br>";

// ------------------------------ //
// Function Call by Variable..

$func = function ($name){
    echo "Hii $name ";
};

$func("Dharmik");

?> 5