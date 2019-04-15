<?php
    
    if(isset($_POST['btnsubmit']))
    {
        echo"btn clicked <br>";
        
    }else{
        echo "not clicked";
        
    }
    $username=$_POST['txtname'];


    if($username==" ")
    {
        echo "data not found ";
        
    }else
    {
        $connection=mysqli_connect("localhost","root","","story_database")or
          die("connection error"); 
        $insertquery="INSERT INTO `category`(`id`, `name`) VALUES ('','$username')";
        
        $row_count=mysqli_query($connection,$insertquery);
        
        
        
        if($row_count>0)
        {
            echo "inserted data";
        }
        else{
            echo "error";
        }
    }
?>