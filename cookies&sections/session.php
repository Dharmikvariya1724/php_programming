<?php



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session</title>
</head>

<body>

    <form method="post">
        <input type="text" name="user" placeholder="Enter a user Name" /><br>

        <button type="submit" name="button" value="set">Set session</button><br>
        <button type="submit" name="button" value="display">Display
            session</button></br>
        <button type="submit" name="button" value="delete">Delete session</button>
    </form>

    <?php

    session_start();

    if(isset($_POST['button'])){
        
        if($_POST['button']=="set"){
            $val= $_POST['user'];
            $_SESSION['user']=$val;
        }
        
        if($_POST['button']== "display"){
            echo "sesstion is : " . $_SESSION['user'];
        }else{
            echo "session Not Found";
        }

        if($_POST['button']== "delete"){
            session_destroy();
        }
    }
    ?>


</body>

</html>