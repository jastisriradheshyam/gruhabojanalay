<?php
	include('../includes/connet.php');
	include('../includes/session.php');
	$con=m_connect("admin");
	if(isset($_SESSION['adminuser']))
			{
				header('Location:admin.php');
			}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Admin Panel</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="../css/adminl.css">
		
	</head>
	<body>
		
		</br>
		</br>
		</br>
		</br>
		<div id="adminh">
			<h1>Admin Login</h1>
		</div>
		<div style="height:300px;"class="wrapper">
			<form action="index.php" method="post" id="alogin">
				</br>
				</br>
				<label id="label">&nbsp; User ID:</label>
				<input type="text" class="username" id="tbox" paceholder="User name" name="ausername"/>
				</br>
				<label id="label">Password:</label>
				<input type="password" class="password" id="tbox" palceholder="password" name="apassword"/>
				</br>
				<input type="submit" class="button" id="button" value="login" name="asubmit"/>
				<?php
			
					/*For admin autorization*/
					if((isset($_POST['ausername']))&&(isset($_POST['asubmit'])))
					{
					$user="'".$_POST['ausername']."'";
					$password=$_POST['apassword'];
					$salt1="a@b";
					$token=hash('ripemd128',"$salt1$password");
					$query="SELECT * FROM Admin WHERE USER_NAME=$user";
					$result=mysqli_query($con,$query);
					$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
					if($token==$row["PASSWORD"]){
						$_SESSION['adminuser']=$row['USER_NAME'];
						$_SESSION['adminname']=$row['NAME'];
						$_SESSION['adminphone']=$row['PHONE'];
						$_SESSION['adminid']=$row['ID'];
						$_SESSION['last_page']="index.php";
						header('Location:profile.php');
					}
					else{
						echo '<h1 style="color:greenyellow; text-align:center;">wrong passsword/username</h1>';
					}
					}
				?>
			</form>
		</div>
			
		<?php
	mysqli_close($con);
		?>
	</body>
	
</html>
