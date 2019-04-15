<?php 
	if (isset($_POST['submit'])) 
	{
		$name =$_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$msg = $_POST['message'];

		if(mail('bhimani.rutvik1211@gmail','User Response', $msg,"From: $email"))
		{
			if(mail($email,'Thank You For Response','Your Response has been reached.It important to us and we defiantly take action. Thank From Bookmybook',"From: bhimani.rutvik1211@gmail.com"))
			{
				header("location: contact.php?send");
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
	else
	{
		header("location: 404.php");
	}
 ?>