<?php 
include_once 'connection.php';
session_start();
if(isset($conn))
{
	if (isset($_POST['submit'])) 
	{
 		$code = $_POST['coupon'];
 		$amount = $_POST['amount'];
 		$code = strtolower($code);
 		$sql = "SELECT * FROM coupon where coupon='$code'";
 		$result = mysqli_query($conn, $sql) or die("error in query");
 		$count  = mysqli_num_rows($result) ;
 		if ($count >0) 
 		{
 			$row = mysqli_fetch_assoc($result);
 			$discount = $row['amount'];
 			$total = $amount-$discount;
 			if ($total<0) 
 			{
 					$total = 0;
 			}
 			$_SESSION['coupon']['amount'] = $total;
 			$_SESSION['coupon']['id']= $row['co_id'];
 			header("location: shopping-cart.php?Success");
 		}
 	 else
 		{
 			header("location: shopping-cart.php?error");
 		}
	}
}
else
{
		header("location: 500.php");
}
?>