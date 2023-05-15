<?php
include_once 'dbconfig.php';

$username=$_POST['username'];
$name=$_POST['name'];


$sql = "INSERT INTO student_table(username,name) VALUES ('$username','$name')";
     
if(!mysqli_query($conn, $sql)){
      echo "Problem while registering";
}
else{
      echo"Registration Successfull";
}
header("refresh:10; url=login.htm");
?>
