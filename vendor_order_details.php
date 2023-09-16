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
?>
<?php
session_start();

// Check if the vendor is logged in
if (isset($_SESSION["vendor_name"])) {
    $vendor_name = $_SESSION["vendor_name"];
} else {
    // Redirect to the login page if not logged in
    header("Location: sign_in.php");
    exit();
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>View Order details - Vendor || আহার </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/revolution-slider.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/bootstrap-social.css" rel="stylesheet"/>
<!-- <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon"> -->
<!-- Responsive -->

<link href="css/responsive.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #0daecb;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #c8ccce;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            margin-top: 0;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

    </style>
</head>
<body>

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
                        <div>
                            <ul class="clearfix">
                                <li>Helpline: +8801789080090</li>
                            </ul>
                        </div>
                        
                    </div>
                    
                    <div style="text-align: center;">Welcome, <?php echo $vendor_name; ?>!<br>Are you ready to serve your food!</div> 
                
                
                <!--Top Right-->
                <div class="top-right">
    
                   <!-- Modify the drop-down menu based on whether the vendor is logged in or not -->
                   <li class="eng-dropdown dropdown">

                        <?php
                                
                                if (isset($_SESSION["vendor_name"])) {
                                    // If the vendor is logged in, display their username
                                    $vendor_name = $_SESSION["vendor_name"];
                                    echo '<a class="btn btn-default dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#">' . $vendor_name . '</a>';
                                } else {
                                    // If the vendor is not logged in, display "Account"
                                    echo '<a class="btn btn-default dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#"><span class="icon"></span> Account <span class="arow-icon fa fa-angle-down"></span></a>';
                                }
                         ?>

                        <ul class="dropdown-menu style-one" aria-labelledby="dropdownMenu1">
                          <li><a href="index.html" style="color: aqua;">Log out</a></li>
                        </ul>
                    </li>
                    
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
                                <li><a href="vendor.php">Home</a> </li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="bmi_calculator.php">Calculate BMI</a></li> 
                                <li class="dropdown"><a href="#">My Profile</a>
                                        <ul>
                                            <li><a href="vendor.php">My Home</a></li>
                                            <li><a href="add_item.php">Add Food Items</a></li>
                                            <li><a href="view_items.php">View Food Items</a></li>
                                            <li><a href="remove_items.php">Remove Food Items</a></li>
                                            <li><a href="edit_items.php">Edit Food Items</a></li>
                                            
                                           
                                        </ul>
                                    </li>
                                 </ul>
                            </div>
                        </nav>
                        
                    </div><!--Nav Outer End-->
                    
                    <!-- Hidden Nav Toggler -->
                    <div class="nav-toggler">
                        <button class="hidden-bar-opener"><span class="icon fa fa-bars"></span></button>
                    </div><!-- / Hidden Nav Toggler -->
                    
                </div>    
            </div>
        </div>
    
    </header>

    <section class="hidden-bar right-align">
        
        <div class="hidden-bar-closer">
            <button class="btn"><i class="fa fa-close"></i></button>
        </div>
        
        <!-- Hidden Bar Wrapper -->
        <div class="hidden-bar-wrapper">
        
            <!-- .logo -->
            <div class="logo text-center">
                <a href="index.html"><img src="images/logo-2.png" alt="Artica"></a>			
            </div><!-- /.logo -->
            
            <!-- .Side-menu -->
            <div class="side-menu">
            	<!-- .navigation -->
                <ul class="navigation clearfix">
                <li><a href="vendor.php">Home</a> </li>
                <li><a href="about.php">About</a></li>
                <li><a href="bmi_calculator.php">Calculate BMI</a></li> 
                    <li class="dropdown"><a href="#">My Profile</a>
                                        <ul>
                                        <li><a href="vendor.php">My Home</a></li>
                                            <li><a href="add_item.php">Add Food Items</a></li>
                                            <li><a href="view_items.php">View Food Items</a></li>
                                            <li><a href="remove_items.php">Remove Food Items</a></li>
                                            <li><a href="edit_items.php">Edit Food Items</a></li>
                                        </ul>
                                    </li>
                 </ul>
            </div><!-- /.Side-menu -->
    
        </div><!-- / Hidden Bar Wrapper -->
    </section>
    <!-- / Hidden Bar -->
    

        <br>
    <div class="container">
    <form action="" method="POST">
        <h1>View Order List</h1>

        <?php

        $user_check=$_SESSION['vendor_id'];
        $sql = "SELECT o.order_id, o.item_id, o.order_date, f.item_name, f.item_price, o.quantity,o.user_id FROM orders as o, food_items as f, users as u WHERE o.vendor_id IN (SELECT v.vendor_id FROM vendors as v WHERE v.vendor_id='$user_check' and f.item_id = o.item_id) ORDER BY o.order_date";
        $result = mysqli_query($conn, $sql);
  
        if (mysqli_num_rows($result) > 0)
        {

        ?>

        <table class="table table-striped">
            <thead class="thead-dark">
            <tr>
                <th>  </th>
                <th> Order ID </th>
                <th> Food ID </th>
                <th> Order Date </th>
                <th> Food Name </th>
                <th> Price </th>
                <th> Quantity </th>
                <th> Customer ID </th>
            </tr>
            </thead>

            <?PHP
            //OUTPUT DATA OF EACH ROW
            while($row = mysqli_fetch_assoc($result)){
            ?>

        <tbody>
            <tr>
            <td> <span class="glyphicon glyphicon-menu-right"></span> </td>
                <td><?php echo $row["order_id"]; ?></td>
                <td><?php echo $row["item_id"]; ?></td>
                <td><?php echo $row["order_date"]; ?></td>
                <td><?php echo $row["item_name"]; ?></td>
                <td><?php echo $row["item_price"]; ?></td>
                <td><?php echo $row["quantity"]; ?></td>
                <td><?php echo $row["user_id"]; ?></td>
            </tr>
        </tbody>
        
        <?php } ?>
        </table>
            <br>


        <?php } else { ?>
            <h4 style="text-align: center;">0 RESULTS</h4>
       
        <?php } ?>

                </form>

                </div>
</div>
</div>

<div class="spacer"></div>
<div class="spacer"></div>

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
