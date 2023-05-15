<?php
include_once 'dbconfig.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Achievements</title>
<style>
{
    
	padding:0;
	margin:0;
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
	background:#ea232a;
	width:100%;
	height:50px;
    top:0;
	color:#fff;
	font-size:36px;
	font-family:Verdana, Geneva, sans-serif;
}

a {
    color: #fff;
}

</style>
</head>
<body>
<div id="header">
<label>Achievements</label>
</div>
<div id="body">
    <table>
    <tr>
    <td><u>File Name</u></td>
    <td><u>File Size(KB)</u></td>
    <td><u>View</u></td>
    </tr>
    <?php
	$sql="SELECT * FROM achievements_table";
	$result_set=mysqli_query($conn, $sql);
	while($row=mysqli_fetch_array($result_set))
	{
		?>
        <tr>
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['size'] ?></td>
        <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
        </tr>
        <?php
	}
	?>
    </table>
    
</div>
<div id="footer">
<label>Created By: SVAP </label>
</div>
</body>
</html>