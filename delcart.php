<?php
	include_once 'connection.php'; 
	session_start();

		$id=$_GET['id'];
		$uid =$_SESSION['login_id'];

		$sql ="DELETE FROM cart WHERE b_id=$id AND c_id=$uid";
		$result = mysqli_query($conn,$sql);
		if (isset($result)) 
		{
			header("location: shopping-cart.php?deleted");
		}
		else
		{
			header("location: 503.php");
		}
 ?>
 