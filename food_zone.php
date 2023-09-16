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
<title>আহার || Food Zone</title>
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
                                if (isset($_SESSION["name"]) && isset($_SESSION["user_id"])) {
                                    // If the user is logged in, display their username
                                    $user_name = $_SESSION["name"];
                                    $user_id = $_SESSION["user_id"];
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
                            <li><a href="food_cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart  (<?php
                            if(isset($_SESSION["cart"])){
                            $count = count($_SESSION["cart"]); 
                            echo "$count"; 
                            }
                            else
                                echo "0";
                            ?>) </a></li> 
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
                                    <!-- <li><a href="about.php">About</a></li> -->
                                    <li><a href="food_zone.php">Food Zone</a></li>
                                    <!-- <li><a href="bmi_calculator.php">BMI Calculator</a></li> -->
                                    <li><br>
                                        <form action="food_zone.php" method="POST">
                                                    <select id="itemCategory" name="itemCategory">
                                                    <option value ="" selected>All Category</option>
                                                    <option value="Breakfast">Breakfast</option>
                                                    <option value="Brunch">Brunch</option>
                                                    <option value="Lunch">Lunch</option>
                                                    <option value="Dinner">Dinner</option>
                                                    <option value="Appetizers">Appetizers</option>
                                                    <option value="Salads">Salads</option>
                                                    <option value="Soups">Soups</option>
                                                    <option value="Sandwiches">Sandwiches</option>
                                                    <option value="Burgers">Burgers</option>
                                                    <option value="Pizzas">Pizzas</option>
                                                    <option value="Pasta">Pasta</option>
                                                    <option value="Rice Dishes">Rice Dishes</option>
                                                    <option value="Noodles">Noodles</option>
                                                    <option value="Desserts">Desserts</option>
                                                    <option value="Ice Cream">Ice Cream</option>
                                                    <option value="Coffee">Coffee</option>
                                                    <option value="Tea">Tea</option>
                                                    <option value="Smoothies">Smoothies</option>
                                                    <option value="Juice">Juice</option>
                                                    </select>
                                        </li>

                                        <li><br>         
                                          <button class="btn btn-outline-secondary" type="submit" name="submit">Search </button>       
                                        </li>
                                        </form>

                                    <li class="dropdown"><a href="#">All Pages</a>
                                    	<ul>
                                            <li><a href="home.php">Home</a></li>
                                            <li><a href="about.php">About</a></li>
                                            <li><a href="food_cart.php">Food Cart</a></li>
                                            <li><a href="bmi_calculator.php">BMI Calculator</a></li>
                                            <li><a href="food_zone.php">Food Zone</a></li> 

                                        </ul>
                                    </li>
                                 </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
                         
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
                <a href="index.html"><img src="images/logo-2.png" alt="Aahar"></a>			
            </div><!-- /.logo -->
            
            <!-- .Side-menu -->
            <div class="side-menu">
                    <!-- .navigation -->
                    <ul class="navigation clearfix">
                        <li><a href="home.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="food_cart.php">Food Cart</a></li>
                        <li><a href="food_zone.php">Food Zone</a></li>
                        <li class="dropdown"><a href="#">All Pages</a>
                                            <ul>
                                                <li><a href="home.php">Home</a></li>
                                                <li><a href="about.php">About</a></li>
                                                <li><a href="food_cart.php">Food Cart</a></li>
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
    <section class="page-title" style="background-image:url(images/background/10.jpg);">
    	<div class="auto-container">
    		<h3>Home-Made Dishes Sourced</h3>
        	<h2>Food Zone</h2>
        </div>
    </section>
    <!--Page Title-->
    <div class="spacer"><br></div>
    <section>
        <div align="center">
    <form action="food_zone.php" method="POST">
        <label> <h2>Select Calorie Range to search food items: </label>
            <select id="itemCalorie" name="itemCalorie">
            <option value ="" selected>Select Range</option>
            <option value="0-100">0-100</option>
            <option value="101-200">101-200</option>
            <option value="201-300">201-300</option>
            <option value="301-400">301-400</option>
            <option value="401-500">401-500</option>
            <option value="501-600">501-600</option>
            <option value="601-700">601-700</option>
            <option value="morethan700">More than 700</option>
            </select>        
           <button class="btn btn-outline-secondary" type="submit" name="calorie">Search </button>       
           </h2>                          
        </form>
        </div>
    </section>
 
    <section class="cart-section">
    <div class="container" style="width:95%;">

                <!-- Display Food from food table -->
                <?php
                 $sql = "SELECT * FROM food_items ORDER BY item_id";
                 $result = mysqli_query($conn, $sql);
                
                if(isset($_POST["submit"])){
                    $category = $_POST["itemCategory"];
                    if (!empty($category)) {
                    $sql = "SELECT * FROM food_items WHERE category='$category' ORDER BY item_id";
                    $result = mysqli_query($conn, $sql);    
                    }
                }

                if (isset($_POST["calorie"])) {
                    // Get the selected calorie range from the form
                    $selectedCalorieRange = $_POST["itemCalorie"];
                    $query = "";
            switch ($selectedCalorieRange) {
                case "0-100":
                    $query = "SELECT * FROM food_items WHERE calories >= 0 AND calories <= 100";
                    break;
                case "101-200":
                    $query = "SELECT * FROM food_items WHERE calories >= 101 AND calories <= 200";
                    break;
                case "201-300":
                    $query = "SELECT * FROM food_items WHERE calories >= 201 AND calories <= 300";
                    break;
                case "301-400":
                    $query = "SELECT * FROM food_items WHERE calories >= 301 AND calories <= 400";
                    break;
                case "401-500":
                    $query = "SELECT * FROM food_items WHERE calories >= 401 AND calories <= 500";
                    break;

                case "501-600":
                    $query = "SELECT * FROM food_items WHERE calories >= 501 AND calories <= 600";
                    break;
                case "601-700":
                    $query = "SELECT * FROM food_items WHERE calories >= 601 AND calories <= 700";
                    break;
                case "morethan700":
                    $query = "SELECT * FROM food_items WHERE calories > 700";
                    break;

                default:
                $query = "SELECT * FROM food_items ORDER BY item_id";
                    break;
           }
           $result = mysqli_query($conn, $query); 

                }
               
                if (mysqli_num_rows($result) > 0)
                {
                $count=0;

                while($row = mysqli_fetch_assoc($result)){
                    if ($count == 0)
                    echo "<div class='row'>";

                ?>
                <div class="col-md-3">

                <form method="post" action="food_cart.php?action=add&item_id=<?php echo $row["item_id"]; ?>">
                <div class="mypanel" style="text-align: center;">
                <img src="<?php echo 'uploads/'.$row["item_image"]; ?>" style='width:400px;height:400px' >
                <h4 class="text-dark"><?php echo $row["item_name"]; ?></h4>
                <h4 class="text-danger">Category: <?php echo $row["category"]; ?></h4>
                <h5 class="text-info">Calories: <?php echo $row["calories"]; ?></h5>
                <h5 class="text-danger">BDT: <?php echo $row["item_price"]; ?>/-</h5>
                <h5 class="text-info">Quantity: <input type="number" style="text-align: center;" min="1" max="25" name="quantity" class="form-control" value="1" style="width: 60px;"> </h5>
                <input type="hidden" name="hidden_id" value="<?php echo $row["item_id"]; ?>">
                <input type="hidden" name="hidden_name" value="<?php echo $row["item_name"]; ?>">
                <input type="hidden" name="hidden_price" value="<?php echo $row["item_price"]; ?>">
                <input type="hidden" name="hidden_vendorId" value="<?php echo $row["vendor_id"]; ?>">
                <input type="submit" name="add" style="margin-top:5px;" class="btn btn-success" value="Add to Cart">
                </div>
                </form>
                 <br>   
                    
                </div>

                <?php
                $count++;
                if($count==4)
                {
                echo "</div>";
                $count=0;
                }
                }
                ?>

                </div>
                </div>
                <?php
                }
                else
                {
                ?>

                <div class="container">
                    <div class="jumbotron">
                    <center>
                        <label style="margin-left: 5px;color: red;"> <h1>Oops! No food is available.</h1> </label>
                        
                    </center>
                    
                    </div>
                </div>

                <?php

                }

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