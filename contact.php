<?php 
    include_once 'heder.php';
 ?>
        <!--================End Menu Area =================-->
        
        <!--================Categories Banner Area =================-->
        <section class="solid_banner_area">
            <div class="container">
                <div class="solid_banner_inner">
                    <h3>Contact</h3>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Categories Banner Area =================-->
        
        <!--================Contact Area =================-->
        <section class="contact_area p_100">
            <div class="container">
                <div class="contact_title">
                    <h2>Get in Touch With Us</h2>
                    <p>We are believe in providing new and best items at low cost.Stay connected by fill-outing details mentions below.</p>
                </div>
                <div class="row contact_details">
                    <div class="col-lg-4 col-md-6">
                        <div class="media">
                            <div class="d-flex">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <p>204 Rudra Complex nr satellite ,Ahmedabad<br/>Gujrat,India.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="media">
                            <div class="d-flex">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <a href="tel:8733005877">8733005877</a>
                                <a href="tel:+9924226629">9924226629</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="media">
                            <div class="d-flex">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <a href="mailto:busines@persuit.com">help@bookmybook.com</a>
                                <a href="mailto:support@persuit.com">support@bookmybook.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact_form_inner">
                    
                    <h3>Drop a Message</h3>
                    <?php if (isset($_GET['send'])): ?>
                        <h4>Your Response has been Successfully Send</h4><br><br>
                    <?php endif ?>
                    <form class="contact_us_form row" action="contact_process.php" name="contact" method="post" id="contactForm" validate="validate">
                        <div class="form-group col-lg-4">
                            <input type="text" class="form-control"  id="name" name="name" placeholder="Full Name *" required>
                        </div>
                        <div class="form-group col-lg-4">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email Address *" required>
                        </div>
                        <div class="form-group col-lg-4">
                            <input type="text" class="form-control" id="website" name="phone" placeholder="Phone No" required >
                        </div>
                        <div class="form-group col-lg-12">
                            <textarea class="form-control" name="message" id="message" rows="1" placeholder="Type Your Message..." required></textarea>
                        </div>
                        <div class="form-group col-lg-12">
                            <button type="submit" name="submit"  value="submit"class="btn update_btn form-control">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!--================End Contact Area =================-->
   
        <!--================Footer Area =================-->
     <?php 
     include_once 'footer.php';
      ?>