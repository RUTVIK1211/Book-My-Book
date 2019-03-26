<?php 
	include_once 'connection.php';
	$id = $_GET['id'];
	$q= "DELETE FROM coupon WHERE co_id=$id";
	$result = mysqli_query($conn,$q);

	if($result  > 0)
	{
		 header("Location: inscoupon.php?mess=sucessfull");
	}
	else
	{
		 header("Location: inscoupon.php?mess=unsucessfull");
	}
 ?>