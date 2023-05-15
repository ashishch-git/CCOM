<?php
include_once 'dbconfig.php';

$username=$_POST['username'];
$name=$_POST['name'];
$password=$_POST['password'];
$usertype=$_POST['usertype'];

$sql = "INSERT INTO login_table(username,name,password,usertype) VALUES ('$username','$name','$password','$usertype')";
     
if(!mysqli_query($conn, $sql)){
      echo "Problem while registering";
}
else{
      echo"Registration Successfull";
}
header("refresh:10; url=login.htm");
?>
