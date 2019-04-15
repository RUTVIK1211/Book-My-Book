<?php


if(isset($_REQUEST['btnsubmit']))
{
    $id = $_REQUEST['id'];
    $name = $_REQUEST['newname'];
    
    $connection=mysqli_connect("localhost","root","","story_database") or die("connection error");
    
    $updateAreaQuery = "UPDATE `addcat` SET `Username`='$name' WHERE `id`=$id";
    
    
    $updateCount = mysqli_query($connection,$updateAreaQuery);
    
    if($updateCount>0)
    {
        header("Location:viewcat.php");
    }
    
    
}else
{
    header("Location:viewcat.php");
}

?>