<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <input type="text" name="user" placeholder="Enter a user Name" /><br>

        <button type="submit" name="button" value="set">Set Cookies</button><br>
        <button type="submit" name="button" value="display">Display
            Cookies</button></br>
        <button type="submit" name="button" value="delete">Delete Cookies</button>
    </form>

    <?php
    if(isset($_POST['button'])){
        
        if($_POST['button']=="set"){
            $val= $_POST['user'];
            setcookie("user",$val);
            echo "Cookies is Set!..";
        }
        
        if($_POST['button']== "display"){
            if(isset($_COOKIE['user'])){
                echo "Cookies is : " . $_COOKIE['user'];
            }
        }

        if($_POST['button']== "delete"){
            if(isset($_COOKIE['user'])){
                setcookie("user",null,-1);
                echo "Cookies is : " . $_COOKIE['user'];
            }
        }
    }
    ?>
</body>

</html>