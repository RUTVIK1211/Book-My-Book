<?php 

$id = $_GET['id'];


 $connection=mysqli_connect("localhost","root","","story_database") or die("connection error");
    

$deleteAreaQuery = "DELETE FROM `users` WHERE `id`=$id";

$deleteCount=mysqli_query($connection,$deleteAreaQuery);


if($deleteCount > 0)
{
    header("Location: viewuser.php");
}

?>