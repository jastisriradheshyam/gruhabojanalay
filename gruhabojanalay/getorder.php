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
			<meta charset='UTF-8'>
			<link rel="stylesheet" href="css/dropdown.css" />
			<script src="js/jquery-1.11.3.min.js"></script>
	</head>
<body>

	<?php
		$con=m_connect('details');
		if(!isset($_SESSION['username']))
		{
		database_user();
			if(!isset($_SESSION['username']))
			{show();}
		}
		else
		{show2();
			
		}
	?>
	<div id="contactusb">
	<div style="margin:0 auto; width:60%; color:white;">
	<?php
		if(isset($_SESSION['username']))
		{
			
		}
		else
		{
			echo "Sign in first";
		}
	?>
	</div>
	</div>
	<div style="hight:10px; width:100%;">&nbsp;</div>

	<footer>
		<nav><a>Gruhabojanaly Copyright © </a></nav>
	</footer>
	
</body>
</html>
