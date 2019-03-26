<?php 
	session_start();
	include_once 'connection.php';
	if (!empty($_SESSION['user'])) 
	{		
						$counter=0;
						$id=$_REQUEST['id'];
						$sql = "SELECT * FROM book WHERE b_id=$id ORDER BY b_id ";
            			$result = mysqli_query($conn,$sql) or die("Error Product not Found..");
          			    $row= mysqli_fetch_assoc($result);
            			$bid = $row['b_id'];
            			$pname = $row['b_name'];
            			$price = $row['b_price'];
            			$img = $row['b_img'];
            			$customerid = $_SESSION['login_id'];
            			$quantiy = $_POST['qty'];
					
		             $sql1 = "SELECT * FROM cart WHERE c_id=$customerid ";
                     $result1 = mysqli_query($conn,$sql1) or die("Error in query");
                while ($row=mysqli_fetch_assoc($result1)) 
                {
                    if (strcasecmp($row['b_id'],$id)==0) 
                    {    
                        $counter++;
                    }
                }         
                    if ($counter!=0) 
                    {
                        $url = "products.php?id=".(string)$id."&already";
                        header("location: {$url}");
                    }
                    else
                    {
            			
                    	$sql1 = "INSERT INTO cart(cart_id,b_id,c_id,product_name,quantity,price,img) VALUES(0,$bid,$customerid,'$pname',$quantiy,$price,'$img')";
                        $result1 = mysqli_query($conn,$sql1);
                        if (isset($result1)) 
                        {
                            header("Location: shopping-cart.php?cid=$customerid");
                        }
                        else
                        {
                            echo "<script>alert('Something Went Wrong..')<script>";
                        }  	
                    }                 
	}
	else
	{
		header("location: login.php");
	}
 ?>