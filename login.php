<?php
include("db.php");
$email = $_POST['email'];
$password = $_POST['passeword'];

$res = $conn-> query("SELECT*FROM users WHERE email = '$email'");
$user = $res-> fetch_assoc();

if(password_verify($password, $user['password'])){
    $_SESSION['user'] =$user;
    header("location:dashbord.php");
}
?>