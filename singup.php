<?php 
	
	include_once 'connection.php';

	//Getting the input form the form
	if (isset($_POST['reg_submit'])) 
	{

		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email']; 
		$uname = $_POST['uname'];
		$phone = $_POST['phone'];
		$add =   $_POST['add'];
		$cpassword = $_POST['confirm_password'];
		$password = $_POST['password'];
		$citytemp = $_POST['city'];
		$city = strtolower($citytemp);
		$state = $_POST['state'];
		$pincode = $_POST['pincode'];
		$dob = date($_POST['dob']);

		if(strcmp($password,$cpassword) == 0)
		{
			
			if (isset($conn)) 
			{
				$q="INSERT INTO customer(C_id,F_name,L_name,Username,Password,Address,City,State,Pincode,Phone,Email,Dob)
					VALUES(0,'$fname','$lname','$uname','$password','$add','$city','$state','$pincode',$phone,'$email','$dob');";
				try
			    {
						$result = mysqli_query($conn,$q);
						$pass = md5($password);
						$q = "INSERT INTO login(Login_id,Username,Password) VALUES(0,'$uname','$pass')";
						$result2=mysqli_query($conn,$q);
						header("Location: login.php?success=success");
			    } 
				catch (Exception $e) 
				{
					echo "<script>Something Went Wrong..</script>";
					echo "$e";
				}
			}
			else
			{
				header("Location: 404.php");
			} 
		}
		else
		{
			header("Location: login.php?error=pass");
		}
	}
	else
	{
		header("Location: 500.php");
	}


 ?>