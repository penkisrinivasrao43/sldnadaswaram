<?php
$servername = "localhost:3307";
$username   = "root";
$password   = "";  // use empty string if phpMyAdmin doesn’t ask for a password
$dbname     = "wwwsldnadaswaram_sldnadaswaram"; // make sure this DB exists

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
