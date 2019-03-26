<?php 
	include_once 'connection.php';
	if (isset($_POST['update'])) 
	{
		/*
		Fetching cart data for particular user
		 */
		$cid=$_GET['id'];
		$sql ="SELECT * FROM cart WHERE c_id=$cid";
		echo ($_POST['quantity']);
		echo "fuck";
		$result = mysqli_query($conn,$sql) or die("error inside the query");
		
	}
	else
	{
		header("location: shopping-cart.php");
	}
 ?>