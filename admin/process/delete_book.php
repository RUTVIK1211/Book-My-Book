	<?php 
include_once '../../connection.php';
if (isset($_GET['id'])) 
{
	$id = $_GET['id'];
	$sql = "DELETE FROM book WHERE  b_id=$id";
	$result = mysqli_query($conn,$sql);

	if (isset($result)) 
	{
	  header("location: ../view_book.php");
	} 
}
else
{
	header("location: /index.php");
}
?>