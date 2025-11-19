<?php
$host = "sql113.infinityfree.com";
$user = "if0_40454134";
$pass = "R1maurya9919";
$db   = "if0_40454134_NGO";

$conn = mysqli_connect($host, $user, $pass, $db);

if(!$conn){
    die("Database connection failed: " . mysqli_connect_error());
}
?>
