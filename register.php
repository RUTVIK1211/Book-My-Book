<?php 
    session_start();
    include_once 'connection.php';
    if (isset($_SESSION['user'])) 
    {  
        if (isset($conn)) 
        {
 ?>
<?php 
    include_once 'heder.php';
    /*initializations*/
    global $total;
    global $amounttopay;
    global $flag;
    global $discount;
    global $userid;
    global $payment;

    $total = $_SESSION['amount'];//total without applying the discount 
    $amounttopay  = $_SESSION['amounttopay'];//payable amount after apply discount 
    if (isset($_POST['userid'])) 
    {
        $userid = $_POST['userid'];
    }
    else
    {
        $userid = $_SESSION['login_id'];
    }

    $couponid;
    $flag = 0;
    $payment = 0;
    //Getting up the user details 
    
    $sql = "SELECT * FROM customer WHERE C_id='$userid'";
    $result = mysqli_query($conn,$sql)or die ("error while executing query");
    $row=mysqli_fetch_assoc($result);
    $fname = $row['F_name'];
    $lname = $row['L_name'];
    $address = $row['Address'];
    $city = $row['City'];
    $phone = $row['Phone'];
    $email = $row['Email'];

    //fetching data of applied coupon
    if (($total-$amounttopay) > 0) 
    {
        $flag = 1;
        $discount = $total-$amounttopay;
    }
 ?>
 
        <!--================End Menu Area =================-->
        
        <!--================Categories Banner Area =================-->
        <section class="solid_banner_area">
            <div class="container">
                <div class="solid_banner_inner">
                    <h3>checkout register</h3>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="checkout.php">Checkout Register</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Categories Banner Area =================-->
        
        <!--================Register Area =================-->
        <form class="billing_inner" method="GET" action="404.php">
        <section class="register_area p_100">
            <div class="container">
                <div class="register_inner">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="billing_details">
                                <h2 class="reg_title">Billing Detail</h2>
                                
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="name">First Name <span>*</span></label>
                                            <input type="text" name="fname" class="form-control" id="name" value="<?php echo $fname; ?>" aria-describedby="name"  placeholder="" >
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="last">Last Name <span>*</span></label>
                                            <input type="text" name="lname" value="<?php echo $lname; ?>" class="form-control" id="last" aria-describedby="last">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="address">Address <span>*</span></label>
                                           <textarea class="form-control"  name="add" id="order" name="add" rows="3"><?php echo $address; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="ctown">City / Town <span>*</span></label>
                                            <input type="text" name="city" value="<?php echo $city; ?>" class="form-control" id="address2" aria-describedby="address" name="city">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="email">Email <span>*</span></label>
                                            <input type="email"  name="email" value="<?php echo $email; ?>" class="form-control" id="email" aria-describedby="email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="phone">Phone <span>*</span></label>
                                            <input type="text" value="<?php echo $phone; ?>" class="form-control" name="phone" id="phone" aria-describedby="phone">
                                        </div>
                                    </div>
                                
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="order_box_price">
                                <h2 class="reg_title">Your Order</h2>
                                <div class="payment_list">
                                    <div class="price_single_cost">
                                        <?php 
                                            $sql1 ="SELECT * FROM cart WHERE c_id='$userid'";
                                            $result1 = mysqli_query($conn,$sql1);
                                            while ($row1 = mysqli_fetch_assoc($result1)) 
                                            {
                                         ?>
                                        <h5><?php echo $row1['product_name'];?><span>₹<?php echo $row1['price']." X ".$row1['quantity']; ?></span> </h5>
                                        <?php 
                                            }
                                         ?>
                                        <h4>Cart Subtotal <span>₹ <?php echo $total; ?></span></h4>
                                        <?php 
                                            if ($flag) 
                                            {
                                         ?>
                                         <div id="accordion" role="tablist" class="price_method">
                                            <h4>Discount <span><sup>__</sup> ₹ <?php echo $discount; ?></span></h4>
                                        </div>
                                        <?php 
                                            }
                                         ?>
                                        <h3><span class="normal_text">Order Totals</span> <span>₹ <?php echo $amounttopay; ?></span></h3>
                                    </div>
                <!-- Below code is for payment options-->
                                    <div id="accordion" role="tablist" class="price_method">
                                        <div class="card">
                                            <div class="card-header" role="tab" id="headingOne">
                                                <h5 class="mb-0">
                                                    <a data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne" name="CASH" value="cash">
                                                    Cash On Delivery 
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body">
                                                    Don't Trust in Online Payment ook.BookMyBook Provide Offline cash on delivery option.  
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" role="tab" id="headingTwo">
                                                <h5 class="mb-0">
                                                    <a class="collapsed" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo" name="online" value="paypal">
                                                   paypal
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                                                <div class="card-body">
                                                  <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                                  <input type="hidden" name="cmd" value="_s-xclick">
                                                  <input type="hidden" name="hosted_button_id" value="JLZF9F9CJWX6E">
                                                  <input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
                                                  <img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
                                                  </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                                <button type="submit" value="submit" class="btn subs_btn form-control">place order</button>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
            </form>
        <!--================End Register Area =================-->
        
        <!--================Footer Area =================-->
      <?php 
      include_once 'footer.php';
       ?>
<?php 
        }
        else
        {
            header("location: 503.php");
        }
        }
    else
    {
        header("location: index.php");
    }

?>