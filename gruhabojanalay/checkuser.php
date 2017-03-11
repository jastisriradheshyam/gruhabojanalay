<?php
require_once 'includes/connet.php';
if (isset($_POST['user']))
{
	$con=m_connect('details');
$user = "'".$_POST['user']."'";
$result = mysqli_query($con,"SELECT * FROM User WHERE USER_NAME=$user");
if ($result->num_rows)
echo "<span class='taken'>&nbsp;&#x2718; " .
"This username is taken</span>";
else
echo "<span class='available'>&nbsp;&#x2714; " .
"This username is available</span>";
}
?>