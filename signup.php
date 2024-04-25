<?php
    include "includes/connect.php";
     if())
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <H1>Sign UP</H1>
    <FORM action="process-signup.php" method="post" novalidate>
        <div>
        <label for="name">Name</label>
        <input type="text" id="name" name="name">
        </div>

        <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email">
        </div>

        <div>
        <label for="password">Password</label>
        <input type="password" id="password" name="password">
        </div>

        <div>
        <label for="password_confirmation">Repeat Password</label>
        <input type="password" id="password_confirmation" name="password_confirmation">
        </div>

        <button>Sign Up <a href="login.php"></a></button>
    </FORM>
</body>
</html>