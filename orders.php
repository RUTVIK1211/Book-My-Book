<?php 
    session_start();
    include_once 'connection.php';
    if (isset($_SESSION['user'])) 
    {  
        if (isset($conn)) 
        {
 ?>
		<?php 
			include_once 'connection.php';
			include_once 'heder.php';
 		?>
		<?php 
			$id = $_SESSION['login_id'];
				$q =mysqli_query($conn,"SELECT * from order_master WHERE C_id=$id");                
                     $count=mysqli_num_rows($q);
                     if($count == 0 )
                     {
                        echo "<script> alert('Nothing To Display...');</script>";
                     }  
                 else
                 	{  
                 	?>
                 	<center>
                 		<table class="table-responsive" border="1">
                 		<tr>
                 			<th></th>
                 		</tr>
                 	</center>
                 	<?php            
                        echo "<table class='table table-responsive'>";
                        echo "$count records found";
                        echo "<tr>";
                        echo "<th>co_id</th>";
                        echo "<th>Coupon</th>";
                        echo "<th>Amount</th>";
                        echo "</tr>";
                         while ($record = mysqli_fetch_row($q))
                 			{
                    				    
                    				echo "<td>$record[0]</td>
                       			          <td>$record[1]</td>
                        		          <td>$record[2]</td>";
                                   echo "<td><a href='edit.php?id=$record[0]'><img src='img/edit.png'>Edit | <a href='delete.php?id=$record[0]'><img src='img/delete.png'>Delete </td>";
                             	echo "<tr>";
                            }
                    }

	    ?>
	    <?php 
	    	include_once 'footer.php';
	     ?>
<?php 
 	   }
 	   else
 	   {
 	   	 header("location: 404.php");
 	   }
 	}
 	else
 	{
 		header("location: login.php");
 	}
?>