<?php 
	
	include_once '../connection.php';

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

	if (isset($conn)) 
	{
		$sql = "INSERT INTO customer(C_id,F_name,L_name,Username,Password,Address,City,State,Pincode,Phone,Email,Dob) VALUES(0,'$fname','$lname','$uname','$pass','$add','$city','$state','$pincode','$phone','$email','$dob');";
		$result=mysqli_query($conn,$sql);

		$sql1 = "INSERT INTO login(Login_id,Username,Password) VALUES(0,'$uname','$newpass')";
		$result1 = mysqli_query($conn,$sql1);

		if (isset($result) AND isset($result1)) 
		{
			header("location: ../view_user.php");	
		}
		else
		{
			header("location: ../400.php"); 
	   }
	}
	else
	{
		header("location: ../500.php");
	}
 ?>		
