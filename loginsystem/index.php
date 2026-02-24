<?php

include("connection.php");
session_start();

if(isset($_POST['login'])){

    $u_email=$_POST['u_email'];
    $u_password=$_POST['u_password'];

    // $query = "selecte * from `users` where ( `u_email`=$u_email, `u_password`=$u_password );";
    $query = "SELECT * FROM users WHERE u_email='$u_email'AND u_password='$u_password'";

    $run = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($run);
    if(mysqli_num_rows($run)>0){
        if($u_password== $row['u_password']){
            header("Location:dashbord.php");
        }
    }else{
        echo "Incorrcte Email and Password";
    }
}   

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
        background: linear-gradient(135deg, #667eea, #764ba2);
    }

    .login-container {
        width: 350px;
        padding: 40px;
        border-radius: 15px;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
        color: #fff;
    }

    .login-container h2 {
        text-align: center;
        margin-bottom: 30px;
    }

    .input-group {
        margin-bottom: 20px;
    }

    .input-group label {
        display: block;
        margin-bottom: 5px;
        font-size: 14px;
    }

    .input-group input {
        width: 100%;
        padding: 10px;
        border-radius: 8px;
        border: none;
        outline: none;
    }

    .input-group input:focus {
        box-shadow: 0 0 5px #fff;
    }

    .remember {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 14px;
        margin-bottom: 20px;
    }

    .remember a {
        text-decoration: none;
        color: #fff;
    }

    .remember a:hover {
        text-decoration: underline;
    }

    .btn {
        width: 100%;
        padding: 12px;
        border: none;
        border-radius: 8px;
        background: #fff;
        color: #333;
        font-weight: bold;
        cursor: pointer;
        transition: 0.3s;
    }

    .btn:hover {
        background: #ddd;
    }

    .register {
        text-align: center;
        margin-top: 15px;
        font-size: 14px;
    }

    .register a {
        color: #fff;
        text-decoration: none;
        font-weight: bold;
    }

    .register a:hover {
        text-decoration: underline;
    }

    @media (max-width: 400px) {
        .login-container {
            width: 90%;
            padding: 25px;
        }
    }
    </style>
</head>

<body>

    <div class="login-container">
        <h2>Login</h2>

        <form action="" method="post">
            <div class=" input-group">
                <label>Email</label>
                <input type="email" name="u_email" id="u_email" placeholder="Enter your email" required>
            </div>

            <div class="input-group">
                <label>Password</label>
                <input type="password" name="u_password" id="u_password" placeholder="Enter your password" required>
            </div>

            <button type="submit" name="login" value="login" id="login" class="btn">Login</button>

            <div class="register">
                Don't have an account? <a href="Registration.php">Register</a>
            </div>
        </form>
    </div>

</body>

</html>