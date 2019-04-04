<?php 
	
	include_once '../connection.php';

	$fname =$_POST['fname'];
	$lname=$_POST['lname'];
	$email = $_POST['email'];
	$phone =$_POST['phone'];
	$uname = $_POST['uname'];
	$pass = $_POST['password'];
	$add = $_POST['address'];
	$city = $_POST['city'];
	$state = $_POST['state'];	
	$pin = $_POST['pin'];
	$dob =  $_POST['dob'];

	if (!isset($conn)) 
	{
			
	}
	else
	{
		header("location: ../500.php");
	}
 ?>