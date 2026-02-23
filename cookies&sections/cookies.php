<?php

setcookie("name", "vibhav", time()+ (86400));


if(isset($_COOKIE['name'])){

    // print_r($_COOKIE);
    echo "Current Cookie is : " . $_COOKIE['name'];

}else{

    print("cookies Not Set!.");

}

?>