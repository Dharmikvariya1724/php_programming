<?php

include "connection\database.php";

$obj = new Database();

$obj->insert('students',['name'=>'dharmik','age'=>22, 'city'=>'surat']);
echo "Insert result is :";
print_r($obj->getResult());

?>

<h1>hhh</h1>