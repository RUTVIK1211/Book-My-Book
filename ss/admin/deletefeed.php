<?php 

$id = $_GET['id'];


 $connection=mysqli_connect("localhost","root","","story_database") or die("connection error");
    

$deleteAreaQuery = "DELETE FROM feedback WHERE `f_id`=$id";

$deleteCount=mysqli_query($connection,$deleteAreaQuery);


if($deleteCount > 0)
{
    header("Location: viewfeed.php");
}

?>