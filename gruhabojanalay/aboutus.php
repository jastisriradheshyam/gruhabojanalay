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
	<div id="images" style="margin-left:20%;">
	<img src ="image/person.png"/ style="margin-right:15px;">
	<img src ="image/person.png"style="margin-right:15px;"/>
	<img src ="image/person.png" style="margin-right:15px;"/>
	</div>
	<div >
	<div style="display:inline; margin-left:25% ; margin-right:10%;">J S RADHE SHYAM</div>
	<div style="display:inline; margin-right:10%;">VIDIT</div>
	<div style="display:inline;">HIMANSHU</div>
	</div>
	<div class="details" style="margin-left:20%; margin-top:20px; color:green"><h2>This is created by HMRITM students</h2></div>

	<footer>
		<nav><a>Gruhabojanaly Copyright © </a></nav>
	</footer>
	<?php
		mysqli_close($con); 
	?>
</body>
</html>
