	<?php 
include_once 'connection.php';
if (isset($_GET['id'])) 
{
	$id = $_GET['id'];
	$sql = "DELETE FROM customer WHERE  C_id='$id'";
	$sql2 = "DELETE FROM login WHERE Login_id='$id'";

	$result = mysqli_query($conn,$sql);
	$result2=mysqli_query($conn,$sql2);

	if (isset($result) AND isset($result2)) 
	{
	  header("location: /view_user.php");
	} 
}
else
{
	header("location: /index.php");
}
?>