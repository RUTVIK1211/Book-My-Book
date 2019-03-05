<?php 
    session_start();
    $con = mysqli_connect("localhost","root","","test");
 ?>
<!DOCTYPE html>
        <?php include_once ("heder.php") ?>
        <!--================Categories Banner Area =================-->
        <section class="solid_banner_area">
            <div class="container">
                <div class="solid_banner_inner">
                    <h3>shopping cart</h3>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="shopping-cart.html">Shopping cart</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Categories Banner Area =================-->
        
        <!--================Shopping Cart Area =================-->
        <section class="shopping_cart_area p_100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="cart_product_list">
                            <h3 class="cart_single_title">Discount Cupon</h3>
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
                                           
                                            $result = mysqli_query($con,'select * from products');
                                            if(mysqli_num_rows($result) > 0)
                                                {
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
                                                        <img src="<?php echo $row["image"]; ?>" height="100px">
                                                    </div>
                                                    <div class="media-body">
                                                        <h4><?php echo $row["name"]; ?></h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p>$<?php echo $row["price"]; ?> </p>
                                            </td>
                                            <td>
                                            	<?php 
													echo '<input type="text" name="qunatity" placeholder="01">';
													
                                              ?>
                                            </td>
                                            <td>
                                                <p><?php echo $row['price']; ?></p>
                                            </td>
                                        </tr>          
                                    </tbody>
                                    <?php 
                                    
                                        $total += $row["price"];

                                                   }
                                                }  
                                    ?>
                                </table>
                            </div>
                        </div>
                        <div class="calculate_shoping_area">
                            <h3 class="cart_single_title">Calculate Shoping <span><i class="icon_minus-06"></i></span></h3>
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
                                <h3 class="cart_single_title">Discount Cupon</h3>
                                <div class="cupon_box_inner">
                                    <input type="text" placeholder="Enter your code here">
                                    <button type="submit" class="btn btn-primary subs_btn">apply cupon</button>
                                </div>
                            </div>
                            <div class="cart_totals">
                                <h3 class="cart_single_title">Discount Cupon</h3>
                                <div class="cart_total_inner">
                                    <ul>
                                        <li><a href="#"><span>Cart Subtotal</span> $<?php echo "$total"; ?></a></li>
                                        <li><a href="#"><span>Shipping</span> Free</a></li>
                                        <li><a href="#"><span>Totals</span> $<?php echo "$total"; ?></a></li>
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
        
        
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <!-- Extra plugin css -->
        <script src="vendors/counterup/jquery.waypoints.min.js"></script>
        <script src="vendors/counterup/jquery.counterup.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/bootstrap-selector/js/bootstrap-select.min.js"></script>
        <script src="vendors/image-dropdown/jquery.dd.min.js"></script>
        <script src="js/smoothscroll.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
        <script src="vendors/vertical-slider/js/jQuery.verticalCarousel.js"></script>
        <script src="vendors/jquery-ui/jquery-ui.js"></script>
        
        <script src="js/theme.js"></script>
    </body>
</html>