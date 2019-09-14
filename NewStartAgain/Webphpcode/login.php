<?php

session_start();


include('connection.php');

	
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<style>
	
	*{
		margin: 0;
		padding: 0;
	}
	.container{
		
		background-image: url(blur-blurred-background-bokeh-995043.jpg);
		background-size: cover;
		height: 1000px;
		background-repeat: no-repeat;
	}
	
	.login-container{
		width: 20%;
		height: 370px;
		background-color: white;
		opacity: 0.75;
		margin: 10%;
		margin-left: 40%;
		position: absolute;
		border-radius: 6px 6px 6px 6px;
	}
	
	form{
		font-size: 190%;
		font-weight: 700;
		font-family: Gotham, "Helvetica Neue", Helvetica, Arial, "sans-serif";
		margin: 5%;
		margin-top: 12%;
	}
	
	input[type=text]{
		height: 40px;
		width: 80%;
		box-sizing: border-box;
		border: 3px solid #111010;
		margin: 3%;
		padding: 12px;
		border-radius: 4px 4px 4px 4px;
	}
	
	input[type=text]:focus{
		
		border: 3px solid #ccc;
	}
	
	
	input[type=password]{
		height: 40px;
		width: 80%;
		box-sizing: border-box;
		border: 3px solid #111010;
		margin: 3%;
		padding: 12px;
		border-radius: 4px 4px 4px 4px;
	}
	
	input[type=password]:focus{
		
		border: 3px solid #ccc;
	}
	
	input[type=submit]{
		height: 45px;
		width: 35%;
		border: 3px solid #272727 ;
		background-color: #504E4E ;
		color: white;
		font-size: 50%;
		font-weight: 700;
		font-family:Gotham, "Helvetica Neue", Helvetica, Arial, "sans-serif";
		border-radius: 3px 3px 3px 3px;
		margin: 1%;
	}
	
	a{
		font-size: 60%;
		text-decoration: none;
		color:#2C5EAC;
		
	}
	
	</style>

<body>

<div class="container">


<div class="login-container">
<center>
	<form method="post">
		
		User Name <br>
		<input type="text" name="txtname" placeholder="Enter User Name"/>
		<br><br>
		Password<br>
		<input type="password" name="password" placeholder="Enter Your Password"/><br>
		
		<input type="submit" value="Login" name="btnlogin"/>
		<br><a href="signup.php">or Signup</a>
		
		
	</form>
	
	
	</center>
	</div>
	<?php
	if(isset($_POST['btnlogin']))
	{
		$username=$_POST['txtname'];
		$password=$_POST['password'];
		$quarry="select * from login where username='".$username."' AND txtpassword='".$password."'";
		$run=mysql_query($quarry);
		if(mysql_num_rows($run)>0)
		{
		
			$_SESSION['login']="done";
			echo "<script>window.open('home.php','_self')</script>";
			
		}
		
		if($username=="" or $password==""){
			echo "<script>alert('Please Fill All the Fields')</script>";
		}
		
		else{
			
			echo "<script>alert('User Not Found')</script>";
		}
	}
	
	
	
	?>
	
</div>


</body>
</html>