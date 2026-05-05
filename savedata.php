<?php 
include('db.php');
$u = $_SESSION['user']['id'];
$t = $_SESSION['tension'];
$h = $_SESSION['heart'];

$conn->query("INSERT INTO heath_data(user_id,tension,heart_rate)VALUES('$u','$t','$h')");
header("location:dashboard.php");
?>