<?php
include_once 'connection.php';
session_start();
$user = $_POST['uname'];
$pass = $_POST['password'];
$newpass = md5($pass);
$flag=1;

if (isset($conn))
{
    $q = mysqli_query($conn,"SELECT * FROM login WHERE Username='$user'");
    $result = mysqli_num_rows($q);
    if($result > 0) 
    {
       	while ($row=mysqli_fetch_assoc($q))
    	 {            
    		  if($user == $row['Username'] AND $newpass == $row['Password'])
    		  {
                $flag = 1;
                $_SESSION['user']= "$user";
                $_SESSION['time'] = time();
                $_SESSION['login_id'] = $row['Login_id'];
    			header("location: index.php?welcome='$user'");
    		  }
    		else
    		  {
    		     header("location: login.php?error");
        	  }
        }
    }
    else
     {
          header("Location: login.php?error");
     } 
}
else
{
    header("location: 503.php");
}

