<?php
	include('../includes/top_user.php');
	include('../includes/connet.php');
	include('../includes/session.php');
	include('../includes/user_data.php');
	if(!isset($_SESSION['username']))
		{
			header('Location:../index.php');
		}
	$con=m_connect('details');
 ?>
<!DOCTYPE html>
<html>
	<head>
			<link href="../css/userStyle.css" rel="stylesheet" />
			<link rel="icon" type="image/jpg" href="../image/logo.jpeg" />			
			<title>Gruhabojanaly</title>
			<meta charset='UTF-8'>
			<script src="../js/jquery-1.11.3.min.js"></script>
			<link rel="stylesheet" href="../css/floatsign.css" />
			<link rel="stylesheet" href="../css/dropdown.css" />
			<link href="../css/user.css" rel="stylesheet" />
	</head>
<body>

	<?php 
		$_SESSION['last_page']="index.php";
		show2();
		
	?>
	<div id="ordernow">
		<a href="../order.php">Order Now</a>
	</div>
	<div id="feedback">
		<a href="../feedback.php">feedback</a>
	</div>
	<div id="contactusb">
		<div style="width:50%;margin:0 auto; color:white;">
		<fieldset><legend style="color:white; font-weight:bold">Change Password</legend>
			<form method="post" action="change_pass.php">
			<label>Enter Old Password :</label><input type="password" name="old_password"/>
			</br></br>
			<label>Enter New Password :</label><input type="password" name="new_password"/>
			</br></br>
			<div style="border-radius:5px; width:20px; margin:0 auto;"><input type="submit" name="submit" value="Confirm"></div>
			</form>
		</fieldset>
		<?php
			if(isset($_POST['old_password'])&&isset($_POST['new_password']))
		{
			$user="'".$_SESSION['userid']."'";
					$old_password=$_POST['old_password'];
					$salt1="a@b";
					$oldtoken=hash('ripemd128',"$salt1$old_password");
					$newpassword=$_POST['new_password'];
					$salt1="a@b";
					$newtoken=hash('ripemd128',"$salt1$newpassword");
					$query="SELECT * FROM User WHERE USER_ID=$user";
					$result=mysqli_query($con,$query);
					$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
					$que="update User set PASSWORD='".$newtoken."' WHERE USER_ID=$user";
					if($oldtoken==$row["PASSWORD"]){
						if(mysqli_query($con,$que))
						{
							echo '<h1 style="color:greenyellow; text-align:center;">Passsword Changed</h1>';
						}
					}
					else{
						echo '<h1 style="color:greenyellow; text-align:center;">Wrong passsword</h1>';
					}
		}
		?>
			</div>
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
