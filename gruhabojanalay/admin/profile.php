	<?php
	include('../includes/top.php');
	include('../includes/session.php');
	include('../includes/connet.php');
	if(!isset($_SESSION['adminuser']))
		{
			header('Location:../index.php');
		}
	$con=m_connect('admin');
	?>
	<!DOCTYPE html>
	<html>
		<head>
			<link href="../css/userStyle.css" rel="stylesheet" />
			<link href="../css/dropdown.css" rel="stylesheet" />
			<meta charset="UTF-8">
		</head>
		<body>
				<?php	
					$_SESSION['last_page']="admin/index.php";
					show3();
				?>
				<div style="width:50%;margin:0 auto;">
			<div id="contactusb">
		<div style="width:50%;margin:0 auto; color:white;">
			<div>Name:<?php echo $_SESSION["adminname"]; ?></div>
			<div>Username:<?php echo $_SESSION["adminuser"]; ?></div>
			<div>ID:<?php echo $_SESSION["adminid"]; ?></div>
			<div>Phone No.:<?php echo $_SESSION['adminphone']; ?></div>
			</div>
			</div></div>
		<div style="hight:10px; width:100%;">&nbsp;</div>
	<footer>
		<nav><a>Gruhabojanaly Copyright © </a></nav>
	</footer>
		</body>
	</html>
