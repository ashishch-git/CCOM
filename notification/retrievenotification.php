﻿<?php
include_once 'dbconfig.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Notification</title>
<style>
{
	padding:0;
	margin:0;
}


#body
{
	margin-top:100px;
}
#body table
{                
                  
                  top: 20px;
                  right: 0;
                  width: 50%;
                  height: 100px;
	margin:0 auto;
	position:relative;
	bottom:20px;
                  border="1"
}
table th
{
	padding:20px;
	border: solid #000000 1px;
	border-collapse:collapse;
}
table td
{
	padding:20px;
	border: solid #000000 1px;
	border-collapse:collapse;
                  color:ffffff;
}

#header
{
                  position:absolute;
	left:0;
	right:0;
	margin:0 auto;
	background:#ea232a;
	width:100%;
	height:50px;
                  top:0px;
	color:#fff;
	font-size:36px;
	font-family:Verdana, Geneva, sans-serif;
}
html
{
position: relative;
    min-height: 100%;
}

#footer
{
	text-align:center;
    background:#ea232a;
	position: absolute;
	overflow:hidden;
	left:0;
	right:0;
	margin:0 auto;
	bottom:0;
	width:100%;
	color:#fff;
	font-size:20px;
	font-family:Verdana, Geneva, sans-serif;
}

 body
{
    margin: 0 0 100px; /* bottom = footer height */
    padding: 25px;
	background:#FF9078;
	font-family:Georgia, "Times New Roman", Times, serif;
	text-align:center;
}
a {
    color: #fff;
}



</style>
</head>
<body>
<div id="header">
<label>Retrieve Notification</label>
</div>
<div id="body">
<?php
 

$sql = "SELECT * FROM notification";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<table><tr><th>Title</th><th>Link</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["title"]. "</td><td><a href=" . $row["link"]. ">".$row["link"]."</a></td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}

$conn->close();
?>  
</div>
<div id="footer">
<label>Created By: SVAP </label>
</div>
</body>
</html>