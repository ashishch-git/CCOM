<?php
include_once 'dbconfig.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Achievements Entry</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<style>
 .lbl1{
            margin-left: -128px;
         }
 .lbl2{
            margin-left: -100px;
         }
 .lbl3{
            margin-left: -37px;
         }
 .lbl4{
            margin-left: -90px;
         }
 .lbl5{
            margin-left: -90px;
         }
 
 .select{
            margin-left: -100px;
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

.lbl
{
                  
                  font-size:20px;
	font-family:Verdana, Geneva, sans-serif;
}

a {
    color: #fff;
}
 
</style>
</head>
<body>
<div id="header">
<label>Achievements Entry</label>
</div>
<div id="body">
	<form action="achieveentry.php" method="post" enctype="multipart/form-data">
	<input type="file" name="file" />
	<button style="background:#ea232a;color:#fff;font-size:15px;
	font-family:Verdana, Geneva, sans-serif;" type="submit" name="btn-upload">upload</button>
	</form>
    <br /><br />
    <?php
	if(isset($_GET['success']))
	{
		?>
        <label>File Uploaded Successfully...  <a href="view.php">click here to view file.</a></label>
        <?php
	}
	else if(isset($_GET['fail']))
	{
		?>
        <label>Problem While File Uploading !</label>
        <?php
	}
	else
	{
		?>
        <label>Try to upload any files(PDF, DOC)</label>
        <?php
	}
	?>
</div>
<div id="footer">
<label>Created By: SVAP </label>
</div>
</body>
</html>

</body>
</html>
