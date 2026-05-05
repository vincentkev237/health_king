<?php
include("db.php");

$s =$_SESSION['user']['id'];
$r = $_SESSION['receiver'];
$m = $_SESSION['message'];

$conn->query("INSERT INTO message(sender_id,receiver_id,message)VALUES('$s','$r','$m')")

?>