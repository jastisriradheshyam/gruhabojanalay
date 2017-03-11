<?php
	function database_user()
	{$con=m_connect('details');
		if(isset($_POST['username'])&&($_POST['username']!=='')&&($_POST['pass']!==''))
		{	
			
			$user=$_POST['username'];
			$query="SELECT * FROM User WHERE USER_NAME='".$user."'";
			$result=mysqli_query($con,$query);
			$password=$_POST['pass'];
			$salt1="a@b";
			$token=hash('ripemd128',"$salt1$password");
			$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
			if($token==$row["PASSWORD"])
			{
				ini_set('session.gc.maxlifetime', 60*60*24);
				$_SESSION['username']=$user;
				$_SESSION['password']=$password;
				$_SESSION['name']=$row['NAME'];
				$_SESSION['address']=$row['ADDRESS'];
				$_SESSION['email']=$row['E_MAIL'];
				$_SESSION['phoneno']=$row['PHONE_NO'];
				$_SESSION['userid']=$row['USER_ID'];
				$_SESSION['last_page']="index.php";
				$_SESSION['success']="yes";
				$_SESSION['orderno']=0;
			}
			}
	}
	?>
