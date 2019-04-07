<?php
	session_start();
	include_once '../connection.php';

	if (isset($_SESSION['admin']))
	 {	
		$fname =$_POST['fname'];
		$lname=$_POST['lname'];
		$email = $_POST['email'];
		$phone =$_POST['phone'];
		$uname = $_POST['uname'];
		$pass = $_POST['password'];
		$newpass = md5($pass);
		$add = $_POST['address'];
		$city = $_POST['city'];
		$state = $_POST['state'];	
		$pin = $_POST['pin'];
		$dob =  $_POST['dob'];

		$sql = "UPDATE customer SET F_name='$fname',L_name='$lname',Email='$email',Phone='$phone',Username='$uname',Password='$pass',Address='$add',City='$city',State='$state',Pincode='$pin',DOB='$dob'";
		$result=mysqli_query($conn,$sql) ;

		if (isset($result))
		 {
			header("location: ../view_user.php");
		}
		else
		{
			header("location: 400.php");
		}

	 }	
	else
	 {
	 	header("location: login.php");
	 }

 ?>