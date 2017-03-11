<?php
	include('../includes/connet.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Admin Panel</title>
		<meta charset="utf-8">
		
	</head>
	<body>
		<?php
			$conn=m_connect('admin');
			$query="SELECT * FROM adminuser";
			$result=mysqli_query($conn,$query);
				$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
				echo $row["PASSWORD"];
			
		?>
		
	
</html>
<?php
	mysqli_close($conn);
	?>