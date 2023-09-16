<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

<title>আহার || Healthy Weight</title> 
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/revolution-slider.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/bootstrap.vertical-tabs.css" rel="stylesheet">
<!-- Responsive -->

<link href="css/responsive.css" rel="stylesheet">

<style>
    	.spacer {
		height: 40px; /* Adjust the height as needed */
	}

.bmi_advice {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh; /* This will make the section take up the full viewport height */
    text-align: center; /* Center-align the text within the section */
}
</style>

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
                       <li class="cart-btn"><a href="shopping-cart.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="count">2</span></a></li>
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
                            <div class="logo"><a href="index.html"><img src="images/logo.png" alt="Restaurant Wheel"></a></div>
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
                                        <li>Want to go back to Home!<br><button type="submit" class="btn btn-default"><a href="home.php">Back</a></button></li>
                                        <li>Do You Want To Calculate Again<br><button type="submit" class="btn btn-default"><a href="bmi_calculator.php">Calculate Again</a></button></li>
                                    </ul>
                                </div> 
                            </nav>
                            <!-- Main Menu End-->
                    </div>   
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
                        <li><a href="home.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="ordernow.html">Order Now</a></li>
                        <li><a href="#">Track Order</a></li>
                        <li><a href="snacks.html">Snacks</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li class="dropdown"><a href="#">All Pages</a>
                                            <ul>
                                                <li><a href="home.html">Home</a></li>
                                                <li><a href="about.html">About</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="gallery.html">Gallery</a></li>
                                                <li><a href="ordernow.html">Order Now</a></li>
                                                <li><a href="bmi_calculator.html">BMI Calculator</a></li>
                                                <li><a href="reservation.html">Meal System</a></li>
                                                <li><a href="sign_in.html">Sign In</a></li>
                                                <li><a href="snacks.html">Snacks</a></li>
    
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

    <!-- Page Title -->
    <section class="page-title" style="background-image:url(images/background/5.jpg);">
        <div class="auto-container">
            <h3 style="color: greenyellow;"><b>Your BMI is: <?php $bmi = $_GET['bmi']; echo round($bmi, 2); ?></b></h3>
            <h2>Your BMI Category: Healthy Weight</h2>
        </div>
    </section>

          <!-- Add space here -->
          <div class="spacer"></div>
    
    <!-- BMI Advice and Images -->
    <section class="bmi_advice" style="width:300px; margin:auto;">
        <div class="row clearfix">
        <div class="container">
          <div class="row justify-content-center">
            <div class="parent">
                <div class="col-md-6 col-sm-12">
                    <div class="advice-content">
                        <h3 style="text-align: center;">Advice for Healthy Weight</h3><p></p>
                        <p style="text-align: center;"><b>Congratulations!</b><br>Your BMI indicates that you have a Healthy-Weight. <br>Keep up the fantastic work by continuing your mindful eating and staying active. Your dedication to your health is truly inspiring.<br>Although you have perfect weight, It's important to maintain a balanced diet and you must be careful about your regular diets. </p>
                        <ul>
                            <li><b>BMI Range:</b> A BMI between 18.5 and 24 is generally considered a healthy weight.</li><p></p>
                            <li><b style="color: brown;">Advices:</b><br> Maintaining a healthy weight is a great achievement, but it's still important to make healthy choices to support overall well-being:</li><p></p>
                            <li><b>Balanced Diet:</b> Continue to eat a well-balanced diet with a variety of foods from all food groups.</li><p></p>
                            <li><b>Physical Activity:</b> Stay physically active with regular exercise, such as walking, jogging, or other activities you enjoy.</li><p></p>
                            <li><b>Regular Check-Ups:</b> Schedule routine check-ups with your healthcare provider to monitor your overall health.</li><p></p>
                            <li><b>Mindful Eating:</b> Pay attention to portion sizes and listen to your body's hunger and fullness cues.</li><p></p>
                            </ul>
                    </div>
                </div>
            </div>
          </div>
        </div>
        </div>
    </section>


<section class="sect_product">
    <div class="container">
    <div class="row">
        <h2 style="text-align: center;">Here are some Balanced Diet foods items with calories recommended by experts<br>that will help you to Maintain Current Weight</h2>
        <div class="spacer"></div>
    	
    <!-- BEGIN PRODUCTS -->
    <div class="col-md-3 col-sm-6">
    		<span class="thumbnail">
      			<img src="images/healthy_rice.jpg" alt="...">
      			<h4 style="text-align:center; padding:10px 0;">Brown Rice</h4>	
      			<!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>-->
                  <div class="row">
      				<div class="col-md-12 col-sm-12">
      					<p class="price" style="color:#F00; text-align:center;font-size:18px;">(1 cup cooked): Approx. 215 calories</p>
      				</div>		      				
      			</div>
    		</span>
  		</div>

  		<div class="col-md-3 col-sm-6">
    		<span class="thumbnail">
      			<img src="images/healthy_chicken.jpg" alt="...">
      			<h4 style="text-align:center; padding:10px 0;">Grilled Chicken Breast</h4>
      			<!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>-->
                  <div class="row">
      				<div class="col-md-12 col-sm-12">
      					<p class="price" style="color:#F00; text-align:center;font-size:18px;">(3 ounces): Approx. 120-150 calories</p>
      				</div>		      				
      			</div>
    		</span>
  		</div>

  		<div class="col-md-3 col-sm-6">
    		<span class="thumbnail">
      			<img src="images/healthy_veg.jpg" alt="...">
      			<h4 style="text-align:center; padding:10px 0;">Mixed Vegetables </h4>
      			<!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>-->
                  <div class="row">
      				<div class="col-md-12 col-sm-12">
      					<p class="price" style="color:#F00; text-align:center;font-size:18px;">(1 cup cooked): Approx. 60-100 calories</p>
      				</div>		      				
      			</div>
    		</span>
  		</div>

  		<div class="col-md-3 col-sm-6">
    		<span class="thumbnail">
      			<img src="images/healthy_quinoa.jpg" alt="...">
      			<h4 style="text-align:center; padding:10px 0;">Quinoa</h4>
      			<!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>-->
                  <div class="row">
      				<div class="col-md-12 col-sm-12">
      					<p class="price" style="color:#F00; text-align:center;font-size:18px;">(1 cup cooked): Approx. 220-240 calories</p>
      				</div>		      				
      			</div>
    		</span>
  		</div>

          <div class="col-md-3 col-sm-6">
    		<span class="thumbnail">
      			<img src="images/underweight_salmon.jpg" alt="...">
      			<h4 style="text-align:center; padding:10px 0;">Fish Fry</h4>
      			<!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>-->
                  <div class="row">
      				<div class="col-md-12 col-sm-12">
      					<p class="price" style="color:#F00; text-align:center;font-size:18px;">(3-ounce fillet): Approx. 175-200 calories</p>
      				</div>		      				
      			</div>
    		</span>
  		</div>
        
        <div class="col-md-3 col-sm-6">
    		<span class="thumbnail">
      			<img src="images/healthy_egg.jpg" alt="...">
      			<h4 style="text-align:center; padding:10px 0;">Egg </h4>
      			<!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>-->
                  <div class="row">
      				<div class="col-md-12 col-sm-12">
      					<p class="price" style="color:#F00; text-align:center;font-size:18px;">(1 large): Approx. 70-80 calories</p>
      				</div>		      				
      			</div>
    		</span>
  		</div>
        
        <div class="col-md-3 col-sm-6">
    		<span class="thumbnail">
      			<img src="images/healthy_bread.jpg" alt="...">
      			<h4 style="text-align:center; padding:10px 0;">Brown Bread</h4>
      			<!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>-->
                  <div class="row">
      				<div class="col-md-12 col-sm-12">
      					<p class="price" style="color:#F00; text-align:center;font-size:18px;">(1 slice): Approx. 70-80 calories</p>
      				</div>		      				
      			</div>
    		</span>
  		</div>

          <div class="col-md-3 col-sm-6">
    		<span class="thumbnail">
      			<img src="images/underweight_yogurt.jpg" alt="...">
      			<h4 style="text-align:center; padding:10px 0;">Yogurt</h4>
      			<!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>-->
                  <div class="row">
      				<div class="col-md-12 col-sm-12">
      					<p class="price" style="color:#F00; text-align:center;font-size:18px;">(1 cup): Approx. 100-150 calories</p>
      				</div>		      				
      			</div>
    		</span>
  		</div>
        
          <div class="col-md-3 col-sm-6">
    		<span class="thumbnail">
      			<img src="images/healthy_salad.jpg" alt="...">
      			<h4 style="text-align:center; padding:10px 0;">Salad with Vinaigrette Dressing</h4>
      			<!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>-->
                  <div class="row">
      				<div class="col-md-12 col-sm-12">
      					<p class="price" style="color:#F00; text-align:center;font-size:18px;">(1 serving):<br> Approx. 100-150 calories</p>
      				</div>		      				
      			</div>
    		</span>
  		</div>

        <div class="col-md-3 col-sm-6">
    		<span class="thumbnail">
      			<img src="images/healthy_brocoli.jpg" alt="...">
      			<h4 style="text-align:center; padding:10px 0;">Broccoli</h4>
      			<!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>-->
                  <div class="row">
      				<div class="col-md-12 col-sm-12">
      					<p class="price" style="color:#F00; text-align:center;font-size:18px;">(1 cup cooked): Approx. 55 caloriess</p>
      				</div>		      				
      			</div>
    		</span>
  		</div>

          <div class="col-md-3 col-sm-6">
    		<span class="thumbnail">
      			<img src="images/underweight_olive.jpg" alt="...">
      			<h4 style="text-align:center; padding:10px 0;">Olive Oil</h4>
      			<!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>-->
                  <div class="row">
      				<div class="col-md-12 col-sm-12">
      					<p class="price" style="color:#F00; text-align:center;font-size:18px;">(1 tablespoon): Approx. 120 calories</p>
      				</div>		      				
      			</div>
    		</span>
  		</div>

          <div class="col-md-3 col-sm-6">
    		<span class="thumbnail">
      			<img src="images/excessive_berries.jpg" alt="...">
      			<h4 style="text-align:center; padding:10px 0;">Berries</h4>
      			<!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>-->
                  <div class="row">
      				<div class="col-md-12 col-sm-12">
      					<p class="price" style="color:#F00; text-align:center;font-size:18px;">(1 cup):<br> Approx. 50-85 calories</p>
      				</div>		      				
      			</div>
    		</span>
  		</div>
  		<!-- END PRODUCTS -->
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
                              <h2>Ordering & Delivery Hours</h2>
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
