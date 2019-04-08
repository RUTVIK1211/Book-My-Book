<?php 
include_once 'heder.php';
include_once 'connection.php';

 
    if (isset($_POST['submit'])) 
    {
        $data = $_POST['data'];

        $sql = "SELECT * FROM book WHERE b_name      LIKE '%$data%' OR 
                                         b_publisher LIKE '%$data%' OR
                                         b_edition   LIKE '%$data%' OR
                                         b_isbn      LIKE '%$data%' OR
                                         b_price     LIKE '%$data%' OR
                                         b_author    LIKE '%$data%' OR
                                         b_description LIKE '%$data%' OR
                                         b_category  LIKE '%$data%' 
                                         ;";
        $result = mysqli_query($conn,$sql);
        $counter = mysqli_num_rows($result);
        if ($counter>0) 
        {

?><br><br><br>
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
              while ( $row = mysqli_fetch_array($result)) 
                {         
?>                      <div class="col-lg-3 col-sm-6">
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
    ?>
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
         ?>
         <section class="solid_banner_area">
            <div class="container">
                <div class="solid_banner_inner">
                    <h3>error page</h3>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="404.php">Error Page</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Categories Banner Area =================-->
        
        <!--================login Area =================-->
        <section class="error_area p_100">
            <div class="container">
                <div class="error_inner">
                    <h4>404</h4>
                    <h5>Error - Not Found</h5>
                    <p>Sorry We’re not able to find what you looking for</p>
                    <h6>back to <a href="index.php">Home</a></h6>
                </div>
            </div>
        </section>
         <?php 
        }
    } 
    else 
    {
        header("location: 404.php");
    }
 ?>