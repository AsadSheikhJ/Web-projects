<?php
session_start();
if(isset($_SESSION['login'])){
		?>
<?php
	
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("ships",$con)

	
?>


<!doctype html>
<html>

<link rel="stylesheet" type="text/css" href="bootstrap.min.css"/>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<style>
	*{
		margin: 0;
		padding: 0;
	}
	
	#main-container{
		width: 100%;
		height: auto;
		background-image:url(blur-blurred-background-bokeh-995043.jpg);
		overflow: hidden;
	}
	
		
	
	.inside-container{
		width: 100%;
		height: auto;
		margin: 0;
		padding: 0;
	}
	
	
	header{
		height: 120px;
		margin: 1%;
		text-align: center;
		opacity: 0.75;
	}
	
	
	.heading{
		
		font-size: 450%;
		font-style: normal;  
		text-shadow: 0px 8px 12px black;
		font-weight: 900;
		color:#00147E;
		font-family: Audrey;
	}
	.head{
		margin: 0.7%;
		position: absolute;
		margin-left: 35%;
	}
	nav{
		height: 65px;
		background-color: white;
		margin: 1%;
		margin-top: -0.7%;
		overflow: hidden;
		opacity: 0.75;
		border-radius: 7px 7px 7px 7px;
	}
	
	.nav1{
		width: 30%;
		height: 60px;
		
	}
	
	.nav2{
		width: 35%;
		height: 60px;
		margin: 0.5%;
		
	}
	.nav3{
		width: 41.2%;
		height: 60px;
		margin: 0.5%;
		
	}
	
	.nav1,.nav2,.nav3{
		float: left;
		margin-top: 0.16%
	}
	
	.nav1{
		display: block;
		margin: 0.5%;
		overflow: hidden;
		margin-left:1%;
		height: auto;
		
}

	.nav1 a{
		text-decoration: none;
		font-size: 200%;
		padding: 0.8rem 0.8rem;
		word-spacing: 0.5rem;
		font-weight: 495;
		color: black;
		font-family: Audrey;
		border-radius: 10px 10px 10px 10px;
	
}
	
	.nav1 a:hover {background-color:#EDEDED;}
	
	#separate-line{
		background-color:#1E1E1E;
		width: 0.1%;
		height: 55px;
		float: left;
		margin-top: 0.3%;
}
	
	.nav2{
		
		float: left;
		width: 25%;
		
	
}
	.nav2 h3{
		float: left;
		margin-top: 3.2%;
		font-size: 176%;
		font-family:Audrey;
		font-weight: bold;
}
	input[type=Search]{
		height: 40px;
		padding: 12px 20px;
		box-sizing:  border-box;
		border: 3px solid #555;
		outline: none;
		-webkit-transition: width 0.4s ease-in-out;
    	transition: width 0.4s ease-in-out;
		width: 40%;
		margin-top: 2.2%;
		margin-left: 4%;
	
	}
	
	input[type=search]:focus {
		
		border: 3px solid #ccc;
		width: 50%;
	}
	
	.logsign-button{
		text-decoration: none;
		color: black;
		margin-left: 69%;
		display: block;
		height: 50px;
		text-align: center;
		width: 28%;
		
	}
	.logsign-button a{
		text-decoration: none;
		font-weight: bold;
		color: black;
		font-family: Audrey;
		font-weight: 800;
		display: block;
		height: 100%;
		border-radius: 6px 6px 6px 6px;
		margin-top: 1.9%;
	}
	
	.logsign-button h3{
		margin: 0.5%;
		margin-left: 2.9%;
		position: absolute;
		
	}
	
	.logsign-button :hover {background-color:#EDEDED;}

	
	.content{
		height: auto;
		background-color: peru;
		margin: 1%;
		opacity: 0.65;
		border-radius: 7px 7px 7px 7px;
		overflow: hidden;
	}
	
	
	
	footer{
		height: 300px;
		background-color: white;
		margin: 1%;
		opacity: 0.75;
		border-radius: 7px 7px 7px 7px;
	
		
	}
	
	
	.content-top{
		width: 100%;
		height: 100px;
		background-color: white;
		border-radius: 7px 7px 0px 0px;
	}
	
	.content-top h1{
		margin-top: 1.2%;
		margin-left: 2%;
		position: absolute;
		font-weight: 700;
		text-decoration-line:underline;
	}
	
	
	.content-mid{
		width: 100%;
		height:400px;
		background-color:white;
		overflow: hidden;
	}
	
	
	.content-bot{
		width: 100%;
		height: auto;
		background-color:white;
		border-radius: 0px 0px 7px 7px;
		overflow: hidden;
	}
	
	
	.table1, td, th {  
 		 border: 4px solid #ddd;
  		 text-align: left;
	}

	.table1 {
  		border-collapse: collapse;
  		width: 98%;
		font-size: 170%;
		margin: 1%;
		margin-top: 0%;
		overflow: hidden;
	}

	th, td {
  		padding: 10px;
		margin-bottom: 12%;
	}
	
	th {
		font-weight: 700;
	}

	td {
		font-weight: 500;
	}
	
	h2{
		margin-left: 2%;
		font-weight: 700;
		text-decoration-line:underline;
		font-size: 240%;
		font-weight: 700;
		margin-right: 6%;
		padding-top: 2%;
		
	}
	.table2{
		margin: 2.1%;
		padding: 10px;
		width: 92%;
	}
	.line{
		height: 3px;
	}
	
	footer h3{
		margin: 6%;
		font-size: 250%;
		margin-top: 0%;
		padding-top: 1.9%;
		margin-left: 2.4%;
		font-weight: 900;
		color:darkred;
		word-spacing: 10px;
		word-break: normal;
		margin-bottom: 1%;
		
		
	}
	
	.box1, #box2, #box3{
		float: left;
		height: 230px;
		width: 30%;
		margin: 2%;
		margin-right: 1%;
		overflow: hidden;
	}
	
	footer a{
		text-decoration: none;
		color: #1D5B82;
		margin-left: 1.8%;
		font-size: 120%;
		font-weight: 900;
		word-spacing: 15px;
		padding-right: 3%;
	}
	
	footer h4{
		margin: 2%;
		font-weight: 700;
		
	}
	#box2{
		width: 26%;
		font-size: 120%;
		font-family: "bowlby-one-sc";
		color: #EDEDED;
		float: left;
		
	}
	
	#box2 .t2{
		margin: 3%;
		color: #1D1D1D;
		font-weight: 800;
	}
	
	#box3{
		font-weight: 600;
		font-size: 120%;
		margin-left: 4%;
		
	}
	#box3 h2{
		font-size: 160%;
		font-weight: 700;
		text-decoration-line: underline;
		font-family:"Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, "sans-serif";
		margin-top: 1.5%;
		
	}
	
	#box3 p{
		font-style: italic;
		word-spacing: 8px;
		margin: 1%;
		margin-top: 4%;
	}
	.foot-line1{
		width: 0.041%;
		height: 210px;
		background-color: black;
		float: left;
		margin-left: 0.5%;
		margin-right: -0.5%;
		margin-top: 2.5%;
		border-radius: 10px;
	}
	.foot-line2{
		width: 0.039%;
		height: 210px;
		background-color: black;
		margin-left: 35%;
		margin: 0%;
		float: left;
		margin-left: 0.5%;
		margin-right: -0.5%;
		margin-top: 2.5%;
		border-radius: 10px;
		
	}
	
	</style>
		

<body>


<div id="main-container">
	
	
	<div class="inside-container">
		
		<!--Top Heading start-->
		
		<div class="row">
			<div class="col-12">
			<header>
			<div class="head">
			<h1 class="heading">SHIP YOURSELF</h1>	
			</div>
			</header>
		</div>
		</div>
		
		<!--Top header End-->
		
		<div class="row">
		<div class="col-sm-12">
			<nav>
			<div class="nav1">
				
				<a href="#home">Home</a>
				<a href="#Ships">Ships</a>
				<a href="#info">Info</a>
				<a href="#contact us" class="contact">Contact Us</a>
				
			</div>
			<div id="separate-line"></div>
			<div class="nav2">
				<h3>Search Box</h3>
				<p><input type="Search" placeholder="Enter Any Text"/></p>
			</div>
			<div class="nav3">
			<div class="logsign-button">
				<a href="login.php"><h3>LogOut</h3></a>
			</div>
			</div>
			
			</nav>
			</div>
		</div>
		
		<div class="row">
		<div class="col-sm-12">
		<section class="content">
			<div class="content-top">
			<center>
				<h1>Shipment details for Costumers:</h1>
			</center>
			</div>
			<div class="content-mid">
				
				<table border="1" class="table1">
					<th>Ship Name</th>
					<th>Items</th>
					<th>Country</th>
					<th>Item Brand</th>
					<th>Quantity</th>
					<th>Price</th>
					
					<?php
					$quarry="select * from ships_details";
					$run=mysql_query($quarry);
					
					
					while($row=mysql_fetch_array($run))
					{
						$shipname=$row['Ships_name'];
						$items=$row['Items'];
						$country=$row['Country'];
						$item_brand=$row['Item_brand'];
						$quantity=$row['Quantity'];
						$price=$row['Price'];
						
					
					
					
					?>
					
					<tr>
						<td><?php echo $shipname?></td>
						<td><?php echo $items?></td>
						<td><?php echo $country?></td>
						<td><?php echo $item_brand?></td>
						<td><?php echo $quantity?></td>
						<td><?php echo $price?></td>
						
					</tr>
					<?php
					}
					
					?>
					
					
				</table>
				
				
				
				
				
			</div>
			<div class="content-bot">
				
				<h2>User Details:</h2>
				
				
					
					<table border="1" class="table2">
					<th>User</th>
					<th>Password</th>
					
					<?php
					
					$quarry="select * from login";
					$run=mysql_query($quarry);
					
					
					while($row=mysql_fetch_array($run))
					{
						$user=$row['username'];
						$password=$row['txtpassword'];
						
					?>
					
					
					
					<tr>
						<td><?php echo $user?></td>
						<td><?php echo $password?></td>
						
					</tr>
					<?php
					}
					
						
					?>
				</table>
				
				
				<div class="line"></div>

				</div>
			
		</section>
		</div>
		</div>
		
		
		
		
		<div class="row">
			<div class="col-sm-12">
				<footer>
				<div class="box1">
				<h3>About ShipYourself</h3>
				<a href="#home">Home</a>·
				<a href="#blog">Blog</a>·
				<a href="login.php">Logout</a>·
				<a href="signup.php">Signup</a>
				<h4>YourChoice design &nbsp;&copy;</h4>
				
					</div>
					<div class="foot-line1"></div>
					<div class="box" id="box2">
					<div class="t2">
						<span class="fa-stack fa-lg ">
				
					<i class="fa fa-circle-thin fa-stack-2x"></i>
					<i class="fa fa-map-marker fa-stack-1x"></i>
			</span>
					<span>21st Street</span> Cilfton, Karachi
				</div>

				<div class="t2">
				<span class="fa-stack fa-lg">
					<i class="fa fa-circle-thin fa-stack-2x"></i>
					<i class="fa fa-phone fa-stack-1x"></i>
					</span>
					+021-1234567
				</div>

				<div class="t2">
					<span class="fa-stack fa-lg">
					<i class="fa fa-circle-thin fa-stack-2x"></i>
					<i class="fa fa-envelope fa-stack-1x"></i>
					
					</span>
					
					<a class="f1" href="mailto:support@company.com">support@company.com</a>
					</div>
					
				</div>
				<div class="foot-line2"></div>
					<div class="box" id="box3">
					<h2>Some Nonsense</h2>
						
					<font color="#A6A6A6"><p>
					This is to inform you that your are not worth to read this discription, cause i can assure you that you aren't gonna pay attention to this side.</p>
					</font>
					</div>
				</footer>
				
				
			</div>
			
			
		</div>
		
		
		
		
		
		
		
		
	</div>
	
	
	
	
	
	
	
	
</div>
</body>
</html>
<?php
}
else {
	echo "<script>window.open('login.php','_self')</script>";
}

?>


