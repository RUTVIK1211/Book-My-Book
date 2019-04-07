
<!DOCTYPE html >
<html lang="en"  >
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://www.paypal.com/sdk/js?client-id=SB_CLIENT_ID">
  </script>
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Book My Book</title>

        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="vendors/line-icon/css/simple-line-icons.css" rel="stylesheet">
        <link href="vendors/elegant-icon/style.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="vendors/bootstrap-selector/css/bootstrap-select.min.css" rel="stylesheet">
        <link href="vendors/jquery-ui/jquery-ui.css" rel="stylesheet">
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    
    <body >
        
        <!--================Top Header Area =================-->
        <div class="header_top_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="top_header_left">
                            <div class="input-group">
                                <form action="search.php" method="post">
                                <input type="text" class="form-control" required placeholder="Search" aria-label="Search">
                                <span class="input-group-btn">
                                <button class="btn btn-secondary" type="submit"><i class="icon-magnifier"></i></button>
                                </span>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="top_header_middle">
                            <a href="#"><i class="fa fa-phone"></i> Call Us: <span>+91 8347589695</span></a>
                            <a href="#"><i class="fa fa-envelope"></i> Email: <span>help@bookmybook.com</span></a>
                            <a href="index.php"><i><img src="img/Logo.png" alt="BookMyBook"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="top_right_header">
                            <ul class="header_social">
                                <li><a href="https://www.facebook.com/rutvikvijaybhai.bhimani"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                            </ul>
                            <ul class="top_right">
                                <?php 
                                    if (isset($_SESSION['user'])) 
                                    {
                                    echo "  <li class='user' id='tool1' data-toggle='toolti' title='Login' data-placement='auto'><a href='login.php' ><i class='icon-user icons'></i></a></li>
                                <li class='cart' id='tool1'><a href='shopping-cart.php'><i class='icon-handbag icons'></i></a></li>
                                <li class='h_price'>    
                                </li>";
                                    }
                                    else
                                    {
                                      echo "  <li class='user' id='tool' data-toggle='toolti' title='Login' data-placement='auto'><a href='login.php' ><i class='icon-user icons'></i></a></li>
                                <li class='cart' id='tool'><a href='shopping-cart.php'><i class='icon-handbag icons'></i></a></li>
                                <li class='h_price'>    
                                </li>";
                                    }
                                 ?>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================End Top Header Area =================-->
        
        <!--================Menu Area =================-->
        <header class="shop_header_area">
            <div class="container">
                <n
                av class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#"><img src="img/fav-icon.png" alt="bookmybook"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav categories">
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown submenu active">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Buy Book <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="books.php">Buy NewBook</a></li>
                                    <li class="nav-item"><a class="nav-link" href="home-carousel.html">Buy Re-furbish Book</a></li>
                                    <li class="nav-item"><a class="nav-link" href="home-fullwidth.html">Buy Book on Rent</a></li>
                                    <li class="nav-item"><a class="nav-link" href="home-parallax.html">Buy Book with Exchange</a></li>
                                    
                                </ul>
                            </li>
                            <li class="nav-item dropdown submenu">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 Categories<i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="competitive.php">Competitive Exam </a></li>
                                    <li class="nav-item"><a class="nav-link" href="404.html">Stander 1 TO 12</a></li>
                                    <li class="nav-item"><a class="nav-link" href="404.html">I.T. & Computer</a></li>
                                    <li class="nav-item"><a class="nav-link" href="checkout.html">Engineering Books</a></li>
                                    <li class="nav-item"><a class="nav-link" href="login.html">Other</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown submenu">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Statutory Stuff <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    
                                    <li class="nav-item"><a class="nav-link" href="categories-right-sidebar.html">Geomatri box
                                    </a></li>
                                    <li class="nav-item"><a class="nav-link" href="categories-grid-left-sidebar.html">scissors-cutters</a></li>
                                    <li class="nav-item"><a class="nav-link" href="shopping-cart2.html">NoteBooks and Register</a></li>
                                    <li class="nav-item"><a class="nav-link" href="empty-cart.html">Lunch and Tiffin Box</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#">Genral Knowlage</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Tutoriyal</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">About us </a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
    </body>