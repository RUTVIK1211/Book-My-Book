<?php
	$conn = mysqli_connect("localhost","root","","bookmybooktest");
	if (!isset($conn)) 
	{
		header("location: 500.php");
	}
 ?>
 