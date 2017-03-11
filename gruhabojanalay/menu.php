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
			<link rel="stylesheet" href="css/fooddisc.css" />
			<link rel="icon" type="image/jpg" href="image/logo.jpeg" />			
			<title>Gruhabojanaly</title>
			<meta charset='UTF-8'>
			<script src="js/jquery-1.11.3.min.js"></script>
			<script src="js/jquery.leanModal.min.js"></script>
			<link rel="stylesheet" href="css/floatsign.css" />
			<link rel="stylesheet" href="css/dropdown.css" />

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
		<div id="feedback">
			<a href="feedback.php">feedback</a>
		</div>
		<?php
			$query="SELECT * FROM Food";
			$result=mysqli_query($con,$query);
		?>
		<?php				
			while($row = mysqli_fetch_assoc($result))
			{	
				
				echo '<div class="details" style="width:100%; height:300px; margin-left:0px; margin-top:20px;">';
				echo'<div class="one" >';				
				echo'<img  class="food" src="image/food/'.$row['IMG_SRC'].'"';
				echo 'title="'.$row['EXTRAS'].'"/></div>';
				echo '<div class="food_disp">';
				require_once("discription/".$row['DISP_PAGE']);
				echo '</div>';
				echo'<div class="price">';
				echo'PRICE :Rs.'.$row['PRICE'];				
				echo '/-</div>';
				echo '</div>';				
				}
		?>
		<?php
		echo"<footer>
		<nav><a>Gruhabojanaly Copyright © </a></nav>
		</footer>";
		?>
		
	</body>
	<?php
		mysqli_close($con); 
	?>
</html>
	
