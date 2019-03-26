<?php 
session_start();
	$name = $_POST['name'];
	$pass = $_POST['password'];
	if (strcasecmp($name,"admin")==0 AND strcasecmp($pass,"admin123")==0)
	{
		$_SESSION['admin'] = $name;
		header("location: ../index.php?success");
	}
	else
	{
		header("location: ../login.php?error");
	}

 ?>