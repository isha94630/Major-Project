<?php
if(empty($_POST["name"])){
    die("Name is required ");
}
if(! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
    die("Email  is required ");
}
if(strlen($_POST["password"])<8){
    die("Password must contain atleast 8 letter ");
}
if(! preg_match("/[a-z]/i",$_POST["password"])){
    die("Password must contain atleast 1 letter ");
}
if(! preg_match("/[0-9]/",$_POST["password"])){
    die("Password must contain atleast 1 NUMBER ");
}
if($_POST["password"] !== $_POST["password_confirmation"]){
    die("Passwords must match");
}
$password_hash=password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli =require __DIR__."/includes/connect.php";
$sql="INSERT INTO user (names, email, password_hash) VALUES (?,?,?,)";
$stmt = $mysqli->stmt_init();

if(! $stmt->prepare($sql)){
    die("SQL error:" . $mysqli->error);
}

$stmt->bind_param("sss",$_POST["name"],$_POST["email"],$password_hash);
$stmt->execute();

echo "Successfull";


