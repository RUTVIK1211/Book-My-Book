<?php 
	session_start();
	include_once 'connection.php';
	if (isset($_SESSION['user']))
	{
		
		if (isset($_POST['submit']))
		{
			
			 if (isset($_SESSION['amount'])) 
			 {
				$fname = $_POST['fname']; 
				$lname = $_POST['lname'];
				$name =$fname;
				$add = $_POST['add']; 
				$city = $_POST['city'];
				$pincode = $_POST['pincode'];
				$email = $_POST['email'];
				$phone = $_POST['phone'];
    			$user = $_SESSION['user'];
    			$userid = (integer)$_SESSION['login_id'];
    			$date = date("d-m-Y");
    			$amount = $_SESSION['amount'];                                   

    			//Generating the Order
    			
    			if (isset($conn)) 
    			{
    			
    				$sql ="INSERT INTO order_master(O_id,C_id,Username,Name,Phone,Address,City,O_date,Pincode,Netprice) VALUES(0,$userid,'$user','$name','$phone','$add','$city','$date',$pincode,$amount);";

    				$result = mysqli_query($conn,$sql) or die("Error: 007");

    				if (isset($result)) 
    				{
    					//here redirect requires to order page 
    					echo "<script>alert('Data Inserted Successfully')</script>";
    					$sql1 = "DELETE FROM cart WHERE c_id=$userid";
    					$result1 = mysqli_query($conn,$sql1);
    				}
    			}
    			else
    			{
    				header("location: 500.php");
    			}
			
			}
			else
			{
				header("location: 500.php");
			}
		}
	}
	else
	{
		header("location: index.php");
	}
?>