<?php 
    session_start();
   include_once 'connection.php';
    if (isset($_SESSION['user'])) 
    {
       $id = $_SESSION['login_id'];
       $sql = "SELECT * FROM cart WHERE c_id=$id ORDER BY b_id";
       $result = mysqli_query($conn,$sql);
       $count = mysqli_num_rows($result);
        if ($count > 0) 
        {
               global $total ;
               global $finaltotal;
               global $flag;

               $total=0;
               $finaltotal=0;
               $flag=0;
 ?>
 <?php 
 if(isset($_SESSION['user']))
{
    if(time() - $_SESSION['time'] > 10000) 
    {
        session_destroy();
       header("Location: login.php");
    }
}
?>
<?php include_once 'heder.php'; ?>
   <section class="shopping_cart_area p_100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="cart_product_list">
                            <h3 class="cart_single_title">Discount Coupon</h3>
                            <div class="table-responsive-md">
                                    <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">product</th>
                                            <th scope="col">price</th>
                                            <th scope="col">quantity</th>
                                            <th scope="col">total</th>
                                        </tr>
                                    </thead>
                                    <?php 
                                    while ( $row = mysqli_fetch_array($result)) 
                                    {
                                    ?>
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                <a href="delcart.php?id=<?php echo $row['b_id']; ?>"><img src="img/icon/close-icon.png" alt="PRODUCT"></a>
                                            </th>
                                            <td>
                                                <div class="media">
                                                    <div class="d-flex">
                                                        <img src="<?php echo $row["img"]; ?>" height="100px">
                                                    </div>
                                                    <div class="media-body">
                                                        <h4><?php echo $row["product_name"]; ?></h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p>₹<?php echo $row["price"]; ?> </p>
                                            </td>
                                            <td>
                                                <?php 
                                                    $index = $row['b_id'];
                                                    echo '<input type="text" name="quantity'.$index.'" placeholder="'.$row["quantity"].'">';

                                              ?>
                                            </td>
                                            <td>
                                                <p>₹<?php
                                                        $total = $row['quantity'] * $row['price'];
                                                        echo $total;
                                                 ?></p>
                                            </td>
                                        </tr>          
                                    </tbody>
                                    <?php 
                                        $finaltotal += $total;
                                        $_SESSION['amount'] = $finaltotal;
                                        if ($finaltotal >=500) {
                                            $flag=1;
                                        }
                                    }

                                ?>
                                </table>
                                 </div>
                        </div>
                         <div class="calculate_shoping_area">
                            <h3 class="cart_single_title"> <span><i class="icon_minus-06"></i></span></h3>
                            <div class="calculate_shop_inner">
                              
                                    <div class="form-group col-lg-12">
                                        
                                       
                                    </div>
                                    <div class="form-group col-lg-6">
                                       
                                    </div>
                                    <div class="form-group col-lg-6">
                                      
                                    </div>
                                    <div class="form-group col-lg-12">
                                    </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="total_amount_area">
                            <div class="cupon_box">
                                <h3 class="cart_single_title">Discount Coupon</h3>
                                <?php 
                                    if ($flag==1) 
                                    {
                                ?>
                                <form name="coupon" method="post" action="coupon_process.php" >
                                <div class="cupon_box_inner">
                                    <input type="text" placeholder="Enter your code here" name="coupon" required="required">
                                    <input type="hidden" name="amount" value="<?php echo $finaltotal; ?>">
                                    <button type="submit" name="submit" class="btn btn-primary subs_btn">Apply coupon</button>
                                </div>
                                </form>
                                <?php 
                                    }
                                    else
                                    {
                                 ?>
                                 <form name="coupon" method="post" action="coupon_process.php" >
                                <div class="cupon_box_inner">
                                    <input type="text" readonly onclick="show()" placeholder="Enter your code here" name="coupon" required="required">
                                    <input type="hidden" name="amount" value="<?php echo $finaltotal; ?>">
                                    <button type="submit"  disabled name="submit"  class="btn btn-primary subs_btn">Apply coupon</button>
                                </div>
                                </form>
                                                    
                                <?php 
                                    }
                                 ?>   
                            </div>
                            <div class="cart_totals">
                                <h3 class="cart_single_title">Discount Coupon</h3>
                                <div class="cart_total_inner">
                                    <ul>
                                        <li><a href="#"><span>Cart Subtotal</span> ₹<?php if (isset($_SESSION['coupon']['amount'])) 
                                        {       
                                                $finaltotal=$_SESSION['coupon']['amount'];
                                                echo $finaltotal;
                                        }
                                        else
                                        {
                                            echo $finaltotal;
                                        } ?></a></li>
                                        <li><a href=""><span>Shipping</span> Free</a></li>
                                        <li><a href=""><span>Totals</span> ₹<?php if (isset($_SESSION['coupon']['amount'])) 
                                        {
                                                echo $finaltotal;
                                                unset($_SESSION['coupon']['amount']);
                                        }
                                        else
                                        {
                                            echo $finaltotal;
                                        } ?>        </a></li>
                                    </ul>
                                </div>
                                   
                                    <button type="submit" value="submit" class="btn btn-primary update_btn">update cart</button>
        
                                <form action="register.php" method="post">
                                    <input type="hidden" name="userid" value="<?php echo $_SESSION['login_id']; ?>">
                                    <?php 
                                        $_SESSION['amounttopay'] = $finaltotal;
                                     ?>
                                <button type="submit" class="btn btn-primary checkout_btn">proceed to checkout</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script type="text/javascript">
            function show()
            {
                alert("Sorry 😭😭!! You are not eligible for discount");
            }
        </script>
        
        <!--================End Shopping Cart Area =================-->
        
        <!--================Footer Area =================-->
       <?php include_once 'footer.php'; ?>
        <!--================End Footer Area =================-->
<?php
        }
        else
        {
            header("location: empty-cart.php");
        } 
    }
    else
    {
        header("location: login.php");
    }
    if (isset($_GET['error'])) {
       echo "<script>alert('Wrong code is Applied 😭😭')</script>";
    }
    if (isset($_GET['Success'])) 
    {
            echo "<script>alert('Congratulations  Discount Successfully Applied 👍👍')</script>";    
    }
 ?>
