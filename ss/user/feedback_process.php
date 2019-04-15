<?php 
session_start();
$c = $_SESSION['counter'];
if($c<2)
{
	if (isset($_POST['submit'])) 
	{
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$title=$_POST['title'];
		$feed=$_POST['feed'];

		$conn=mysqli_connect("localhost","root","","story_database");
		$sql ="INSERT INTO feedback(f_id,email,phone,Title,msg) VALUES(0,'$email','$phone','$title','$feed')";
		$result1 = mysqli_query($conn,$sql);
		if(isset($result1))
		{
			$_SESSION['counter'] +=1;
			$_SESSION['time']=time();
		?>
			<script>
            alert("Your Response has been successfully send😊😊");
            window.location.href = "feedback.php";
          </script>
		<?php 
		}
		else
		{
		?>
		<script>
            alert("Something Went Wrong 😭😭");
            window.location.href = "feedback.php";
          </script>
		<?php 
		}
	} 
	else 
	{
		header("location: feedback.php?error");
	}
}
else
{
	if ($_SESSION['time']>60) 
	{
		$_SESSION['time']=time();
		$_SESSION['counter']=0;
	}
?>
<script>
            alert("Too Many Response Sends Take a deep Breath 🤒🤒");
            window.location.href = "feedback.php";
 </script>
<?php
}
?>
