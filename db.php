<?php
$conn = new mysqli("localhost","root","","health_app");
if($conn-> connect_error)die("Erreur connexion:");
session_start();
?>