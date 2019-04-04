<?php 
include_once 'connection.php';
    if (isset($conn)) 
    {
 ?>
<?php 
  session_start();
    include_once 'connection.php';
    include_once 'heder.php';
        
        $sql = ""
 ?>
<section class="no_sidebar_2column_area">
            <div class="container">
                <div class="showing_fillter">
                    <div class="row m0">
                        <div class="first_fillter">              
                        </div>
                        <div class="secand_fillter">       
                        </div>
                        <div class="third_fillter"> 
                        </div>
                        <div class="four_fillter">
                        </div>
                    </div>
                </div>
                <div class="two_column_product">
                    <div class="row">
                         <?php 
                                           
                        $result = mysqli_query($conn,'select * from book');
                         if(mysqli_num_rows($result) > 0)
                            {
                              $total = 0;

                                while ( $row = mysqli_fetch_array($result)) 
                                    {
                                    
                    ?>
                        <div class="col-lg-3 col-sm-6">
                            <div class="l_product_item">
                                <div class="l_p_img">
                                <img src="<?php echo $row['b_img']; ?>" height="300px" width="500px" alt="">
                             </div>
                                <div class="l_p_text">
                                   <ul>
                                        <li class="p_icon"><a href="products.php?id=<?php echo $row['b_id']; ?>"><i class="icon_piechart"></i></a></li>
                                        <li><a class="add_cart_btn" href="<?php echo "addcart.php?id=".$row['b_id']; ?>">Add To Cart</a></li>
                                        <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                    </ul>
                                    <h4><?php echo $row['b_name']; ?></h4>
                                    <h5><del>₹<?php echo $row['b_price']+100; ?></del>₹<?php echo $row['b_price']; ?></h5>
                                </div>
                            </div>
                        </div>
                         <?php 
                                 }
                            }
                         ?>      
                    </div>
                </div>
            </div>
</section>
<?php 
    include_once 'footer.php';
 ?>
<?php 
    }
    else
    {
        header("location: 404.php");
    }    
?>