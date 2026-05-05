<?php
include("db.php");

$u = $_SESSION['user']['id'];
$res = $conn->query("SELECT*FROM heath_data WHERE user_id =$u");

$data=[];
while ($r=$res->fetch_assoc())
    $data[]=$r;
echo json_encode($data);
?>