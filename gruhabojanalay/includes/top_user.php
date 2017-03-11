<?php
function show2(){	 
	  echo'<div id="setthis">
		<div style="height:10px; width:100%;">&nbsp;</div>
		<div id="logo"><img src="../image/logo.jpeg" height=85 width=95 id="logoimg" /></div>
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
						      <li>Profile</li>
						      <li>Your Orders</li>
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