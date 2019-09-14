<?php
session_start();

$_SESSION['logout']="log";

if(isset($_SESSION['login'])){
		?>
<?php
	
include('connection.php');
	
?>


<!doctype html>
<html>
<link rel="stylesheet" type="text/css" href="NewProjectcss.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css"/>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>


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
				
				<a href="home.php">Home</a>
				<a href="ships.php">Ships</a>
				<a href="NewProject.php">Shipment</a>
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
				<a href="logout.php" name="session"><h3>LogOut</h3></a>
				
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
                    <th>update</th>
	                <th>delete</th>

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
                        <td><a href="update.php"></a></td>
                        <td><a href="delete.php"></a></td>
						
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
				<a href="home.php">Home</a>·
				<a href="#blog">Blog</a>·
				<a href="logout.php">Logout</a>·
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


