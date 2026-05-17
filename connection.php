<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "student_manager";

$con = mysqli_connect($host, $user, $pass, $db);

if (!$con) {

    die("Database Connection Failed");

}
?>