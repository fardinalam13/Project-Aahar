<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

<title>আহার || BMI</title> 
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/revolution-slider.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/bootstrap.vertical-tabs.css" rel="stylesheet">

<!-- Responsive -->

<link href="css/responsive.css" rel="stylesheet">

<style>
	.bmi_calculator {
		margin-top: 10px; /* Adjust the top margin to add space */
		margin-bottom: 10px; /* Adjust the bottom margin to add space */
		display: flex;
		justify-content: center;
		align-items: center;
		height:fit-content; /* Adjust the height to center vertically */
	  }

</style>

</head>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
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
                            <a href="https://www.google.com/maps/place/Noakhali+Science+and+Technology+University"><span class="fa fa-map-marker"></span></a>
                            <a href="rahil152131@gmail.com"><span class="fa fa-envelope"></span></a>
                            <a href="https://www.instagram.com/ahar_food_project/"><span class="fa fa-instagram"></span></a>
                            
                        </div>
                        
                    	<ul class="clearfix">
                        	<li><b>Helpline : +8801789080090</b></li>
                        </ul>
                    </div>
                    
                    <!--Top Right-->
                    <div class="top-right">
                    	<ul>
                        	<li>Ordering Hours : 08:00 am to 10:00 pm</li>
                            <li class="eng-dropdown dropdown">
                                <?php
                                session_start();
                                if (isset($_SESSION["name"])) {
                                    // If the user is logged in, display their username
                                    $user_name = $_SESSION["name"];
                                    echo '<a class="btn btn-default dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#"><span class="icon"></span>' . $user_name . '<span class="arow-icon fa fa-angle-down"></span></a>';
                                } else {
                                    // If the user is not logged in, display "Account"
                                    echo '<a class="btn btn-default dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#"><span class="icon"></span> Account <span class="arow-icon fa fa-angle-down"></span></a>';
                                }
                                ?>
                                <ul class="dropdown-menu style-one" aria-labelledby="dropdownMenu1">
                                    <!-- Add your dropdown menu items here (e.g., Log out) -->
                                    <li><a href="logout.php">Log out</a></li>
                                </ul>
                            </li>
                            <!--Cart Btn--> 
                           <li class="cart-btn"><a href="shopping-cart.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="count">0</span></a></li>
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
                        <div class="logo"><a href="about.html"><img src="images/logo.png" alt="Artica"></a></div>
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
                                    <li><a href="home.php">Home</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="food_zone.php">Food Zone</a></li>
                                    <li><a href="bmi_calculator.php">BMI Calculator</a></li>
                                    <li class="dropdown"><a href="#">All Pages</a>
                                    	<ul>
                                            <li><a href="home.php">Home</a></li>
                                            <li><a href="about.php">About</a></li>
                                            <li><a href="shopping-cart.php">Shopping Cart</a></li>
                                            <li><a href="check_out.php">Checkout</a></li>
                                            <li><a href="bmi_calculator.php">BMI Calculator</a></li>
                                            <li><a href="food_zone.php">Food Zone</a></li>

                                        </ul>
                                    </li>
                                 </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
                        
                        <!--Reserv Box Btn-->
                        <div class="btn-outer"><a href="food_zone.php" class=" reserv-box-btn">Order Now</a></div>
                        
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
                        <li><a href="home.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="check_out.php">Order Now</a></li>
                        <li><a href="food_zone.php">Food Zone</a></li>
                        <li class="dropdown"><a href="#">All Pages</a>
                                            <ul>
                                                <li><a href="home.php">Home</a></li>
                                                <li><a href="about.php">About</a></li>
                                                <li><a href="shopping-cart.php">Shopping Cart</a></li>
                                                <li><a href="check_out.php">Checkout</a></li>
                                                <li><a href="bmi_calculator.php">BMI Calculator</a></li>
                                                <li><a href="food_zone.php">Food zone</a></li>
    
                                            </ul>
                                        </li>
                     </ul>
                </div><!-- /.Side-menu -->
        
                <div class="social-icons">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="rahil152131@gmail.com"><span class="fa fa-envelope"></span></a></li>
                        <li><a href="https://www.google.com/maps/place/Noakhali+Science+and+Technology+University"><span class="fa fa-map-marker"></span></a></li>
                        <li><a href="https://www.instagram.com/ahar_food_project/"><span class="fa fa-instagram"></span></a></li>
                    </ul>
                </div>
        
        </div><!-- / Hidden Bar Wrapper -->
    </section>
    <!-- / Hidden Bar -->
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/5.jpg);">
    	<div class="auto-container">
            <h3>Stay fit and aware of your healthcare</h3>
            <h2>calculate BMI</h2>
        </div>
    </section>
    <!--Page Title-->
    
    
    <!--Form Starts Here-->

            <!-- Add space here -->
            <div class="spacer"></div>
            
            <section class="bmi_calculator" style="margin-top: 20px; margin-bottom: 20px;">
                <div class="container">
                    <div class="row justify-content-center">
                      <div class="parent">
                        <div class="col-md-6 col-sm-12">
                            <form action="calculate_bmi.php" method="post" class="bmi-form">
                                <div class="form-group">
                                    <label for="height">Height (cm):</label>
                                    <input type="number" class="form-control" name="height" id="height" required>
                                </div>
                                <div class="form-group">
                                    <label for="weight">Weight (kg):</label>
                                    <input type="number" class="form-control" name="weight" id="weight" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block mt-3">Calculate BMI</button>
                            </form>
                            <div id="result" class="text-center mt-3"></div>
                        </div>
                      </div>
                    </div>  
                </div>
            </section>

        <!-- Add space here -->
        <div class="spacer"></div>
    
    
    <!--Form ends Here-->

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
                                                Email : <a href="rahil152131@gmail.com">rahil152131@gmail.com</a></li>
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
   
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-long-arrow-up"></span></div>


<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/docs.js"></script>
<script src="js/revolution.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
</body>
</html>
