<?php
	include('includes/connet.php');
	include('includes/session.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>log out</title>
</head>
<body>
<?php
	if(isset($_SESSION['username'])||$_SESSION['adminname'])
	{
		$last_page=$_SESSION['last_page'];
		$_SESSION=array();
		session_destroy();
			header('Location:'.$last_page);
	}
	else
	{
		echo "Sorry you are not logged in";
	}
?>
</body>
</html>
