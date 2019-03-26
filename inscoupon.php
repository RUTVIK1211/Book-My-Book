<!DOCTYPE html>
<html>
<head>
	<title>Insert Coupon</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script type="text/javascript" src="https://ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scaleable=no">
    <script  src="js/bootstrap.min.js"></script>
</head>
<body>
	<form method="post" class="form-default">
		<h5>
        <table class="table" style="margin-left: 420px;
                                    margin-right: 0px;
                                    border-right-width: 150px;
                                    padding-right: 50px;
                                     width: 650px;">    

<tr>
    <td></td>
    <th><h2>Enter Coupon Details ..</h2></th>
</tr>
		<tr>
				<th>Coupon : </th>
				<td><input type="text" name="coupon" class="form-group" required></td>
		</tr>        
		<tr>
				<th>Discount :</th>
				<td><input type="text" name="discount" class="form-group" required></td>
		</tr>
		<tr>
				<td><button name="submit" type="submit" class="btn btn-primary">Submit</button></td>
		</tr>
        </table>
        </h5>
	</form>

<?php 
	include_once 'connection.php';
	if (isset($_POST['submit'])) 
	{
		$code = $_POST['coupon'];
		$amount = $_POST['discount'];
		if (isset($conn)) 
		{
			$sql = "INSERT INTO coupon(co_id,coupon,amount) VALUES(0,'$code','$amount');";
			$result = mysqli_query($conn,$sql) or die("error in query dear");
			 
		}
		else
		{
			header("location: 503.php");
		}
	}
	$q =mysqli_query($conn,"SELECT * from coupon");                
                     $count=mysqli_num_rows($q);
                     if($count == 0 )
                     {
                        echo "<script> alert('Nothing To Display...');</script>";
                     }  
                 else
                 	{              
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
</body>
</html>
