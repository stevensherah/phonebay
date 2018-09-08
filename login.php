<?php

session_start();

include("includes/db.php");

//include("functions/functions.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0' name='viewport' />
    <title>Login - Electro</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="shortcut icon" type="image/png" href="assets/images/fav.png" />

    <!--Stylesheets -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome-animation.min.css" rel="stylesheet">
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet">
    <link href="assets/css/icofont.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/jquery-ui.min.css" rel="stylesheet">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/slick-theme.css" rel="stylesheet">
    <link href="assets/css/youtube-pop-up.css" rel="stylesheet">
    <link href="assets/css/full-screen-menu.css" rel="stylesheet">
    <link href="assets/css/fractionslider.css" rel="stylesheet">
    <link href="assets/css/component.css" rel="stylesheet"> 
    <link href="assets/css/lightcase.css" rel="stylesheet">
    <link href="assets/css/slider-360.css" rel="stylesheet">
    <link href="assets/css/amaran.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="assets/css/skin/default.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Cutive+Mono%7COpen+Sans:300,300i,400,400i,600,600i,700,700i,800%7CRaleway:300,400,400i,500,500i,600,600i,700,800" rel="stylesheet">
</head>

<body>
    <div id="wrap">
        <header>
            <div class="top-bar bg-dark">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12 site-dir hidden-xs">
                            <a href="tel:+01123456789"><i class="fa fa-phone"></i> +1 123 456 7890</a>
                            <a href="mailto:info@yourdomain.com"><i class="fa fa-envelope"></i> info@yourdomain.com</a>
                        </div>
                        <!--site dir-->

                        <div class="col-md-6 col-sm-6 col-xs-12 header-right pull-right text-right">
                            <div class="lang">
                                <div class="dropdown">
                                    <span class="drop-down-toggle">
                                        <img src="assets/images/flag1.png" alt=""> Eng <i class="fa fa-angle-down"></i>
                                    </span>
                                    <ul class="drop-link trans">
                                        <li><a href="#" class="bg-dark">English</a></li>
                                        <li><a href="#" class="bg-dark">Spanish</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--lang-->

                            <div class="currency">
                                <div class="dropdown">
                                    <span class="drop-down-toggle">
                                        MYR <i class="fa fa-angle-down"></i>
                                    </span>
                                    <ul class="drop-link trans">
                                        <li><a href="#" class="bg-dark">MYR</a></li>
                                        <li><a href="#" class="bg-dark">EUR</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--currency-->

                            <div class="account-wrap">
                                <div class="dropdown">
                                    <span class="drop-down-toggle">
                                        <i class="fa fa-user"></i> ACCOUNT <i class="fa fa-angle-down"></i>
                                    </span>
                                    <ul class="drop-link trans">
                                        <li><a href="login.html" class="bg-dark">Login</a></li>
                                        <li><a href="signup.html" class="bg-dark">Register</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--account wrap-->

                            <div class="header-cart">
                                <a href="#" class="crt-btn drop-cart pe-7s-cart">
                                    <span class="pri-bg radius-circle pri-font">2</span>
                                </a>
                                <div class="widget widget_shopping_cart ">
                                    <h5 class="title">Your cart have (<span>2</span> Items)</h5>
                                    <ul class="neo-mini-cart">
                                        <li class="item">
                                            <figure class="product-thumb">
                                               <a href="#"><img src="assets/images/cart-pdt-thumb3.jpg" alt=""></a>
                                            </figure>
                                            <!--product thumb-->

                                            <div class="item-disc">
                                                <h6 class="pri-font">Ladies black full sleeves</h6>
                                                <span class="qty">1</span> X <span class="item-price">RM110</span>
                                            </div>

                                            <a href="#" class="delete-item"><i class="pe-7s-close"></i></a>
                                        </li>

                                        <li class="item">
                                            <figure class="product-thumb">
                                               <a href="#"><img src="assets/images/cart-pdt-thumb1.jpg" alt=""></a>
                                            </figure>
                                            <!--product thumb-->

                                            <div class="item-disc">
                                                <h6 class="pri-font">Ladies black top</h6>
                                                <span class="qty">1</span> X <span class="item-price">RM110</span>
                                            </div>

                                            <a href="#" class="delete-item"><i class="pe-7s-close"></i></a>
                                        </li>
                                    </ul>

                                    <div class="mini-cart-total flx-element">
                                        <span>Subtotal</span> 
                                        <span>RM220.00</span>
                                    </div>

                                    <div class="btn-hold flx-element">
                                        <a class="btn text-uppercase" href="cart.html">view cart</a>
                                        <a class="btn pri-bg text-uppercase" href="checkout.html">checkout</a>
                                    </div>
                                </div>
                                <!--mini cart-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--top bar-->

            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="header-mid">                       
                        <div class="navbar-header">
                            <a class="navbar-brand" href="index.php"><img src="assets/images/logo.png" alt=""></a> 
                             <!--<a class="navbar-brand site-brand" href="index.php">Electro</a>--> 

                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                               <span class="sr-only">Toggle navigation</span>
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                            </button> 
                        </div>
                        <!-- navbar header -->

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a href="index.php">Home</a></li>

                               <li class="active menu-item-has-children mega-menu">
                                    <a href="#">shop</a>

                                    <div class="mega-wrap">
                                        <div class="row">
                                            <div class="col-sm-4 menu-item-has-children">
                                                <h6>Shop pages</h6>
                                                <ul>
                                                    <li><a href="single-category.html">single category</a></li>
                                                </ul>
                                            </div>

                                            <div class="col-sm-4 menu-item-has-children">
                                                <h6>Product pages</h6>
                                                <ul>
                                                    <li><a href="product-single-v1.html">Product single v1</a></li>
                                                </ul>
                                            </div>

                                            <div class="col-sm-4 menu-item-has-children">
                                                <h6>account</h6>
                                                <ul>
                                                    <li><a href="wishlist.html">wishlist</a></li>
                                                    <li><a href="cart.html">cart</a></li>
                                                    <li><a href="checkout.html">checkout</a></li> 
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </li>


                               <li class="menu-item-has-children">
                                    <a href="#">pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="faq.html">faq</a></li>  
                                        <li><a href="account/dashboard.html">user account</a></li>  
                                    </ul>
                                </li>

                                <li><a href="blog-v2.html">News</a></li>

                                <li><a href="contact-v1.html">Get In Touch</a></li>
                            </ul>
                        </div>
                    </div>

                    <form class="search-form">
                        <input class="search-input" type="search" placeholder="Search..."/> 
                    </form>
                    <!--header mid-->
                </div>   
            </nav>  
        </header>
        <!--header-->    

        <main class="main"> 
            <div class="container"> 
                <div class="row sec-padding">
                     <div class="col-md-12 col-sm-12">
                         <div class="login-wrap">
                            <div class="bm-30">
                                <span class="icon lh"><i class="icofont icofont-ui-unlock"></i></span>
                                <h3>Login Account</h3>
                                <p>Enter your username and password to login.</p>
                            </div>

                            <form action="" method="post" >
                                <div class="form-group">
                                    <label>Username / Email <span>* amy@gmail.com</span></label>
                                    <input type="text" placeholder="Your Username / Email" value="amy@gmail.com" name="c_email" autocomplete="off" required>
                                </div>

                                <div class="form-group">
                                    <label>Password <span>* amy123</span></label>
                                    <input type="password" placeholder="***********" value="amy123" name="c_pass" autocomplete="off" required>
                                </div>

                                <div class="form-group flx-element">
                                    <div class="check-wrap">
                                        <input type="checkbox">
                                        <label>Remember me</label>
                                    </div>

                                    <a href="#">Lost Password?</a>
                                </div>

                                <div class="form-group">
                                    <input type="submit" value="Login" name='login'>
                                </div>

                                Don’t have an account yet? <a href="signup.html"><strong>Signup Now!</strong></a> 
                            </form>
                         </div>
                     </div>
                </div>              
            </div>  
        </main>
        <!--main-->

        <footer>
            <div class="footer-top bg-dark sec-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <h5>Customer Service</h5>

                            <ul class="footer-nav">
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Return</a></li>
                                <li><a href="#">Site map</a></li>
                                <li><a href="#">Brand</a></li>
                                <li><a href="#">Gift Vouchers</a></li>
                            </ul>
                        </div>
                        <!--widget-->

                        <div class="col-md-3 col-sm-3">
                            <h5>Information</h5>

                            <ul class="footer-nav">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Delivery Information</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div>
                        <!--widget-->

                        <div class="col-md-3 col-sm-3">
                            <h5>Account</h5>

                            <ul class="footer-nav">
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Order History</a></li>
                                <li><a href="#">Wish List</a></li>
                                <li><a href="#">Specials</a></li>
                            </ul>
                        </div>
                        <!--widget-->

                        <div class="col-md-3 col-sm-3">
                            <h5>Contact us</h5>
                            <div class="contact-info">
                                <p>
                                    <i class="fa fa-map-marker"></i> Lorem Ipsum is simply dummy text of the printing and typesetting.
                                </p>

                                <p>
                                    <i class="fa fa-envelope-o"></i>
                                    <a href="#">info@yourdomain.com</a>
                                </p>

                                <p>
                                    <i class="fa fa-phone"></i> 01 234 5678 / 01 234 5698
                                </p>
                            </div>
                        </div>
                        <!--widget-->
                    </div>
                </div>
            </div>

            <div class="footer">
                <div class="container">
                    <div class="row footer-bottom">
                        <div class="col-md-4 col-sm-4">
                            Copyright &copy; 2018 - Electro, All right reserved
                        </div>
                        <div class="col-md-4 col-sm-4 cards text-center">
                            <ul class="cards">
                                <li><i class="icofont icofont-paypal"></i></li>
                                <li><i class="icofont icofont-maestro"></i></li>
                                <li><i class="icofont icofont-discover"></i></li>
                                <li><i class="icofont icofont-american-express"></i></li>
                            </ul>
                        </div>
                        <!--cards-->

                        <div class="col-md-4 col-sm-4 text-right">
                            <ul class="social">
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>

                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>

                                <li>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </li>

                                <li>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!--social-->
                    </div>
                </div>
            </div>
        </footer>
        <!--footer-->
    </div>

    <div id="morphsearch" class="morphsearch">
        <div class="morphsearch-content">
            <div class="container">
                <span class="morphsearch-close"></span>

                <form class="morphsearch-form">
                    <input class="morphsearch-input" type="search" placeholder="Search..."/>
                    <button class="morphsearch-submit" type="submit"><i class="pe-7s-search"></i></button>
                </form> 
            </div>
        </div><!-- /morphsearch-content -->        
    </div>
    <!--search wrap-->
    
    <a href="#" class="back-to-top"><i class="fa fa-long-arrow-up"></i></a>
    
    <!-- jQuery library -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/touch.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/count-up.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/youtube-jquery.js"></script>
    <script src="assets/js/jquery.fractionslider.min.js"></script>
    <script src="assets/js/masonry.pkgd.min.js"></script>
    <script src="assets/js/jarallax.min.js"></script>
    <script src="assets/js/jarallax-video.min.js"></script>
    <script src="assets/js/lightcase.js"></script>
    <script src="assets/js/threesixty.min.js"></script>
    <script src="assets/js/jquery.amaran.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>


<?php

if(isset($_POST['login'])){

    $customer_email = mysqli_real_escape_string($con, $_POST['c_email']);
    $customer_pass = mysqli_real_escape_string($con, $_POST['c_pass']);

    $select_customer = "select * from customer where customer_email='$customer_email'";

    $run_customer = mysqli_query($con,$select_customer);
    $check_customer = mysqli_num_rows($run_customer);
    $row_customer = mysqli_fetch_array($run_customer);
    //$hash_password = $row_customer['customer_pass'];
    //$decrypt_password = password_verify($customer_pass, $hash_password);

    //if($decrypt_password == 0){

    //echo "<script>alert('your password or email is wrong')</script>";

    //exit();

    //}

    //$get_ip = getRealUserIp();

    //$select_cart = "select * from cart where ip_add='$get_ip'";

    //$run_cart = mysqli_query($con,$select_cart);
    //$check_cart = mysqli_num_rows($run_cart);

    if($check_customer==1){
        $_SESSION['customer_email']=$customer_email;
        echo "<script>alert('You are Logged In')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    }
    else{
        $_SESSION['customer_email']=$customer_email;
        echo "<script>alert('wrong password!')</script>";
        session_destroy();
        echo "<script>window.open('index.php','_self')</script>";
    } 
}

?>