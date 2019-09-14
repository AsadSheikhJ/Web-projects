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
		opacity: 0.70;
		border-radius: 7px 7px 7px 7px;
		box-shadow: 0 5px 46px  black;
	}
	
	.nav1{
		width: 36%;
		height: 60px;
		
	}
	
	.nav2{
		width: 35%;
		height: 60px;
		margin: 0.5%;
		
	}
	.nav3{
		width: 30.2%;
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
		margin-left: 77%;
		display: block;
		height: 50px;
		text-align: center;
		width: 28%;
		
	}
	.logsign-button a{
		text-decoration: none;
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
		margin-left: 1.8%;
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
		box-shadow: 0 5px 46px  black;
	}
	
	
	
	footer{
		height: 300px;
		background-color:white;
		margin: 1%;
		opacity: 0.70;
		border-radius: 7px 7px 7px 7px;
		box-shadow: 0 5px 46px  black;
	
		
	}
	
	
	.content-top{
		width: 100%;
		height:auto;
		border-radius: 7px 7px 0px 0px;
		text-align: center;
		background-color: white;
		padding-top: 1%;
	}
	.pic-box{
		width: 98%;
		height:auto;
		background-repeat: no-repeat;
		background-size: contain;
		margin: 1%;
		margin-bottom: 0;
		
	}
	
	.content-mid h1{
		margin-top: 1.4%;
		margin-left: 32%;
		position: absolute;
		font-weight: 700;
		background-color: white;
		font-size: 380%;
		font-family: Audrey;
		
	}
	
	
	.content-mid{
		width: 100%;
		height: 100px;
		overflow: hidden;
		background-color: white;
		margin-top: 0;
	}
	
	.content-bot p{
		margin: 5%;
		text-align: center;
		font-size: 150%
	}
	
	
	.content-bot{
		width: 100%;
		height: auto;
		background-color:white;
		border-radius: 0px 0px 7px 7px;
		overflow: hidden;
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
		width: 29.9%;
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
		width: 0.06%;
		height: 210px;
		background-color: black;
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
			<div class="pic-box">
			
				<img src="maximilian-weisbecker-121294-unsplash.jpg" style="width: 100%; height: 660px; border-radius: 6px 6px 6px 6px;"></img>
				
			</div>
			
			</div>
			<div class="content-mid">
			<h1>Welcome to ShipYourself</h1>
				
			</div>
			<div class="content-bot">
				
				
				
				<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pretium pellentesque eros, eu tempor turpis dictum a. Mauris eget gravida nibh. Nulla tincidunt, dui sed sollicitudin hendrerit, quam ipsum mollis felis, ut feugiat diam velit et ex. Phasellus dapibus dolor euismod arcu commodo, ut rhoncus mi volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse eget justo velit. Quisque vitae nibh id felis accumsan pulvinar eget quis risus. Vestibulum varius nisi id consequat gravida. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse turpis leo, pulvinar sed vestibulum id, faucibus lobortis odio. Morbi pharetra elementum lectus. Pellentesque ac ante sit amet purus imperdiet cursus quis venenatis turpis. Morbi tempor hendrerit neque sed dictum. Sed at quam facilisis, ornare metus non, blandit mi. Donec tempus libero nec facilisis finibus.<br><br>
				
				Cras pharetra, ex a ultricies suscipit, nunc nulla iaculis sem, at vehicula nisl tortor non sapien. Nunc nec nulla sapien. Praesent leo odio, hendrerit a bibendum at, molestie sed sapien. Nam quis commodo ipsum, ut bibendum odio. Donec quam justo, viverra nec lacus vitae, vulputate interdum turpis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec varius, orci et faucibus placerat, enim velit posuere justo, non condimentum sapien nisl non purus. Suspendisse non accumsan lacus, sit amet euismod lorem. Ut eu viverra magna. Ut venenatis vestibulum mi, ut tristique leo.<br><br>
				
				Donec vel augue sed dui varius eleifend. Sed venenatis tincidunt sapien, vel sagittis purus ultricies vitae. Ut lacinia, ligula vitae convallis laoreet, orci ipsum lobortis eros, nec porta mi justo cursus lectus. Nam ut viverra nibh. Sed vehicula tincidunt nibh, eu finibus felis mollis sed. Duis posuere nisl ac magna ultrices volutpat. In at varius arcu. Etiam scelerisque eros eu sapien imperdiet porttitor. Praesent ornare justo est, at faucibus enim fringilla in. Vivamus vitae dapibus ante.<br><br>
				
				Etiam imperdiet orci ac lorem dictum, a auctor dolor volutpat. Integer dictum ligula ut diam ullamcorper aliquet. Praesent mattis quam erat, nec euismod dolor facilisis ac. Phasellus pulvinar porta lectus sit amet pharetra. Proin ligula ipsum, congue porta molestie non, aliquet et leo. Quisque ut malesuada sapien. Vestibulum efficitur lorem sit amet justo tempus, quis elementum mauris semper. Sed quam metus, tempus euismod tincidunt vel, gravida bibendum justo. In ac nunc sagittis, viverra leo congue, consequat diam. Pellentesque ultrices mi sed justo dignissim mattis in quis nulla. Proin in eros justo.
			</p>	
				
					
				
				
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


