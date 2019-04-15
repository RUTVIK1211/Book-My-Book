<?php
	session_start();
	include_once '../connection.php';

	if (isset($_SESSION['admin']))
	 {	
		
		$b_id= $_POST['b_id'];
		$b_name= $_POST['b_name'];
		$b_publisher= $_POST['b_publisher'];
		$b_edition= $_POST['b_edition'];
		$b_isbn= $_POST['b_isbn'];
		$b_page= $_POST['b_page'];
		$b_price= $_POST['b_price'];
		$b_img= $_POST['b_img'];
		$b_author= $_POST['b_author'];
		$b_description= $_POST['b_description'];
		$b_category= $_POST['b_category'];

		$sql = "UPDATE book SET b_name='$b_name',b_publisher='$b_publisher',b_edition='$b_edition',b_isbn='$b_isbn',b_page=$b_page,b_price=$b_price,b_author='$b_author',b_description='$b_description',b_category='$b_category' WHERE b_id= $b_id";


		if (isset($result))
		 {
			header("location: ../view_book.php");
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