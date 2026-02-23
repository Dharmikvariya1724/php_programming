<?php

$users=[
    "Name"   => "Dharmik", 
    "s_name" => "Variya", 
    "age"    => "22",
    "city"   => "Surat",
    "email"  => "abc@abc.com",
    "state"  => "Guj"
    ];

    // echo $users["name"];
    // echo "<br>";
    // echo $users["s_name"];


    foreach( $users as $key => $user ){

    echo $key . " is : " . $user;
    echo "<br>";
    
    }


?>