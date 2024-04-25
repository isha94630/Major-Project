<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="stylelogin.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        
        <form action="login.php" method="post">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" placeholder="Username" required name="email">
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">Remember me </label>
                <a href="#">Forgot Password?</a>
            </div>
            <button type="submit" class="btn2" name="login"><a href="services.php">Login</a></button>
            <div class="register-link">
            <p>Don't have an account? <a href="signup.php">Register</a></p>
                <p><a href="index.php">Back to Home</a></p>
            </div>
        </form>
    </div>
</body>
</html>
<?php
include('includes/connect.php');
?>