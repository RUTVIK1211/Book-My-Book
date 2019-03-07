<?php 
	include_once 'heder.php';
 ?>
    <section class="from_blog_area">
            <div class="container">
                <div class="from_blog_inner">
                    <div class="c_main_title">
                        <h2>Reset Your Password</h2>
                    </div>
                    <center>
                	<div class="row">
						<div class="col-lg-4" style="left: 400px;">
                        <div class="login_title">
                            <h2>Enter Details</h2>
                            <p>Fill Out The Form To Recover Your Account.😊😊</p>
                        </div>
                        <form class="login_form row" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
                            <div class="col-lg-12 form-group">
                                <input class="form-control" type="text" placeholder="Username" name="uname">
                            </div>
                            <div class="col-lg-12 form-group">
                                <input class="form-control" type="text" placeholder="Email" name="email" required="true">
                           
                            </div>
                            <div class="col-lg-12 form-group">
                                <button type="submit" value="submit" class="btn subs_btn form-control" name="rec_acc">Submit
                                </button>
                            </div>
                        </form>
                    </div>
             		</div>
             	</center>
                </div>
            </div>
    </section>
    <?php 
     include_once 'connection.php';
        if (isset($_POST['rec_acc'])) 
        {
           $uname = $_POST['uname'];
           $email = $_POST['email'];

           $sql = "SELECT Username,Email,Password FROM customer WHERE Username='$uname' AND Email='$email'";
           $result = mysqli_query($conn,$sql) or die("Error in Query");

           $count = mysqli_num_rows($result);
           if ($count > 0) 
           {
             try 
             {
                $sub = "Password Recovery Of BOOKMYBOOK";
                $to = trim($email);
                $row = mysqli_fetch_array($result);
                $pass = $row[2];
                $content = "Your Account Password For BookMyBook is  $pass ";
                if(mail($to, $sub, $content,'From: bhimani.rutvik1211@gmail.com'))
                {
                    echo "<script>alert('Check Your Email For Password Recovery 😊😊')</script>";
                }
                else
                {
                     header("location: 503.php");        
                }
             } 
            
             catch (Exception $e) 
             {
                echo "Error : ".$e->getMessage();    
             }

           }
           else
           {
            echo "<script>alert('Incorrect Username Or Email')</script>";
           }

        }
     ?>
     <?php 
     	include_once 'footer.php';
      ?>
