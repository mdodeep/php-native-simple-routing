<?php
$servername = "";
$database = "";
$username = "";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);
// Checking the connection
if (!$conn) {
    die("Connection failed : " . mysqli_connect_error());
}
