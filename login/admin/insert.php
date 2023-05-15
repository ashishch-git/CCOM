<?php

$servername = "localhost";
$username = "svap";
$password = "12345";
$dbname = "svap";
$title = $_POST["title"];
$link = $_POST["link"];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO notification (title, link) VALUES ('$title','$link')";
     
if(!mysqli_query($conn, $sql)){
      echo "Not inserted";
}
else{
      echo"Inserted";
}
header("refresh:2; url=updatenotification.htm");
?>
