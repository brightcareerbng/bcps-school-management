<?php
$conn = mysqli_connect("localhost","root","","bcps_db");

if(!$conn){
    die("Database connection failed");
}

date_default_timezone_set("Asia/Kolkata");
?>
