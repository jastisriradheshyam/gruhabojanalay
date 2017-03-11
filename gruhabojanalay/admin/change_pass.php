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
			$admin="'".$_SESSION['adminid']."'";
					$old_password=$_POST['old_password'];
					$salt1="a@b";
					$oldtoken=hash('ripemd128',"$salt1$old_password");
					$newpassword=$_POST['new_password'];
					$salt1="a@b";
					$newtoken=hash('ripemd128',"$salt1$newpassword");
					$query="SELECT * FROM Admin WHERE ID=$admin";
					$result=mysqli_query($con,$query);
					$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
					$que="update Admin set PASSWORD='".$newtoken."' WHERE ID=$admin";
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
