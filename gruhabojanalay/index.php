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
			<style>
		#ourspecial {
		    margin: 80px auto;
		    position: relative;
		    width: 340px;
		    height: 240px;
		    padding: 10px;
		    box-shadow: 0 0 20px rgba(0,0,0,0.4);
		}

		#ourspecial > div {
		    position: absolute;
		    top: 10px;
		    left: 10px;
		    right: 10px;
		    bottom: 10px;
		}
		</style>
		<script>
		$(function() {

			$("#ourspecial > div:gt(0)").hide();

			setInterval(function() {
			  $('#ourspecial > div:first')
			    .fadeOut(1000)
			    .next()
			    .fadeIn(1000)
			    .end()
			    .appendTo('#ourspecial');
			},  3000);

		});
	</script>
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
	<div id="feedback">
		<a href="feedback.php">feedback</a>
	</div>
	<div id="ordernow">
		<a href="order.php">Order Now</a>
	</div>
	<div style="text-align:center;">
		<h1>Our special</h1>
		<a href="order.php"><h4>Order Now</h4></a>
	</div>
	<div id="ourspecial">
		<div>
	    		 <img src="image/logo.jpeg" height=240px, width=340px>
  		</div>
		 <div>
	    		 <img src="image/cholebature.jpeg" height=240px, width=340px>
		 </div>
		 <div>
	    		 <img src="image/idli.jpg" height=240px, width=340px>
		 </div>
		
	</div>
	saasasa,</br>
	sasasasa</br>
	</br>
	</br>
	<footer>
		<nav><a>Gruhabojanaly Copyright © </a></nav>
	</footer>
	
</body>
	<?php
		mysqli_close($con);
	?>
</html>
