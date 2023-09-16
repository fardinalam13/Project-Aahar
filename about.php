<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

<title>আহার || About</title> 
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/revolution-slider.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/bootstrap.vertical-tabs.css" rel="stylesheet">
<!-- <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon"> -->
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
                        <div class="logo"><a href="about.php"><img src="images/logo.png" alt="Artica"></a></div>
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
                        <li><a href="ordernow.php">Order Now</a></li>
                        <li><a href="food_zone.php">Food zone</a></li>
                        <li><a href="bmi_calculator.php">BMI Calculator</a></li>
                        <li class="dropdown"><a href="#">All Pages</a>
                                            <ul>
                                                <li><a href="home.php">Home</a></li>
                                                <li><a href="about.php">About</a></li>
                                                <li><a href="contact.php">Contact</a></li>
                                                <li><a href="food_cart.php">Food Cart</a></li>
                                                <li><a href="check_out.php">Checkout</a></li>
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
    <section class="page-title" style="background-image:url(images/background/21.webp);">
    	<div class="auto-container">
            <h3 style="color:#fff;">Home-Made Hygenic Dishes</h3>
            <h2>About Us</h2>
        </div>
    </section>
    <!--Page Title-->
    







<!-- -->



        <!-- Add space here -->
        <div class="spacer"></div>

    <!--Vendor Section-->
    <section class="Vendor alternate">
    	<div class="auto-container">
        	<div class="row clearfix">
            
            	<!--Column-->
            	<div class="column col-md-6 col-sm-12 col-xs-12">
                	<div class="inner-box">
                    	<div class="sec-title">
                        	<h2>Great New Dishes</h2>
                            <h3>Discover Homemade Foods Near You</h3>
                        </div>
                        <div class="content">
                            <div class="text">
                            	<p>Bengal from time immemorial had been a rice-centric economy which keeping in mind its hot and humid weather is perfect to consume as well. It's not only food, but Bengal's relationship with rice is a very emotional one. Bengali traditions, festivals, and all its ceremonies have a consecrated use of rice. From snacks to celebratory meals, from everyday staple to a special therapeutic meal ('pothyo' পথ্য) Rice is used in many Avatars, in many ingenious ways.</p>
                                <p>In Bengal the month Bhadro is infamous for two reasons. Bhadrer pawcha garom (The sticky highly humid weather) and Bhadrer Paka Taal (ripe palmyra or toddy palm) and for obvious reasons these two are interconnected.</p>
                            </div>
                            <a href="#" class="read-more theme-btn btn-style-one">Read More</a>
                        </div>
                    </div>
                </div>
                
                <!--Images Column-->
                <div class="images-column col-md-6 col-sm-12 col-xs-12">
                	<div class="inner-box">
                    	<div class="row clearfix">
                        	<div class="column col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            	<figure class="image-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                	<img src="images/resource/about-5.png" alt="" />
                                </figure>
                            </div>
                            <div class="column col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            	<figure class="image-box wow fadeInDown" data-wow-delay="0ms" data-wow-duration="1500ms">
                                	<img src="images/resource/about-8.jpg" alt="" />
                                </figure>
                            </div>
                            <div class="column col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            	<figure class="image-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                	<img src="images/resource/about-7.jpg" alt="" />
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--End Vendor Section-->

            <!-- Add space here -->
            <div class="spacer"></div>

    <!--Parallax Image Section-->
    <section class="parallax-image-section" style="background-image:url(images/background/5.jpg);">
    	<div class="auto-container">
        	<h2>Healthy Fresh And Hot Dishes.</h2>
            <h4>Best offers from the house chef.</h4>
        </div>
    </section>
    <!--End Parallax Image Section-->
    
    <!--Services Section-->
    <section class="Customer services-section">
    	
        <div class="auto-container">
        	<!--sec title one-->
            <div class="sec-title-one">
                <h2>One of Our Services for customers</h2>
                <h4>Food: We Create Delicous Memory</h4>
            </div>
        	
        	<div class="row clearfix">
            	<!--Services Block-->
            	<div class="services-block col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<!--Icon Box-->
                    	<div class="icon-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                        	<img src="images/resource/services-1.png" alt="" />
                        </div>
                        <h3><a href="#">Rice</a></h3>
                        <div class="text">ভেতো বাঙালি কথাটির সাথে আমরা সকলেই পরিচিত। অর্থাৎ বাঙালির যে প্রধান খাদ্য ভাত সেটা নামেই বোঝা যায়। বাঙালি প্রধান খাদ্য ভাত হওয়ার জন্য যথেষ্ট যুক্তি সংগত কারণ আছে সেগুলি হল :

                            <p>✓✓ মানুষের খাদ্যাভ্যাস তার অবস্থানের ওপর অনেকটাই নির্ভর করে। বাঙালিরা মূলত পশ্চিমবঙ্গ এবং বাংলাদেশ এ বেশি শতাংশে বাস করেন এবং এই জায়গাগুলি যথাক্রমে গাঙ্গেয় ও পদ্মা নদীর তীরবর্তী অঞ্চল হওয়ায় এখানকার মাটির উর্বরতা খুব বেশি, এবং মৌসুমী বায়ুর জন্য প্রচুর পরিমাণে বৃষ্টিপাত হয়- যেটি ধান চাষের জন্য খুবই উপযুক্ত। সেই জন্য চাল এখানে খুব সহজলভ্য এবং বাজারে চালের ধার্যমূল্য মধ্যবিত্ত মানুষের ক্রয় ক্ষমতার সীমার মধ্যেই থাকে।</p>
                            
                           <p>✓✓ভাত মূলত কার্বোহাইড্রেট প্রকৃতির খাদ্য। ফলে এটি খেলে সহজেই এনার্জি বা শক্তি পাওয়া যায়, কার্বোহাইড্রেট জাতীয় খাদ্য পেশি এবং অঙ্গের মধ্যে থাকা প্রোটিনের অপচয় কমায়। আমরা যদি কার্বোহাইড্রেট জাতীয় খাদ্য গ্রহণ না করে শুধুমাত্র প্রোটিন খেতে থাকি তাহলে আমরা দৈনিক কাজকর্ম করার জন্য প্রয়োজনীয় শক্তি পাব না। আবার ফ্যাট জাতীয় খাদ্য বেশি খেলে শরীরে মেদ জমার সম্ভাবনা থাকে।</p>
                            
                            ✓✓ভাত হজম করা খুব সহজ অর্থাৎ সহজপাচ্য, সেই জন্য অনেক মানুষ এটি খেয়ে থাকেন। ( অনেকেই আটার তৈরি খাবার খেয়ে হজম করতে পারেন না)।</div>
                        <a class="read-more" href="blog-single.html">Read More</a>
                    </div>
                </div>
                
                <!--Services Block-->
            	<div class="services-block col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<!--Icon Box-->
                    	<div class="icon-box wow fadeIn" data-wow-delay="300ms" data-wow-duration="1500ms">
                        	<img src="images/resource/services-2.jpg" alt="" />
                        </div>
                        <h3><a href="#l">Curry</a></h3>
                        <div class="text">বাংলাদেশী রন্ধনশৈলী বলতে বাংলাদেশে প্রচলিত খাদ্য ও রন্ধনসম্পর্কীয় ঐতিহ্যকে বোঝায়। অতীতে, রন্ধনপ্রণালীতে ভাতের সাথে পরিবেশিত মাছ, শাকসবজি এবং মসুর ডালের উপর জোর দেওয়া হত। ইতিহাস এবং বাংলাদেশী ভূগোলের পার্থক্যের কারণে, রন্ধনশৈলীটি আঞ্চলিক বৈচিত্র্যে সমৃদ্ধ।
                            <p> </p>
                            <p>✓✓ সবজির পদ: আলু ভর্তা,বেগুন ভর্তা,লাউ চিংড়ি,লাল শাক ভাজা,বিভিন্ন সবুজ বা অন্যান্য সবজি</p>
                            <p>✓✓ মাছের পদ: চিংড়ি মালাই তরকারি,ইলিশ ভাজা,কই মাছের কারি,মাছের ঝোল,রুই ভাজা,শুটকি ভুনা</p>
                            <p>✓✓ মাংসের পদ: গরুর কালা ভুনা,গরুর মাংসের তরকারি,গোরুর ভুরি ভাজা/ভুনা (রান্না করা গরুর মাংসের পেট),মুরগির রোস্ট,মুরগির তরকারি</p>
                            <p>✓✓ ডাল: ডাল,হালিম,মিষ্টি ছোলার ডাল</p>
                        </div>
                        <a class="read-more" href="blog-single.html">Read More</a>
                    </div>
                </div>
                
                <!--Services Block-->
            	<div class="services-block col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<!--Icon Box-->
                    	<div class="icon-box wow fadeIn" data-wow-delay="600ms" data-wow-duration="1500ms">
                        	<img src="images\resource\services-3.jpg" alt="" />
                        </div>
                        <h3><a href="#">Snacks</a></h3>
                        <div class="text">সারাদিনে শরীরের প্রয়োজনীয় পুষ্টি জোগাতে সকালের নাস্তা খাওয়াটা বেশ জরুরী। সকালে ভরপেট নাস্তা করলে দুপুরের আগে খুব বেশি খিদে লাগে না, কারণে-অকরণে এটা-সেটা খাওয়ারও দরকার হয়না। স্বাস্থ্যসম্মত সকালের নাস্তা হতে পারে ক্যালসিয়াম এবং আঁশ জাতীয় খাবারের ভালো উৎস।
                            <P> </P>
                            <P>পিঠাঃ ভাপা পিঠা, নকশি পিঠা, পুলি পিঠা।</P>
                            <P>মিষ্টান্নঃ চমচম মিষ্টি,  কুমিল্লার রসমালাই, ফালুদা, জিলাপি, মিষ্টি দই, পায়েশ, রসগোল্লা, সন্দেশ, মুড়ি লারু।</P>
                            <P>ঝালখাবারঃ চটপটি, ফুসকা, ডিমের চপ, দই পুরি, হালিম, ঝালমুড়ি, মোগলাই। </P>
                            <P>বাকরখানি, কাবাব, বিভিন্ন ফল, চা, বিস্কুট।</P>
                        </div>
                        <a class="read-more" href="blog-single.html">Read More</a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--Customer Services Section-->

        <!--Vendor Services Section-->
        <section class="Vendor services-section">
    	
            <div class="auto-container">
                <!--sec title one-->
                <div class="sec-title-one">
                    <h2>One of Our Services for Vendors</h2>
                    <h4>We Provide a Trustworthy Platform</h4>
                </div>
                
                <align n="center">
                    <!--Services Block-->
                    <div class="services-block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <!--Icon Box-->
                            <div class="icon-box wow fadeIn" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <img src="images/resource/icon1.png" alt="" />
                            </div>
                            <h3><a href="blog-single.html"></a></h3>
                            <div class="text">বর্তমান সময়ে অনেক  খাদ্য সরবরাহকারী রয়েছে যারা একটি ভালো এবং নির্ভরযোগ্য মাধ্যমের অভাবে খাদ্য সরবরাহ করতে পারছে না। তাদের ভালো রান্না করার ক্ষমতা এবং স্বাস্থ্যসম্মত খাবার বানানোর দক্ষতা থাকার পরেও তারা তাদের খাবার ক্রেতাদের কাছে পৌঁছে দিতে পারছে না। "আহার" এমন একটি অ্যাপ যা একজন খাদ্য সরবরাহকারীর জন্য একটি উপযুক্ত মাধ্যম। এই অ্যাপটি ব্যাবহার করে খাদ্য সরবরাহকারী ন্যায্য মূলে তার খাবার ক্রেতার কাছে ব্রিক্রি করতে পারবে।</div>
                            <a class="read-more" href="blog-single.html">Read More</a>
                        </div>
                    </div>
                </align>
                    
                </div>
            </div>
        </section>
        <!--Vendor Services Section-->
    
    <!--Chef Info Section-->
    <section class="chef-info-section" style="background-image:url(images/background/6.png);">
    	<div class="auto-container">
        	<div class="row clearfix">
            	<!--Image Column-->
            	<div class="image-column col-md-6 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<figure class="image-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        	<img src="images/resource/master-chef.jpg" alt="" />
                        </figure>
                    </div>
                </div>
                <div class="content-column col-md-6 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<!--Sec Title Three--> 
                    	<div class="sec-title-three">
                        	<h2>Md Nasim Molla</h2>
                            <h4>One of our Vendors</h4>
                        </div>
                        
                        <div class="text">নাসিম মোল্লা একজন অভিজ্ঞ রাঁধুনি। সে দীর্ঘ ৫ বছর রান্নার সাথে জড়িত। নাসিম তার রান্নার জন্য তার এলাকায় পরিচিত। নাসিম তার রান্না করা খাবার দিয়ে উপার্জন করতে চায়। কিন্তু তার কাছে পর্যাপ্ত টাকা না থাকায় সে কোন রেস্তোরাঁ খুলতে পারে নাই। তাই সে সিদ্ধান্ত নিল , সে ঘরে রান্না করে তা মানুষের কাছে বিক্রি করবে। তাই জনাব নাসিম মোল্লা আমাদের অ্যাপটি ব্যবহার করার সিদ্ধান্ত নেন।</div>
                        
                        <!--Social Icon Two-->
                    <ul class="social-icon-two">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="rahil152131@gmail.com"><span class="fa fa-envelope"></span></a></li>
                        <li><a href="https://www.google.com/maps/place/Noakhali+Science+and+Technology+University"><span class="fa fa-map-marker"></span></a></li>
                        <li><a href="https://www.instagram.com/ahar_food_project/"><span class="fa fa-instagram"></span></a></li>
                    </ul>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Chef Info Section-->
    
    <!--Contact Banner-->
    <div class="contact-banner" style="background-image:url(images/background/11.jpg);">
    	<div class="auto-container">
        	<div class="row clearfix">
            	<div class="column col-md-6 col-sm-12 col-xs-12">
                	<h2>If you have any query then you can cantact with us by clicking on </h2>
                </div>
                <div class="column col-md-6 col-sm-12 col-xs-12 text-right">
                	<a href="contact.html" class="theme-btn btn-style-one">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <!--Contact Banner-->
    
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
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="js/script.js"></script>
</body>
</html>