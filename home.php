<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

<title>আহার || Home</title> 
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/revolution-slider.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/bootstrap.vertical-tabs.css" rel="stylesheet">

<!-- Responsive -->
<link href="css/responsive.css" rel="stylesheet">

</head>

<body>

    <div class="page-wrapper">
 	
        <!-- Preloader -->
        <div class="preloader"></div>
 	
    <!-- Main Header-->
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
                                if (isset($_SESSION["user_name"])) {
                                    // If the user is logged in, display their username
                                    $user_name = $_SESSION["user_name"];
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
    








<!-- -->








    <!--Main Slider-->
    <section class="main-slider" data-start-height="520" data-slide-overlay="yes">
        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>
                	
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/image-1.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                    <img src="images/background/18.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    
                    <div class="tp-caption sfb sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-140"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><figure class="content-image"><img src="images/main-slider/icon-1.png" alt=""></figure></div>
                    
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-20"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><h2>ঘরের স্মৃতি, ঘরের খাবার।</h2>
                   
                    </div>
                    
                    <div class="tp-caption sfr sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="50"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><div class="text"> <h1 style="scrollbar-highlight-color: beige ;">আহার </h1></div></div>
                    
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="130"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><a href="#" class="theme-btn btn-style-one">Order Office/Hostel Tiffin</a></div>
                    
                    </li>

                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/content-image.png" data-saveperformance="off"  data-title="Awesome Title Here">
                    <img src="images/background/15.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    
                    <div class="tp-caption sfb sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-140"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><figure class="content-image"><img src="images/main-slider/content-image.png" alt=""></figure></div>
                    
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-20"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><h2>ক্ষুধা লেগেছে? খাবার অর্ডার করুন।</h2></div>
                    
                    <div class="tp-caption sfr sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="50"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"omos
                    data-endeasing="Power4.easeIn"><div class="text">Veg |  Non-Veg  |  Sweets | Pitha | Fast Food | Snacks | Apetizer</div></div>
                    
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="130"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><a href="#" class="theme-btn btn-style-one">Order Now</a></div>
                    
                    </li>
                    
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/image-3.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                    <img src="images/background/28.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    
                    <div class="tp-caption sfb sfb tp-resizeme"
                    data-x="center" data-hoffset="30"
                    data-y="center" data-voffset="-140"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><figure class="content-image"><img src="images/main-slider/icon-2.png" style="color: chartreuse;" alt=""></figure></div>
                    
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="center" data-hoffset="30"
                    data-y="center" data-voffset="-20"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><h2 style="color:rgb(253, 255, 253);"> Customized your Meal</h2></div>
                    
                    <div class="tp-caption sfr sfb tp-resizeme"
                    data-x="center" data-hoffset="30"
                    data-y="center" data-voffset="50"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><div class="text text-left" style="color:rgb(213, 223, 94);"><h3>No Need to be worried about</h3></div></div>
                    
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="center" data-hoffset="30"
                    data-y="center" data-voffset="140"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><a href="#" class="theme-btn btn-style-one">Order Meal</a></div>
                    
                    
                    </li>

                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/image-3.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                    <img src="images/main-slider/image-7.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    
                    <div class="tp-caption sfb sfb tp-resizeme"
                    data-x="center" data-hoffset="30"
                    data-y="center" data-voffset="-140"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn">
                    <figure class="content-image"><img src="images/main-slider/icon-2.png" alt=""></figure></div>
                    
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="center" data-hoffset="30"
                    data-y="center" data-voffset="-20"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><h2 style="color:rgb(255, 255, 255);">Get Discount from vendors Order</h2></div>
                    
                    <div class="tp-caption sfr sfb tp-resizeme"
                    data-x="center" data-hoffset="30"
                    data-y="center" data-voffset="50"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><h3 class="text-danger" style="color:rgb(255, 255, 255);"><b>We are commited to serve you better food in afordable price. </b></h3></div>
                    
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="center" data-hoffset="30"
                    data-y="center" data-voffset="140"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><a href="#" class="theme-btn btn-style-one">Order Office/Hostel Meal</a></div>
                    
                    <div class="tp-caption sfb sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-40"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn">
                    <figure class="content-image"><!--<img src="images/main-slider/content-image.png" alt="">--></figure></div>
                    
                    </li>
                    
                </ul>

            </div>
        </div>
    </section>
    <!--End Main Slider-->
    
    <!--Show Section-->
    <section class="show">
    	<div class="auto-container">
        	<div class="row clearfix">
            	<!--Column-->
            	<div class="column col-md-6 col-sm-6 col-xs-12">
                            <!-- Add space here -->
                          <div class="spacer"></div>
                	<div class="inner-box">
                    	<!--Sec Title-->
                    	<div class="sec-title">
                        	<h2>Homemade Hygenic Dishes </h2>
                            <h3>Great Things About Us</h3>
                        </div>
                        <!--Content-->
                        <div class="content">
                            <div class="text">
                                <p>"আহার" is a web based food delivery application allowing the administrator to handle all online activities quickly and safely. In today’s world, most people live away from their homes for work. Food is a basic necessity for everybody. Most of them are dependent on other people for food. So, the aim of the project is to provide hygienic food of high quality at a low cost. </p>
                               
                                <p>Various items are available to the customers. They can select the desired items for their breakfast, lunch, and dinner at a reasonable price. The food can be delivered to their residence. They can pay on a daily, weekly or monthly basis. </p>
                                
                                <p>The customer can choose the menu of their own choice So, we have generated a system that will provide meals to the customers, i.e. the breakfast, lunch, and dinner as well. </p>
                            </div>
                            <a href="#" class="read-more theme-btn btn-style-one">Read More</a>
                        </div>
                        
                    </div>
                </div>
                
                <!--Corousel Column-->
                <div class="corousel-column col-md-6 col-sm-6 col-xs-12">
                            <!-- Add space here -->
                            <div class="spacer"></div>
                            <div style="text-align: center;"><h1 style="color: rgb(255, 128, 0);">Categories</h1></div>
                            <div class="spacer"></div>
                	<div class="carousel-outer wow fadeRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                    	<!--Single Item Carousel-->
                    	<div class="single-item-carousel">
                        	<div class="slide">
                                <h2 style="text-align: center;">Vendor</h2>
                            	<img style="width:80%" src="images/resource/chef-cooking.svg" alt="" />
                            </div>
                            <div class="slide">
                                <h2 style="text-align: center;">Customer</h2>
                            	<img style="width:80%" src="images/resource/slide-2.webp" alt="" />
                            </div>
                            <div class="slide">
                                <h2 style="text-align: center;">Delivery Driver</h2>
                            	<img style="width:80%" src="images/resource/driver.webp" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    	
    	
            <div class="auto-container">
                <!--sec title one-->
                <div class="sec-title-one">
                    <h2>Why Us</h2>
                    <h4>We Create Delicous Memory</h4>
                </div>
                
                <div class="row clearfix">
                    <!--Services Block-->
                    <div class="services-block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <!--Icon Box-->
                            <div class="icon-box wow zoomInStable" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <img src="images/resource/icon1.png" alt="" />
                            </div>
                            <h3><a href="sign_in.php">Home made food</a></h3>
                        </div>
                    </div>
                    
                    <!--Services Block-->
                    <div class="services-block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <!--Icon Box-->
                            <div class="icon-box wow zoomInStable" data-wow-delay="500ms" data-wow-duration="1500ms">
                                <img src="images/resource/icon2.png" alt="" />
                            </div>
                            <h3><a href="#">Menu Update</a></h3>
                        </div>
                    </div>
                    
                    <!--Services Block-->
                    <div class="services-block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <!--Icon Box-->
                            <div class="icon-box wow zoomInStable" data-wow-delay="1000ms" data-wow-duration="1500ms">
                                <img src="images/resource/icon3.png" alt="" />
                            </div>
                            <h3><a href="sign_in.php">Meal Planning</a></h3>
                        </div>
                    </div>
                    
                </div>
                
                <div class="row clearfix">
                    <!--Services Block-->
                    <div class="services-block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <!--Icon Box-->
                            <div class="icon-box wow zoomInStable" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <img src="images/resource/icon4.png" alt="" />
                            </div>
                            <h3><a href="#"> Easy Cancellation<br>within 20 minitues</a></h3>
                        </div>
                    </div>
                    
                    <!--Services Block-->
                    <div class="services-block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <!--Icon Box-->
                            <div class="icon-box wow zoomInStable" data-wow-delay="500ms" data-wow-duration="1500ms">
                                <img src="images/resource/icon5.png" alt="" />
                            </div>
                            <h3><a href="sign_in.php">Discount Offer/coupons</a></h3>
                        </div>
                    </div>
                    
                    <!--Services Block-->
                    <div class="services-block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <!--Icon Box-->
                            <div class="icon-box wow zoomInStable" data-wow-delay="1000ms" data-wow-duration="1500ms">
                                <img src="images/resource/icon6.png" alt="" />
                            </div>
                            <h3><a href="sign_in.php">Easy Ordering</a></h3>
                        </div>
                    </div>
                    
                </div>
                
                
            </div>
        </section>
    <!--Services Section-->
    
    
    <!--Parallax Image Section-->
    <section class="parallax-image-section" style="background-image:url(images/background/1.jpg);">
    	<div class="auto-container">
        	<h2>Healthy Fresh And Hot Dishes.</h2>
            <h4>Best offers from the house chef.</h4>
        </div>
    </section>
    <!--End Parallax Image Section-->
    
    
    
    <!--Special Dishes Section-->
    <section class="special-section">
    	<div class="auto-container">
        	<!--sec title one-->
            <div class="sec-title-one">
                <h2>Our Special Snacks.</h2>
                <h4>We Create Delicous Memory</h4>
            </div>
        
        	<div class="row clearfix">
            	<!--Opening Column-->
            	<div class="opening-column col-md-4 col-sm-12 col-xs-12">
                	<div class="inner-box wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    	<div class="title-box">Ordering Hours</div>
                        <ul>
                        	<li>sunday — Thrusday<br>8:00 am - 10:00 pm</li>
                            <li>Friday<br>8:00 am - 11:00 pm</li>
                            <li>Saturday<br>9:00 am - 10:00 pm</li>
                            <li>Note: আহার is available everyday.</li>
                            <li class="number"><h4>Contact for special order:</h4> 01789080090</li>
                        </ul>
                    </div>
                </div>

                
                <!--Dishes Column-->
                <div class="dishes-column col-md-8 col-sm-12 col-xs-12">
                	<div class="inner-box">
                    
                    	
                    	<div class="special-dish">
                        	<div class="inner-content">
                                <div class="row clearfix">
                                
                                    <!--Image Column-->
                                    <div class="image-column col-md-4 col-sm-4 col-xs-12 pull-left">
                                        <div class="inner">
                                            <figure class="image-box">
                                                <img src="images/snacks_chommeen.jpg" alt="" />
                                                <!--Overlay Box-->
                                                <div class="overlay-box">
                                                    <div class="price">TK 65</div>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                
                                    <!--Content Column-->
                                    <div class="content-column col-md-8 col-sm-8 col-xs-12 pull-right">
                                        <h3>Veg Chawmin</h3>
                                        <div class="text"></div>
                                        <a class="read-more theme-btn" href="#">Add to Cart</a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div class="special-dish">
                        	<div class="inner-content">
                                <div class="row clearfix">
                                
                                    <!--Image Column-->
                                    <div class="image-column col-md-4 col-sm-4 col-xs-12 pull-left">
                                        <div class="inner">
                                            <figure class="image-box">
                                                <img src="images/snacks_vegroll.jpg" alt="" />
                                                <!--Overlay Box-->
                                                <div class="overlay-box">
                                                    <div class="price">TK 60</div>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                
                                    <!--Content Column-->
                                    <div class="content-column col-md-8 col-sm-8 col-xs-12 pull-right">
                                        <h3>Veg Sprign roll</h3>
                                        <div class="text"></div>
                                        <a class="read-more theme-btn" href="#">Add to Cart</a>
                                    </div>
                                    
                                    
                                    
                                </div>
                            </div>
                        </div>
                        
                        
                       <a href="snacks.html" title="Order Snacks" class="btn btn-danger">Order More Snacks</a> 
                        
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--Special Dishes Section-->
    
    <!--Gallery Carousel-->
    <section class="gallery-carousel">
    	<div class="three-item-corousel">
        	<div class="gallery-item">
            	<div class="inner-box">
                        <div class="image-box">
                            <img src="images/background/22.jpg" alt="" />
                            <div class="title-box">Masala Spiced Chickpeas</div>
                        </div>
                </div>
            </div>
            
          
            <div class="gallery-item">
            	<div class="inner-box">
                        <div class="image-box">
                            <img src="images/background/27.jpg" alt="" />
                            <div class="title-box">Masala Spiced Chickpeas</div>
                        </div>
                </div>
            </div>
            
           
            <div class="gallery-item">
            	<div class="inner-box">
                        <div class="image-box">
                            <img src="images/background/20.jpg" alt="" />
                            <div class="title-box">Masala Spiced Chickpeas</div>
                        </div>
                </div>
            </div>
            
            
            <div class="gallery-item">
            	<div class="inner-box">
                        <div class="image-box">
                            <img src="images/background/35.jpg" alt="" />
                            <div class="title-box">Masala Spiced Chickpeas</div>
                        </div>
                </div>
            </div>
            
            
            <div class="gallery-item">
            	<div class="inner-box">
                        <div class="image-box">
                            <img src="images/background/34.jpg" alt="" />
                            <div class="title-box">Masala Spiced Chickpeas</div>
                        </div>
                </div>
            </div>
            
            
            <div class="gallery-item">
            	<div class="inner-box">
                        <div class="image-box">
                            <img src="images/background/32.jpg" alt="" />
                            <div class="title-box">Masala Spiced Chickpeas</div>
                        </div>
                </div>
            </div>
            
        </div>
    </section>
    <!--End Gallery Carousel-->

    
              
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

<!--Track Order-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="text-align:center; color:#dc1616;">Track Order Enquiry</h4>
      </div>
      <div class="modal-body">
       <form>
  <div class="form-group">
    <label for="">Company Name:</label>
    <input type="text" class="form-control" id="" placeholder="Company Name">
  </div>
  <div class="form-group">
    <label for="">Contact Person:</label>
    <input type="text" class="form-control" id="" placeholder="Contact Person">
  </div>
  
  <div class="form-group">
    <label for="">Email Id:</label>
    <input type="email" class="form-control" id="" placeholder="Email Id">
  </div>
  
  <div class="form-group">
    <label for="">Mobile No. :</label>
    <input type="tel" class="form-control" id="" placeholder="Mobile No.">
  </div>
  
  <div class="form-group">
    <label for="">Land Line No:</label>
    <input type="tel" class="form-control" id="" placeholder="Land Line No">
  </div>
  
   <div class="form-group">
    <label for="">Address</label>
   <textarea rows="3" cols="3" class="form-control" placeholder="Address"></textarea>
  </div>
  
  
  <div class="form-group">
    <label for="">Location:</label>
 <select class="form-control">
 <option>--Select--</option>
 <option>One</option>
 <option>Two</option>
 </select>
  </div>
  
  
  <div class="form-group">
    <label for="">Pincode:</label>
 <input type="text" class="form-control" id="" placeholder="Pincode">
  </div>
  
  <div class="form-group">
    <label for="">Website Url:</label>
 <input type="text" class="form-control" id="" placeholder="Website Url">
  </div>
  
  <div class="checkbox">
    <label>
      <input type="checkbox"> Accept Privacy Policy and Term & Conditions
    </label>
  </div>
 
</form>
</div>
      <div class="modal-footer">
       <button type="submit" class="btn btn-success">Submit</button>
       <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-long-arrow-up"></span></div>

<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/revolution.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
</body>
</html>