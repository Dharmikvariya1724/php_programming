<?php

$users=[
        ["no"=>1,"name"=> "dharmik","S_name"=>"variya","city"=>"surat"],
        ["no"=>2,"name"=> "parth","S_name"=>"variya","city"=>"surat"],
        ["no"=>3,"name"=> "subham","S_name"=>"babariya","city"=>"surat"],
        ["no"=>4,"name"=> "kirtan","S_name"=>"dhola","city"=>"surat"],
        ["no"=>5,"name"=> "asif","S_name"=>"khan","city"=>"surat"],
    ];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>multidimensional Array</title>
</head>

<body>
    <?php
            echo "<table border=1>";
                echo "<tr>";
                echo "<th>No.</th>";
                echo "<th>Name</th>";
                echo "<th>S_name</th>";
                echo "<th>city</th>";
                echo "</tr>";
            
                foreach ($users as $user){
                    echo "<tr>";
                    foreach($user as $item){
                        echo "<td>";
                            echo $item;
                        echo "</td>";
                    }
                echo "</tr>";
                }
            
            echo "<table>"; 
    ?>
</body>

</html>