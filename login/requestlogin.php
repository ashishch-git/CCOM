<?php
include_once 'dbconfig.php';

$username=$_POST['username'];
$password=$_POST['password'];
$usertype=$_POST['usertype'];

$sql="SELECT * FROM login_table WHERE username='$username' and password='$password' and usertype='$usertype' and verificationstatus='yes'";
$result=mysqli_query($conn,$sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
header("refresh:2; url=admin.htm");
}
else {
echo "Wrong Username or Password";
}
?>