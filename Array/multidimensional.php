<?php

$users=[
        [1, "dharmik", "variya", "surat"],
        [2, "subham", "babriya", "surat"],
        [3, "kiratan", "dhola", "bitad"],
        [4, "rasif", "khan", "rajsthan"]
    ];

//     foreach( $users as $key => $user ){

//     echo $key . " is : " . $user;
//     echo "<br>";
    
//     }

    // echo "<table border=1>";
    //     for($i = 0; $i<count($users); $i++){
    //         echo "<tr>";

    //         for($j=0; $j<count($users[$i]); $j++)
    //             {
    //                 echo "<td>";   
                    
    //                     echo $users[$i][$j];
                    
    //                 echo "</td>";
                    
    //             }
    //         echo "</tr>";
    //     }
    // echo "<table>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>multidimensional Array</title>
</head>

<body>
    <!--- <?php
            echo "<table border=1>";
                echo "<tr>";
                echo "<td>No.</td>";
                echo "<td>Name</td>";
                echo "<td>S_name</td>";
                echo "<td>city</td>";
                echo "</tr>";
                for($i = 0; $i<count($users); $i++){
                    echo "<tr>";

                    for($j=0; $j<count($users[$i]); $j++)
                        {
                            echo "<td>";   
                            
                                echo $users[$i][$j];
                            
                            echo "</td>";
                            
                        }
                    echo "</tr>";
                }
            echo "<table>";
        ?> 
        --->
</body>

</html>