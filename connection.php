<?php
$servername = 'localhost';
$username = "root";
$password = "";
$database = "fgicbank";

//Create connection to Database

$conn = $mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("connetion failed: " . mysqli_connect_error());
}
