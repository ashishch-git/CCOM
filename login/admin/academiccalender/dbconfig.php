<?php
$servername = "localhost";
$username = "svap";
$password = "12345";
$dbname = "svap";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
