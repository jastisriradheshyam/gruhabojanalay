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
			<link href="css/feed.css" rel="stylesheet" />
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
	<div id="ordernow">
		<a href="order.php">Order Now</a>
	</div>
	<div id="contactusb" style="width:500px;">
	<fieldset>
	<legend style="color:white;">Feed Back</legend>
		<?php
		if(isset($_POST['submit']))
		{
			$name=$_POST['fname'];
			$email=$_POST['femail'];
			$sug=$_POST['ftext'];
			if(mysqli_query($con,"INSERT INTO feedback(NAME,EMAIL,SUGGESTION) VALUES('$name','$email','$sug')"))
			{
				echo "sucessful!!";
			}
			else{
				echo "failed";
			}
		}
		else{
			echo'<form method="post" action="feedback.php" id="feedform">
			<label>Name:</label>
			<input type="text" name="fname" id="txt"/>
			</br>	
			<label>E-Mail:</label>
			<input type="email" name="femail" id="txt"/>
			</br>			
			<label>Suggestion:</label></br>
			<textarea name="ftext" cols="30" rows="10"></textarea>
			</br>
			<div id="sub">
			<input type="submit" value="submit" name="submit" id="fsubmit"/>
			</div>
		</form>';}
		?>
	</fieldset>
	</div>
	<div style="hight:10px; width:100%;">&nbsp;</div>
	<footer>
		<nav><a>Gruhabojanaly Copyright © </a></nav>
	</footer>
</body>
</html>
