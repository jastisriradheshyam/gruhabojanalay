	<?php
	include('../includes/top.php');
	include('../includes/session.php');
	include('../includes/connet.php');
	?>
	<!DOCTYPE html>
	<html>
		<head>
			<link href="../css/userStyle.css" rel="stylesheet" />
			<link href="../css/dropdown.css" rel="stylesheet" />
		</head>
		<body>
				<?php	
					$_SESSION['last_page']="admin/index.php";
					show3();
				?>
				<div style="width:50%;margin:0 auto;">
			<div>Name:<?php echo $_SESSION["adminname"]; ?></div>
			<div>Username:<?php echo $_SESSION["adminuser"]; ?></div>
			<div>ID:<?php echo $_SESSION["adminid"]; ?></div>
			<div>Phone No.:<?php echo $_SESSION['adminphone']; ?></div>
			</div>
			
		</body>
	</html>
