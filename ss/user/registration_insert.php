<?php


include("include/Database.php"); 
$db = new Database();

if(isset($_REQUEST['sbmt']))
{

	 $Email = $_REQUEST['userEmail'];
	 $Passward = $_REQUEST['userPwd'];
	 $Mobile = $_REQUEST['userMobile'];
	 $Address = $_REQUEST['address'];
	 $Dob = $_REQUEST['dob'];
	 $City = $_REQUEST['city'];
	 $img=$_FILES['image'];
	 $newname =trim($Email);
	 $path = '';	
	    
	     $fname = $img['name'];
		$ftype = $img['type'];
		$ftname = $img['tmp_name'];
		$ferror = $img['error'];
		$fsize = $img['size'];
		$fexten = explode(".",$fname);
		$faexten = strtolower(end($fexten));
		$allow = array('jpg','jpeg','png');

		if (in_array($faexten,$allow))
	    {
			if ($ferror === 0)
			{
				if ($fsize < 5000000)
				{
						$fnewname=$newname.".".$faexten;
						$store = "upload/".trim($fnewname);
						$path = trim($store);
						move_uploaded_file($ftname,$store);
				}
				else
				{
						echo "<script>alert('File Size is must be less than 5Mb')</script>";
				}
			}
			else
			{
					echo "<script>alert('Error While Uploading an image..')</script>";
			}
		}
		else
		{
			echo "<script>alert('You can't upload this $ftype')</script>";
		}
	
	if($Email=="" ||
	  $Passward=="" ||
	  $Mobile=="")
	{
		echo "Data Not Found";
	}else
	{
		//		do insert code for database
		
			$insertQuery = "INSERT INTO `users`(`Email`, `Password`, `Mobile`,`Address`,`City`,`Dob`,`Img`) VALUES ('$Email','$Passward','$Mobile','$Address','$City','$Dob','$path');";
			
			
		
		$rowCount = mysqli_query($db->db_connect(),$insertQuery);
        
			if($rowCount > 0)
			{
				?>
<script>
    alert("Sign up successfully");
    window.location.href = "login.php";

</script>

<?php
			}else{
				echo "Error";
			}
		
	}
	
	
}else
{
	echo "NOT CLICKED";
	header("Location: index.home");
	
}

?>
