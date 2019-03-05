<?php
include_once 'connection.php';
session_start();
$user = $_POST['uname'];
$pass = $_POST['password'];
$newpass = md5($pass);

$flag=1;

if (isset($conn))
{
    $q = mysqli_query($conn,"SELECT * FROM login");
    $result = mysqli_num_rows($q);
    if($result > 0) 
    {
       	while ($record=mysqli_fetch_array($q))
    	 {
            
    		  if($user == $record['Username'] AND $newpass == $record['Password'])
    		  {
                $flag = 1;
                $_SESSION['user']= "$user";
                $_SESSION['time'] = time();
                $_SESSION['login_id'] = $record['Login_id'];
    			header("Location: index.php?welcome='$user'");
    		  }
    		else
    		  {
    		     $flag=0 ;
        	}
        }
    }
    elseif($flag == 0)
     {
      header("Location: login.php?error");
     } 
}

