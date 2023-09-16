<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Aahar";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start(); 
if (isset($_SESSION["name"]) && isset($_SESSION["user_id"])) {
    // If the user is logged in, display their username
    $user_name = $_SESSION["name"];
    $user_id = $_SESSION["user_id"];
    
} else {
    header("Location: sign_in.php");
    exit();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>আহার || Food Cart</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/revolution-slider.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<!-- <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon"> -->
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/responsive.css" rel="stylesheet">

</head>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header -->
    <header class="main-header">
            <!-- Header Top -->
            <div class="header-top">
                <div class="auto-container">
                    <div class="clearfix">
                        
                        <!--Top Left-->
                        <div class="top-left">
                            <!--social-icon-->
                            <div class="social-icon">
                                <a href="#"><span class="fa fa-facebook"></span></a>
                                <a href="#"><span class="fa fa-twitter"></span></a>
                                <a href="#"><span class="fa fa fa-skyatlas"></span></a>
                                <a href="#"><span class="fa fa fa-tumblr"></span></a>
                                
                            </div>
                            
                            <ul class="clearfix">
                                <li>Helpline: +8801789080090</li>
                            </ul>
                        </div>
                        
                        <!--Top Right-->
                        <div class="top-right">
                        
                            <ul>
                            <li class="active" ><a href="foodlist.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart
                            (<?php
                            if(isset($_SESSION["cart"])){
                            $count = count($_SESSION["cart"]); 
                            echo "$count"; 
                            }
                            else
                                echo "0";
                            ?>)
                            </a></li>
                               
                                <li class="eng-dropdown dropdown"><a class="btn btn-default dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#"><span class="icon"></span> Account <span class="arow-icon fa fa-angle-down"></span></a>
                                    <ul class="dropdown-menu style-one" aria-labelledby="dropdownMenu1">
                                        <li><a href="log_out.html">Log out</a></li>
                                       
                                    </ul>
                                </li>
                            </ul>
                            
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            <!-- Header Top End -->
            
            
            <!-- Main Box -->
            <div class="main-box">
                <div class="auto-container">
                    <div class="outer-container clearfix">
                        <!--Logo Box-->
                        <div class="logo-box">
                            <div class="logo"><a href="index.html"><img src="images/logo.png" alt="Artica"></a></div>
                        </div>
                        
                        <!--Nav Outer-->
                        <div class="nav-outer clearfix">
                            <!-- Main Menu -->
                            <nav class="main-menu">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->    	
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    </button>
                                </div>
                                
                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="food_zone.php">Food Zone</a></li>
                                        <li><a href="order_history.php">Order History</a></li>
                                        
                                     </ul>

                                </div>
                            </nav>
                            <!-- Main Menu End-->
                            
                            <!--Reserv Box Btn-->
    

                        </div><!--Nav Outer End-->
                        
                        <!-- Hidden Nav Toggler -->
                        <div class="nav-toggler">
                            <button class="hidden-bar-opener"><span class="icon fa fa-bars"></span></button>
                        </div><!-- / Hidden Nav Toggler -->
                        
                    </div>    
                </div>
            </div>
        
        </header>
    <!--End Main Header -->
    
    <!-- Hidden Navigation Bar -->
    <section class="hidden-bar right-align">
        
        <div class="hidden-bar-closer">
            <button class="btn"><i class="fa fa-close"></i></button>
        </div>
        
        <!-- Hidden Bar Wrapper -->
        <div class="hidden-bar-wrapper">
        
            <!-- .logo -->
            <div class="logo text-center">
                <a href="index.html"><img src="images/logo-2.png" alt="Restaurant Wheel"></a>			
            </div><!-- /.logo -->
            
            <!-- .Side-menu -->
            <div class="side-menu">
                    <!-- .navigation -->
                    <ul class="navigation clearfix">
                    <ul class="navigation clearfix">
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="food_zone.php">Food Zone</a></li>
                                        <li><a href="order_history.php">Order History</a></li>
                                     </ul>

                </div><!-- /.Side-menu -->
        
        </div><!-- / Hidden Bar Wrapper -->
    </section>
    <!-- / Hidden Bar -->
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/10.jpg);">
    	<div class="auto-container">
    		<h3>Confirm your Food Order Here!</h3>
        	<h2>Food Cart</h2>
        </div>
    </section>
    <!--Page Title-->

    <section class="cart-section">
    <div class="container" style="width:95%;">

            <?php
        if(!empty($_SESSION["cart"]))
        {
        ?>
            <div class="table-responsive" style="padding-left: 100px; padding-right: 100px;" >
        <table class="table table-striped">
        <thead class="thead-dark">
        <tr>
        <th width="40%">Food Name</th>
        <th width="10%">Quantity</th>
        <th width="20%">Unit Price</th>
        <th width="15%">Total Price</th>
        <th width="5%">Action</th>
        </tr>
        </thead>


        <?php  

        $total = 0;
        foreach($_SESSION["cart"] as $keys => $values)
        {
        ?>
        <tr>
        <td><?php echo $values["item_name"]; ?></td>
        <td><?php echo $values["quantity"] ?></td>
        <td><?php echo $values["item_price"]; ?></td>
        <td><?php echo number_format($values["quantity"] * $values["item_price"], 2); ?></td>
        <td><a href="food_cart.php?action=delete&item_id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
        </tr>
        <?php 
        $total = $total + ($values["quantity"] * $values["item_price"]);
        }
        ?>
        <tr>
        <td colspan="3" align="right">Total</td>
        <td align="right"><?php echo number_format($total, 2); ?></td>
        <td></td>
        </tr>
        </table>
        <?php
        echo '<a href="food_cart.php?action=empty"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Empty Cart</button></a>&nbsp;<a href="food_zone.php"><button class="btn btn-warning">Continue Shopping</button></a>&nbsp;<a href="check_out.php"><button class="btn btn-success pull-right"><span class="glyphicon glyphicon-share-alt"></span> Check Out</button></a>';
        ?>
        </div>
        <br><br><br><br><br><br><br>
        <?php
        }
        if(empty($_SESSION["cart"]))
        {
        ?>
        <div class="container">
            <div class="jumbotron">
                <h1>Your Shopping Cart</h1>
                <p>Oops! We can't smell any food here. Go back and <a href="food_zone.php">order now.</a></p>
                
            </div>
            
            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <?php
        }
        ?>


        <?php


        if(isset($_POST["add"]))
        {
        if(isset($_SESSION["cart"]))
        {
        $item_array_id = array_column($_SESSION["cart"], "item_id");
        if(!in_array($_GET["item_id"], $item_array_id))
        {
        $count = count($_SESSION["cart"]);

        $item_array = array(
        'item_id' => $_GET["item_id"],
        'item_name' => $_POST["hidden_name"],
        'item_price' => $_POST["hidden_price"],
        'vendor_id' => $_POST["hidden_vendorId"],
        'quantity' => $_POST["quantity"]
        );
        $_SESSION["cart"][$count] = $item_array;
        echo '<script>window.location="food_cart.php"</script>';
        }
        else
        {
        echo '<script>alert("Products already added to cart")</script>';
        echo '<script>window.location="food_cart.php"</script>';
        }
        }
        else
        {
        $item_array = array(
        'item_id' => $_GET["item_id"],
        'item_name' => $_POST["hidden_name"],
        'item_price' => $_POST["hidden_price"],
        'vendor_id' => $_POST["hidden_vendorId"],
        'quantity' => $_POST["quantity"]
        );
        $_SESSION["cart"][0] = $item_array;
        }
        }
        if(isset($_GET["action"]))
        {
        if($_GET["action"] == "delete")
        {
        foreach($_SESSION["cart"] as $keys => $values)
        {
        if($values["item_id"] == $_GET["item_id"])
        {
        unset($_SESSION["cart"][$keys]);
        echo '<script>alert("Food has been removed")</script>';
        echo '<script>window.location="food_cart.php"</script>';
        }
        }
        }
        }

        if(isset($_GET["action"]))
        {
        if($_GET["action"] == "empty")
        {
        foreach($_SESSION["cart"] as $keys => $values)
        {

        unset($_SESSION["cart"]);
        echo '<script>alert("Cart is made empty!")</script>';
        echo '<script>window.location="food_cart.php"</script>';

        }
        }
        }


        ?>
        <?php

        ?>

    </div>


    </section>
    
  	<!--Main Footer-->
      <footer class="main-footer">
        <div class="auto-container">
        
            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="row clearfix">
                    <!--Big Column-->
                    <div class="big-column col-md-6 col-sm-12 col-xs-12">
                        <div class="row clearfix">
                            
                            <!--Footer Column-->
                            <div class="footer-column col-md-7 col-sm-7 col-xs-12">
                                <div class="footer-widget about-widget">
                                    <!-- Add space here -->
                                    <div class="spacer"></div>
                                    <div class="footer-logo"><figure><a href="index.html"><img src="images/footer-logo.png" alt=""></a></figure></div>
                                    <div class="widget-content">
                                    
                                        <!-- Add space here -->
                                         <div class="spacer"></div>

                                        <ul class="contact-info">
                                            <li><i class="fa fa-map-marker" aria-hidden="true"></i>
                                                Address : Noakhali Science & Technology university,<br>Sonapur, Noakhali</li>
                                            <li><i class="fa fa-phone" aria-hidden="true"></i>
                                               Phone : <a href="01789080090"> (+880)1789080090</a></li>
                                            <li><i class="fa fa-envelope" aria-hidden="true"></i>
                                                Email : <a href="rahil152131@gmail.com">aahar@gmail.com</a></li>
                                        </ul>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Big Column-->
                    <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                        <div class="footer-widget opening-widget">
                          <p class="sec-title-one"><h3>We Create Delicous Memory between customers and vendors</h3></p>
                              <h2>Ordering Hours</h2>
                              <div class="widget-content">
                                 <ul>
                                   <li class="clearfix"><div class="day pull-left">Sun — Thur</div><span class="dots">................</span><div class="time pull-right">8:00 am - 10:00 pm</div></li>
                                   <li class="clearfix"><div class="day pull-left">Friday</div><span class="dots">................</span><div class="time pull-right">9:00 am - 11:00 pm</div></li>
                                   <li class="clearfix"><div class="day pull-left">Saturday</div><span class="dots">................</span><div class="time pull-right">9:00 am - 10:00 pm</div></li>
                                  </ul>
                              </div>
                        </div>
                   </div>
                    
                 </div>
             </div>
        
        </div>
        
        <!--Footer Bottom-->
         <div class="footer-bottom">

             <div class="auto-container">
                <div class="copyright-text">Copyright &copy; All Rights Reserved by Project Team(Fardin, Jannat, Sumaiya(1,2))</div>
            </div>
        </div>
    </footer>
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-long-arrow-up"></span></div>

<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/revolution.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>