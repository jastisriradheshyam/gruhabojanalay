<?php
	include('includes/top.php');
	include('includes/connet.php');
	include('includes/session.php');
	include('includes/user_data.php');
 ?>
<!DOCTYPE html>
<html>
	<head>
			<link href="css/userStyle.css" rel="stylesheet" />
			<link rel="icon" type="image/jpg" href="image/logo.jpeg" />			
			<title>Gruhabojanaly</title>
			<meta charset='UTF-8'>
			<script src="js/jquery-1.11.3.min.js"></script>
			<script src="js/jquery.leanModal.min.js"></script>
			<link rel="stylesheet" href="css/dropdown.css" />
			<link rel="stylesheet" href="css/floatsign.css" />
	</head>
<body>

	<?php 
		if(!isset($_SESSION['username']))
		{
		$con=m_connect('details');
		database_user();
			if(!isset($_SESSION['username']))
			{show();}
		}
		if(isset($_SESSION['username']))
		{show2();
		}
	
	?>
	<div id="ordernow">
		<a href="order.php">Order Now</a>
	</div>
	<div id="feedback">
		<a href="feedback.php">feedback</a>
	</div>
	<div id="contactusb">
		<h1>  Our Corporate address:</h1><a>HMRITM</a>
		<h1>  Our Helpline:</h1><a>011-245678</a>
		<h1>  Our Helpline Email-address:</h1><a>csd@somedomain.com</a>
	</div>
	<div style="hight:10px; width:100%;">&nbsp;</div>
	<footer>
		<nav><a>Gruhabojanaly Copyright © </a></nav>
	</footer>
</body>
	<?php
		mysqli_close($con); 
	?>
</html>
