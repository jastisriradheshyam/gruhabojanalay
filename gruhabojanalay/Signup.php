<?php
	include('includes/top.php');
	include('includes/connet.php');
	include('includes/session.php');
	include('includes/user_data.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset='UTF-8'>
		<script src="js/jquery-1.11.3.min.js"></script>
		<link href="css/signup.css" rel="stylesheet" />
		<script>	$(document).ready(function(){			
				$('#password, #username').keydown(function(e) { // Dont allow users to enter spaces for their username and passwords
					if (e.which == 32) {
						return false;
			  		}
				});
				$('#password').keyup(function() { // As same using keyup function for get user action in input
				var PasswordLength = $(this).val().length; // Get the password input using $(this)
				var PasswordStrength = $('#password_strength'); // Get the id of the password indicator display area
		
				if(PasswordLength <= 0) { // Check is less than 0
					PasswordStrength.html(''); // Empty the HTML
					PasswordStrength.removeClass('normal weak strong verystrong'); //Remove all the indicator classes
				}
				if(PasswordLength > 0 && PasswordLength < 4) { // If string length less than 4 add 'weak' class
					PasswordStrength.html('weak');
					PasswordStrength.removeClass('normal strong verystrong').addClass('weak');
				}
				if(PasswordLength > 4 && PasswordLength < 8) { // If string length greater than 4 and less than 8 add 'normal' class
					PasswordStrength.html('Normal');
					PasswordStrength.removeClass('weak strong verystrong').addClass('normal');			
				}	
				if(PasswordLength >= 8 && PasswordLength < 12) { // If string length greater than 8 and less than 12 add 'strong' class
					PasswordStrength.html('Strong');
					PasswordStrength.removeClass('weak normal verystrong').addClass('strong');
				}
				if(PasswordLength >= 12) { // If string length greater than 12 add 'verystrong' class
					PasswordStrength.html('Very Strong');
					PasswordStrength.removeClass('weak normal strong').addClass('verystrong');
				}
			});
		});
		</script>
	</head>
	<body>
		<?php
			$flag_session=0;
			if(isset($_SESSION['username']))
			{	show2();
				$flag_session=1;
			}
			else{
			show1();
			if(isset($_POST['sub'])){
			if(($_POST['signname']!='')&&($_POST['password']!='')&&($_POST['signemail']!='')&&($_POST['username']!='')&&($_POST['signaddress']!='')){
				$con=m_connect("details");
						echo "hello";
						$hip="'";
						$password=$_POST['password'];
						$username=$hip.$_POST['username'].$hip;
						$name=$hip.$_POST['signname'].$hip;
						$phone=$hip.$_POST['signphone'].$hip;
						$mail=$hip.$_POST['signemail'].$hip;
						$addr=$hip.$_POST['signaddress'].$hip;
						$salt1="a@b";
						$token=hash('ripemd128',$salt1.$password);
						$token=$hip.$token.$hip;
						
						$query="INSERT INTO User(NAME,USER_NAME,PASSWORD,PHONE_NO,E_MAIL,ADDRESS) VALUES($name,$username,$token,$phone,$mail,$addr)";
						mysqli_query($con,$query);
						$_POST['signname']=NULL;
						$_POST['password']=NULL;
						$_POST['signemail']=NULL;
						$_POST['username']=NULL;
						$_POST['signaddress']=NULL;
					}}
				}
		?>
		<div id="contactusb" style="width:50%;">
			
			<?php
			if($flag_session===1)
			{
				echo '<h2 style="text-align:center;">Already Signed in as '.$_SESSION['username'].'</h2>';
			}
			else{
			echo '<h1 style="text-align:center;">Sign Up</h1>
				<form method="post" action="Signup.php" id="signform">
				<label>&nbsp; &nbsp; &nbsp;Name:&nbsp;</label>
				<input type="text" name="signname" id="name"/>
				</br></br>				
				<label>&nbsp; &nbsp; &nbsp;User Name:&nbsp;</label>
				<input type="text" name="username" id="username" value="'.$_POST['name'].'"/>
				</br></br>
				<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-Mail:&nbsp;</label>
				<input type="text" name="signemail" id="txt" value="'.$_POST['email'].'"/>
				</br></br>
				<label>&nbsp;&nbsp;Phone No.:&nbsp;</label>
				<input type="text" name="signphone" id="phonetxt">
				</br></br>		
				<label>&nbsp;&nbsp;&nbsp;Address:&nbsp;</label>
				<input type="text" name="signaddress" id="addrtxt">
				</br></br>
				<label>Password:&nbsp;</label>
				<input type="password" name="password" id="password">
				<div class="password_strength" id="password_strength"></div>
				</br>
				</br>
				<div id="submitf"><input name="sub" type="submit" value="Sign Up" id="ssubmit"/></div>
				</div>
			</form>';}
			?>
		</div>
				<?php
					mysqli_close($con);
				?>	
	</body>
</html>
