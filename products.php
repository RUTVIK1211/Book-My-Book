<?php 

include_once 'heder.php';
include_once 'connection.php';
 ?>
 <style type="text/css">
 	#product_grid
 	{ 		
    margin-top: 50px;
    margin-left: 150px;
    margin-right: 100px;
 	}
    h3
    {
    margin-bottom: 5px;
    }
 </style>
 <?php 
        $id = $_GET['id'];
        $sql = "SELECT * FROM book WHERE b_id=$id";
        $result = mysqli_query($conn,$sql) or die("<script>alert('ERROR :007')<script>");
        while ($row = mysqli_fetch_array($result))
         {
  ?>
<section class="product_details_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="product_details_slider">
                            <div id="product_slider2" class="rev_slider" data-version="5.3.1.6">
                                <ul>    <!-- SLIDE  -->
                                    <li data-index="rs-28" data-transition="scaledownfromleft" data-slotamount="default"  data-easein="default" data-easeout="default" data-masterspeed="1500"  data-thumb="<?php echo $row['b_img']; ?>"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Umbrella" data-param1="September 7, 2015" data-param2="Alfon Much, The Precious Stones" data-description="">
                                        <!-- MAIN IMAGE -->
                                        <img src="<?php echo $row['b_img']; ?>"  alt="imgg"  width="1920" height="1080" data-lazyload="<?php echo $row['b_img']; ?>" data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                        <!-- LAYERS -->
                                    </li>
                                   <li data-index="rs-303" data-transition="scaledownfromleft" data-slotamount="default"  data-easein="default" data-easeout="default" data-masterspeed="1500"  data-thumb="<?php echo $row['b_img']; ?>"  data-rotate="0"  data-saveperformance="off"  data-title="The Dreaming Girl" data-param1="September 6, 2015" data-param2="Lol" data-description="">
                                        <!-- MAIN IMAGE -->
                                        <img src="<?php echo $row['b_img']; ?>"  alt="igg"  width="1920" height="1080" data-lazyload="<?php echo $row['b_img']; ?>" data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                        <!-- LAYERS -->
                                    </li>
                                    <!-- SLIDE  -->
                                    <li data-index="rs-301" data-transition="scaledownfromleft" data-slotamount="default"  data-easein="default" data-easeout="default" data-masterspeed="1500"  data-thumb="<?php echo $row['b_img']; ?>"  data-rotate="0"  data-saveperformance="off"  data-title="Ride my Bike" data-param1="September 4, 2015" data-param2="Why not another Image?" data-description="">
                                        <!-- MAIN IMAGE -->
                                        <img src="<?php echo $row['b_img']; ?>"  alt=""  width="1920" height="1080" data-lazyload="<?php echo $row['b_img']; ?>" data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                        <!-- LAYERS -->
                                    </li>
                                    <!-- SLIDE  -->
                                    <li data-index="rs-302" data-transition="scaledownfromleft" data-slotamount="default"  data-easein="default" data-easeout="default" data-masterspeed="1500"  data-thumb="/<?php echo $row['b_img']; ?>"  data-rotate="0"  data-saveperformance="off"  data-title="Ride my Bike" data-param1="September 4, 2015" data-param2="Why not another Image?" data-description="">
                                        <!-- MAIN IMAGE -->
                                        <img src="<?php echo $row['b_img']; ?>"  alt=""  width="1920" height="1080" data-lazyload="<?php echo $row['b_img']; ?>" data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                        <!-- LAYERS -->
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="product_details_text">
                            <h3><?php echo $row['b_name']; ?></h3>
                            <ul class="p_rating">
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                            <div class="add_review">
                                <a href="#">5 Reviews</a>
                                <a href="#">Add your review</a>
                            </div>
                            <h6>Available In <span>Stock</span></h6>
                            <h4>₹<?php echo $row['b_price']; ?></h4>
                            <p><?php echo $row['b_description']; ?></p>
                            <div class="p_color">
                                <h4 class="p_d_title">Edition<span>*</span></h4>
                                <ul class="color_list">
                                    <li><h5><?php echo $row['b_edition']; ?></h5></li>
                                </ul>
                            </div>
                            <div class="p_color">
                                <h4 class="p_d_title">Page <span>*</span></h4>
                                <ul class="color_list">
                                    <li><h5><?php echo $row['b_page']; ?></h5></li>
                                </ul>
                            </div>
                            <div class="p_color">
                            <h4 class="p_d_title">Publisher <span>*</span></h4>
                                <ul class="color_list">
                                    <li><h5><?php echo $row['b_publisher']; ?></h5></li>
                                </ul>
                            </div>
                            <div class="quantity">
                                <div class="custom">
                                    <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="icon_minus-06"></i></button>
                                    <input type="text" name="qty" id="sst" maxlength="12" value="01" title="Quantity:" class="input-text qty">
                                    <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;" class="increase items-count" type="button"><i class="icon_plus"></i></button>
                                </div>
                                <a class="add_cart_btn" href="#">add to cart</a>
                            </div>
                        </div>
                        <div class="product_table_details">
                            <div class="table-responsive-md">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Return Policy:</th>
                                            <td>
                                                <h6>₹50 National Priority Shipping to Ahmedabad via the Global Shipping Program </h6>
                                                <h5>Item location:</h5>
                                                <p>BookMybook Office,Satellite, Ahmedabad </p>
                                                <h5>Ships to:</h5>
                                                <p>Vastral and many other Places.</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Delivery:</th>
                                            <td>
                                                <p>Estimated between <span>display date here</span> <br/>Includes Regional tracking</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"></th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
 <?php 
}
 include_once 'footer.php';
  ?>