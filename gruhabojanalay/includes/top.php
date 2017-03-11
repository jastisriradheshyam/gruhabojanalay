<?php
	function show(){	 
	  echo'<div id="setthis">
		<div style="height:10px; width:100%;">&nbsp;</div>
		<div id="logo"><img src="image/logo.jpeg" height=85 width=95 id="logoimg" /></div>
		<div id="sitename">
				<p>Gruhabojanalay</p>
		</div>
		<div id="login" >
		<!--This is login div-->
		<form action="'.basename($_SERVER["PHP_SELF"]).'" method="post" id="forml" >
		<label  class="label" >User Name:</label>

		<input type="text" class="text" id="tbox" name="username" placeholder="ENTER USER NAME" title=" ENTER THE USER NAME" required/>
		</br>
		<label class="label" >&nbsp Password: </label>
	
		<input type="password" class="pass"  id="tbox" name="pass" placeholder="ENTER PASSWORD " title=" ENTER THE PASSWORD"  required/>
		<div id="sign">Do not have account?<a id="modal_trigger" href="#modal">Sign Up</a></div>
		<div id="submitf"><input type="submit" class="submit" name="submitf" value="LOGIN" /></div>
		
		</form>
		</div>
		<div style="font-size=1px;">&nbsp;</div>
		<!--This is header-->	
		<div>	
		<header>
			<nav>
		<a href="index.php"> Home </a>
		<a href="aboutus.php" > Our Story </a>
		<a href="contactus.php" > Contact Us </a>
		<a href="menu.php"> Menu Card </a>
			</nav>	
		</header>
		</div>
		</div>
		<div style="height:150px; width:100%;">&nbsp;</div>
		<div class="container">
		<script>	$(document).ready(function(){			
				$("#password, #username").keydown(function(e) { // Dont allow users to enter spaces for their username and passwords
					if (e.which == 32) {
						return false;
			  		}
				});
				$("#password").keyup(function() { // As same using keyup function for get user action in input
				var PasswordLength = $(this).val().length; // Get the password input using $(this)
				var PasswordStrength = $("#password_strength"); // Get the id of the password indicator display area
		
				if(PasswordLength <= 0) { // Check is less than 0
					PasswordStrength.html(""); // Empty the HTML
					PasswordStrength.removeClass("normal weak strong verystrong"); //Remove all the indicator classes
				}
				if(PasswordLength > 0 && PasswordLength < 4) { // If string length less than 4 add "weak" class
					PasswordStrength.html("weak");
					PasswordStrength.removeClass("normal strong verystrong").addClass("weak");
				}
				if(PasswordLength > 4 && PasswordLength < 8) { // If string length greater than 4 and less than 8 add "normal" class
					PasswordStrength.html("Normal");
					PasswordStrength.removeClass("weak strong verystrong").addClass("normal");			
				}	
				if(PasswordLength >= 8 && PasswordLength < 12) { // If string length greater than 8 and less than 12 add "strong" class
					PasswordStrength.html("Strong");
					PasswordStrength.removeClass("weak normal verystrong").addClass("strong");
				}
				if(PasswordLength >= 12) { // If string length greater than 12 add "verystrong" class
					PasswordStrength.html("Very Strong");
					PasswordStrength.removeClass("weak normal strong").addClass("verystrong");
				}
			});
		});
		</script>

	<div id="modal" class="popupContainer" style="display:none;">
			<div>
			<div style="width:90%; font-size:30px; color:#777; text-align:center; height:35px" ><span class="header_tit">Hi, Guest</span></div>
			<div style="width:10%;margin-right:2px; height:35px; float:right;"><span class="modal_close"><i>x</i></span></div>
			</div>
		<section class="popupBody">
			<div class="Guest">
				<div class="action_btns">
					<div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>
					<div class="one_half last"><a href="#" id="register_form" class="btn">Sign up</a></div>
				</div>
			</div>

			<!-- Username & Password Login form -->
			<div class="user_login">
				<form method="POST" action="'.basename($_SERVER["PHP_SELF"]).'">
					<label>Email / Username</label>
					<input type="text" name="username"/>
					<br />

					<label>Password</label>
					<input type="password" name="pass"/>
					<br />

					<div class="checkbox">
						<input id="remember" type="checkbox" />
						<label for="remember">Remember me on this computer</label>
					</div>

					<div class="action_btns">
						<div class="one_half"><a href="#" class="btn back_btn"><i>&lt;&lt;</i> Back</a></div>
						<div class="one_half last"><input class="btn btn_red" type="submit" value="login"/></div>
					</div>
				</form>

				<a href="#" class="forgot_password">Forgot password?</a>
			</div>

			<!-- Register Form -->
			<div class="user_register">
				<form method="POST" action="Signup.php">
					<label>User Name</label>
					<input type="text" name="name"/>
					<br />

					<label>Email Address</label>
					<input type="email" name="email"/>
					<br />


					<div class="action_btns">
						<div class="one_half"><a href="#" class="btn back_btn"><i>&lt;&lt;</i> Back</a></div>
						<div class="one_half last"><input class="btn btn_red" type="submit" value="Register"/></div>
					</div>
				</form>
			</div>
		</section>
	</div>
</div>

<script type="text/javascript">
	$("#modal_trigger").leanModal({top : 200, overlay : 0.6, closeButton: ".modal_close" });

	$(function(){
		// Calling Login Form
		$("#login_form").click(function(){
			$(".Guest").hide();
			$(".user_login").show();
			$(".header_tit").text("Login");
			return false;
		});

		// Calling Register Form
		$("#register_form").click(function(){
			$(".Guest").hide();
			$(".user_register").show();
			$(".header_tit").text("Register");
			return false;
		});

		// Going back to Social Forms
		$(".back_btn").click(function(){
			$(".user_login").hide();
			$(".user_register").hide();
			$(".Guest").show();
			$(".header_tit").text("Hi, Guest");
			return false;
		});

	})
</script>
		
';}
	function show1(){	 
	  echo'<div id="setthis">
		<div style="height:10px; width:100%;">&nbsp;</div>
		<div id="logo"><img src="image/logo.jpeg" height=85 width=95 id="logoimg" /></div>
		<div id="sitename">
				<p>Gruhabojanalay</p>
		</div>
		<div id="login" >
		
		</div>
		<div style="font-size=1px;">&nbsp;</div>
		<!--This is header-->	
		<div>	
		<header>	
			<nav>
		<a href="index.php" > Home </a>
		<a href="aboutus.php" > Our Story </a>
		<a href="contactus.php" > Contact Us </a>
		<a href="menu.php"> Menu Card </a>
			</nav>	
		</header>
		</div>
		</div>
		<div style="height:150px; width:100%;">&nbsp;</div> 
		
';}
	function show2(){	 
	  echo'<div id="setthis">
		<div style="height:10px; width:100%;">&nbsp;</div>
		<div id="logo"><img src="image/logo.jpeg" height=85 width=95 id="logoimg" /></div>
		<div id="sitename">
				<p>Gruhabojanalay</p>
		</div>
		<div id="login" >
			<div id="login_s">Hi,'.$_SESSION["name"].' &nbsp;
			</div>
			<div id="other_act">
						<div>
						<ul>
						<li>
						    User
						    <ul>
						      <li><a href="user/profile.php">Profile</a></li>
						      <li><a href="user/orders.php">Your Orders</a></li>
						      <li><a href="user/change_pass.php">Change Password</a></li>
						      <li style="color:red;"><a href="signout.php">Sign out</a></li>
						    </ul>
						  </li>
						 </ul>
						</div>
				</div>
		</div>
		<div style="font-size=1px;">&nbsp;</div>
		<!--This is header-->	
		<div>	
		<header>	
			<nav>
		<a href="index.php" > Home </a>
		<a href="aboutus.php" > Our Story </a>
		<a href="contactus.php" > Contact Us </a>
		<a href="menu.php"> Menu Card </a>
			</nav>
		</header>
		</div>
		</div>
		<div style="height:150px; width:100%;">&nbsp;</div>
		
';}
	function show3(){	 
	  echo'<div id="setthis">
		<div style="height:10px; width:100%;">&nbsp;</div>
		<div id="logo"><img src="../image/logo.jpeg" height=85 width=95 id="logoimg" /></div>
		<div id="sitename">
				<p>Gruhabojanalay</p>
		</div>
		<div id="login" >
			<div id="login_s">Hi,'.$_SESSION["adminname"].' &nbsp;
			</div>
			<div id="other_act">
						<div>
						<ul>
						<li>
						    Admin
						    <ul>
						      <li><a href="profile.php">Profile</a></li>
						      <li><a href="add_user.php">Add User</a></li>
						      <li><a href="orders.php">Orders</a></li>
						      <li><a href="change_pass.php">Change Password</a></li>
						      <li style="color:red;"><a href="../signout.php">Sign out</a></li>
						    </ul>
						  </li>
						 </ul>
						</div>
				</div>
		</div>
		<div style="font-size=1px;">&nbsp;</div>
		<!--This is header-->	
		<div>	
		<header>	
			<nav>
		<a href="../index.php" > Home </a>
		<a href="../aboutus.php" > Our Story </a>
		<a href="../contactus.php" > Contact Us </a>
		<a href="../menu.php"> Menu Card </a>
			</nav>
		</header>
		</div>
		</div>
		<div style="height:150px; width:100%;">&nbsp;</div>
		
';}

?>
