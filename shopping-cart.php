<?php 
    session_start();
   include_once 'connection.php';
    if (isset($_SESSION['user'])) 
    {
       $id = $_SESSION['login_id'];
       $sql = "SELECT * FROM cart WHERE c_id=$id";
       $result = mysqli_query($conn,$sql);
       $count = mysqli_num_rows($result);
        if ($count > 0) 
        {

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
                                    $total = 0;
                                    while ( $row = mysqli_fetch_array($result)) 
                                    {
                                    ?>
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                <img src="img/icon/close-icon.png" alt="PRODUCT">
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
                                                    echo '<input type="text" name="quantity" placeholder="01">';
                                                    
                                              ?>
                                            </td>
                                            <td>
                                                <p>₹<?php echo $row['price']; ?></p>
                                            </td>
                                        </tr>          
                                    </tbody>
                                    <?php 
                                        $total += $row["price"];
                                    }
                                ?>
                                </table>
                                 </div>
                        </div>
                        <div class="calculate_shoping_area">
                            <h3 class="cart_single_title">Calculate Shopping <span><i class="icon_minus-06"></i></span></h3>
                            <div class="calculate_shop_inner">
                                <form class="calculate_shoping_form row" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                                    <div class="form-group col-lg-12">
                                        <select class="selectpicker">
                                            <option>United State America (USA)</option>
                                            <option>United State America (USA)</option>
                                            <option>United State America (USA)</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <input type="text" class="form-control" id="state" name="state" placeholder="State / Country">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <input type="text" class="form-control" id="zip" name="zip" placeholder="Postcode / Zip">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <button type="submit" value="submit" class="btn submit_btn form-control">update totals</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="total_amount_area">
                            <div class="cupon_box">
                                <h3 class="cart_single_title">Discount Coupon</h3>
                                <div class="cupon_box_inner">
                                    <input type="text" placeholder="Enter your code here">
                                    <button type="submit" class="btn btn-primary subs_btn">apply coupon</button>
                                </div>
                            </div>
                            <div class="cart_totals">
                                <h3 class="cart_single_title">Discount Coupon</h3>
                                <div class="cart_total_inner">
                                    <ul>
                                        <li><a href="#"><span>Cart Subtotal</span> ₹<?php echo "$total"; ?></a></li>
                                        <li><a href="#"><span>Shipping</span> Free</a></li>
                                        <li><a href="#"><span>Totals</span> ₹<?php echo "$total"; ?></a></li>
                                    </ul>
                                </div>
                                <button type="submit" class="btn btn-primary update_btn">update cart</button>
                                <form action="shopping-cart.php?action=payment" >
                                <button type="submit" class="btn btn-primary checkout_btn">proceed to checkout</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
 ?>
