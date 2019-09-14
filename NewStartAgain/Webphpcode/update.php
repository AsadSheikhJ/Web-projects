<?php
include("connection.php");

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php

$id=$_GET['id'];
$select="select * from contact_us where id=$id";
$run=mysql_query($select) or die(mysql_error());
$row=mysql_fetch_array($run);
$name=$row['NAME'];
$email=$row['EMAIL'];
$comment=$row['COMMENT'];


?>
<form method="post">
Name<input type="text" value="<?php echo $name?>" name="name"/>
<br>
<br>
Email<input type="Email" value="<?php echo $email?>" name="email"/>
<br>
<br>
<textarea name="comment">
<?php echo $comment?>

</textarea>
<input type="submit" value="Update" name="btnupdate"/>
<?php

if(isset($_POST['btnupdate']))
{
	
	$uname=$_POST['name'];
	$uemail=$_POST['email'];
	$ucomment=$_POST['comment'];
	$update="update  contact_us set NAME='$uname',EMAIL='$uemail',COMMENT='$ucomment' where ID=$id ";
	if(mysql_query($update) or die(mysql_error()))
	{
		echo"<script>window.open('NewProject.php','_self')</script>";
		
		
		}
	
	
	
	}


?>

</form>
</body>
</html>