<?php

include("connection.php");

if(isset($_POST['registration'])){

    $u_name = $_POST['u_name'];
    $u_email = $_POST['u_email'];
    $u_password= $_POST['u_password'];

    $hashed_password = password_hash($u_password, PASSWORD_DEFAULT);
    $query = "INSERT INTO `users`( `u_name`, `u_email`, `u_password`) VALUES ('$u_name','$u_email','$u_password');";

    $run = mysqli_query($conn, $query);
    if($run){
        header("Location:index.php");
    }else{
        echo "File Not Fond";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>

    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif;
    }

    body {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background: linear-gradient(135deg, #4e73df, #1cc88a);
    }

    .container {
        width: 400px;
        background: #fff;
        padding: 35px;
        border-radius: 10px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    }

    .container h2 {
        text-align: center;
        margin-bottom: 25px;
        color: #333;
    }

    .input-group {
        margin-bottom: 15px;
    }

    .input-group label {
        display: block;
        margin-bottom: 5px;
        font-size: 14px;
        color: #555;
    }

    .input-group input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 6px;
        outline: none;
        transition: 0.3s;
    }

    .input-group input:focus {
        border-color: #4e73df;
        box-shadow: 0 0 5px rgba(78, 115, 223, 0.5);
    }

    .gender {
        display: flex;
        gap: 15px;
        margin-bottom: 15px;
        font-size: 14px;
    }

    .btn {
        width: 100%;
        padding: 12px;
        border: none;
        border-radius: 6px;
        background: #4e73df;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
        transition: 0.3s;
    }

    .btn:hover {
        background: #2e59d9;
    }

    .login-link {
        text-align: center;
        margin-top: 15px;
        font-size: 14px;
    }

    .login-link a {
        text-decoration: none;
        color: #4e73df;
        font-weight: bold;
    }

    .login-link a:hover {
        text-decoration: underline;
    }

    @media(max-width:450px) {
        .container {
            width: 90%;
            padding: 25px;
        }
    }
    </style>
</head>

<body>

    <div class="container">
        <h2>Registration Form</h2>

        <form action="" method="post">
            <div class="input-group">
                <label>User Name</label>
                <input type="text" name="u_name" id="u_name" placeholder=" Enter your name" required>
            </div>

            <div class="input-group">
                <label>Email</label>
                <input type="email" name="u_email" id="u_email" placeholder=" Enter your email" required>
            </div>

            <div class="input-group">
                <label>Password</label>
                <input type="password" name="u_password" id="u_password" placeholder=" Enter password" required>
            </div>

            <button type="submit" name="registration" class="btn">Register</button>

            <div class="login-link">
                Already have an account? <a href="index.php">Login</a>
            </div>
        </form>
    </div>

</body>

</html>
<!-- INSERT INTO `users`(`id`, `u_name`, `u_email`, `u_password`) VALUES ('1','dharmik','dharmik@gmail.com','123456') -->