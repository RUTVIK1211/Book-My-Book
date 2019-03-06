<?php 

if (isset($_GET['success'])) 
{
    echo "<script>alert('You Are Successfully Register an Account..')</script>";
}
 ?>
<?php
session_start();
if (isset($_SESSION['user'])) 
{ 
?>
    <!--log out page is displayed here-->
            <?php 
                include_once 'heder.php';
             ?>
             <br><br><br><center>
             <section class="solid_banner_area" style="margin-left: 500px;">
             <div class="container">
            <div class="login_inner">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="login_title">
                            <h1 style="font-family: comic sans ms;" ><?php echo strtoupper($_SESSION['user']); ?></h1><h2>You Are Already Login </h2>
                            <p>Click Below Button For Logout..</p>
                        </div>
                        <form class="login_form row " action="login_out.php" method="post">
                            <div class="col-lg-12 form-group">
                                <button type="submit" value="submit" class="btn update_btn form-control">Logout</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
          </div>
        </section>
    </center>
        <br><br><br>
             <?php 
             include_once 'footer.php';
              ?>
    <?php
}
else {
        include_once 'heder.php';
     ?>
    <!--================End Menu Area =================-->

    <!--================Categories Banner Area =================-->
    <section class="solid_banner_area">
        <div class="container">
            <div class="solid_banner_inner">
                <h3>Login</h3>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="track.html">Login</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--================End Categories Banner Area =================-->


    <!--================login Area =================-->
    <section class="login_area p_100">
        <div class="container">
            <div class="login_inner">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="login_title">
                            <h2>log in your account</h2>
                            <p>Log in to your account to discovery all great features in this website.</p>
                        </div>
                        <form class="login_form row " action="login_process.php" method="post">
                            <div class="col-lg-12 form-group">
                                <input class="form-control" type="text" placeholder="Name" name="uname" required="required">
                            </div>
                            <div class="col-lg-12 form-group">
                                <input class="form-control" type="password" placeholder="Password" name="password"
                                       required="true">
                            </div>
                            <div class="col-lg-12 form-group">
                                <div class="creat_account">
                                    <input type="checkbox" id="f-option" name="selector">
                                    <label for="f-option">Keep me logged in</label>
                                    
                                </div>
                                <h4><a href="password.recovery.php" style="color: red;">Forgot your password ?</a></h4>
                            </div>
                            <div class="col-lg-12 form-group">
                                <button type="submit" value="submit" class="btn update_btn form-control">Login</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-8">
                        <div class="login_title">
                            <h2>create account</h2>
                            <p>Follow the steps below to create account </p>
                        </div>
                        <form class="login_form row" action="singup.php" method="post" name="ca">
                            <div class="col-lg-6 form-group">
                                <input class="form-control" type="text" name="fname" placeholder=" First Name" required="true">
                            </div>
                            <div class="col-lg-6 form-group">
                                <input class="form-control" type="text" name="lname" placeholder="Last Name" required="true">
                            </div>
                            <div class="col-lg-6 form-group">
                                <input class="form-control" type="email" name="email" placeholder="Email"
                                       required="true">
                            </div>
                            <div class="col-lg-6 form-group">
                                <input class="form-control" type="text" name="uname" placeholder="User Name"
                                       required="true">
                            </div>
                            <div class="col-lg-6 form-group">
                                <input class="form-control" type="number" name="phone" minlength="10" size="10" 
                                       placeholder="Phone" required="true">
                            </div>
                            <div class="col-lg-6 form-group">
                            <textarea class="form-control" name="add" id="message" style="border-left-width: 1px;width: 375px;height: 62px; rows="2" cols="2" placeholder="Type Your Address..."></textarea>
                            </div>
                            <div class="col-lg-6 form-group">
                                <input class="form-control" type="password" name="password" placeholder="Password"
                                       required="true"  oninput="testpass()"> 
                            </div>
                            <div class="col-lg-6 form-group">
                                <input class="form-control" type="password" name="confirm_password"
                                       placeholder="Re-Password"
                                       required="true" oninput="testpass()">
                            </div>
                            <div class="col-lg-6 form-group">
                                <input type="text" name="city" placeholder="City" class="form-control" required>
                            </div>
                            <div class="col-lg-6 form-group">
                                <input type="text" name="state" placeholder="State" class="form-control" required >
                            </div>
                            <div class="col-lg-6 form-group">
                                <input type="number" name="pincode" placeholder="Pincode" class="form-control" required maxlength="1" minlength="1">
                            </div>
                            <div class="col-lg-6 form-group">
                                <input type="date" name="dob"  class="form-control"  required="true">
                            </div>
                            
                            <div class="col-lg-6 form-group">
                                <button type="submit" value="submit" class="btn subs_btn form-control" name="reg_submit">register now
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--================End login Area =================-->

    <!--================Footer Area =================-->
    <footer class="footer_area">
        <div class="container">
            <div class="footer_widgets">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-6">
                        <aside class="f_widget f_about_widget">
                            <img src="img/logo.png" alt="">
                            <p>Persuit is a Premium PSD Template. Best choice for your online store. Let purchase it to
                                enjoy now</p>
                            <h6>Social:</h6>
                            <ul>
                                <li><a href="#"><i class="social_facebook"></i></a></li>
                                <li><a href="#"><i class="social_twitter"></i></a></li>
                                <li><a href="#"><i class="social_pinterest"></i></a></li>
                                <li><a href="#"><i class="social_instagram"></i></a></li>
                                <li><a href="#"><i class="social_youtube"></i></a></li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <aside class="f_widget link_widget f_info_widget">
                            <div class="f_w_title">
                                <h3>Information</h3>
                            </div>
                            <ul>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Delivery information</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Help Center</a></li>
                                <li><a href="#">Returns & Refunds</a></li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <aside class="f_widget link_widget f_service_widget">
                            <div class="f_w_title">
                                <h3>Customer Service</h3>
                            </div>
                            <ul>
                                <li><a href="#">My account</a></li>
                                <li><a href="#">Ordr History</a></li>
                                <li><a href="#">Wish List</a></li>
                                <li><a href="#">Newsletter</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <aside class="f_widget link_widget f_extra_widget">
                            <div class="f_w_title">
                                <h3>Extras</h3>
                            </div>
                            <ul>
                                <li><a href="#">Brands</a></li>
                                <li><a href="#">Gift Vouchers</a></li>
                                <li><a href="#">Affiliates</a></li>
                                <li><a href="#">Specials</a></li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <aside class="f_widget link_widget f_account_widget">
                            <div class="f_w_title">
                                <h3>My Account</h3>
                            </div>
                            <ul>
                                <li><a href="#">My account</a></li>
                                <li><a href="#">Ordr History</a></li>
                                <li><a href="#">Wish List</a></li>
                                <li><a href="#">Newsletter</a></li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
            <div class="footer_copyright">
                <h5>©
                    <script>document.write(new Date().getFullYear());</script>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                    All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by
                    <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </h5>
            </div>
        </div>
    </footer>
    <!--================End Footer Area =================-->
    <script type="text/javascript">
        
        function testpass()
        {
            var form = document.forms.ca;//ca is create account and its a form name also..
            var pass = form.password.value;
            var cpass = form.confirm_password.value;
            var temp = form.password;
            var temp1 = form.confirm_password;

            if (pass==cpass && pass!=null && cpass!=null) 
            {
               
                temp.style.borderColor = "green";
                temp1.style.borderColor = "green";
            }
            else
            {
                temp.style.borderColor = "red";
                temp1.style.borderColor = "red";
            }
        }
    </script>


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
    <?php
}
?>