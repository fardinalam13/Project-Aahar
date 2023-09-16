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
    $vendor_id = $_SESSION["vendor_id"];
} else {
    // Redirect to the login page if not logged in
    header("Location: sign_in.php");
    exit();
}
?>

<!DOCTYPE html>
<head>
    <title>Edit Food Item - Vendor || আহার </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/revolution-slider.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap-social.css" rel="stylesheet"/>

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

        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 10px 20px;
            background-color: #8108a3;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #085f73;
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
                                    <li><a href="index.php">Home</a> </li>
                                    <li><a href="about.php">About</a></li>
                                    <!-- <li><a href="bmi_calculator.php">Calculate BMI</a></li>  -->
    
                                    <li class="dropdown"><a href="#">My Profile</a>
                                        <ul>
                                            <li><a href="vendor.php">My Home</a></li>
                                            <li><a href="view_items.php">View Food Items</a></li>
                                            <li><a href="add_item.php">Add Food Items</a></li>
                                            <li><a href="remove_items.php">Remove Food Items</a></li>
                                            <li><a href="pending_order.php">View pending Order Details</a></li>
                                            <li><a href="vendor_order_details.php">View Order Details</a></li>
    
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
                    <li><a href="Vendr.php">Home</a> </li>
                    <li><a href="about.php">About</a></li>
                    <!-- <li><a href="bmi_calculator.php">Calculate BMI</a></li>-->
                    <li class="dropdown"><a href="#">My Profile</a>
                                        <ul>
                                        <li><a href="Vendor.php">My Home</a></li>
                                            <li><a href="view_items.php">View Food Items</a></li>
                                            <li><a href="add_item.php">Add Food Items</a></li>
                                            <li><a href="remove_items.php">Remove Food Items</a></li>
                                            <li><a href="pending_order.php">View pending Order Details</a></li>
                                            <li><a href="vendor_order_details.php">View Order Details</a></li>
    
                                        </ul>
                                    </li>
                 </ul>
            </div><!-- /.Side-menu -->
    
        </div><!-- / Hidden Bar Wrapper -->
    </section>
    <!-- / Hidden Bar -->


    <br><div class="container">
        

        <div class="form-area" style="padding: 10px 10px 110px 10px; ">
        
          <div style="text-align: center;">
            <h1>Edit Food Item</h1>
            
    <div style="text-align: center;">
      <h3>Click On Menu <br><br></h3>
    </div>
    <?php

            if (isset($_GET['submit'])) {
                $item_id = $_GET['item_id'];
                $item_name = $_POST["item_name"];
                $category = $_POST["category"];
                $calories = $_POST["calories"];
                $item_price = $_POST["item_price"];


            $query = mysqli_query($conn, "UPDATE food_items set item_name='$item_name ', category='$category', item_price='$item_price', calories='$calories' where item_id='$item_id'");
            }
            $query= mysqli_query($conn,"SELECT * FROM food_items WHERE vendor_id IN (SELECT vendor_id FROM vendors WHERE vendors.vendor_id=food_items.vendor_id and vendor_id = '$vendor_id') ORDER BY item_id");
            while ($row = mysqli_fetch_array($query)) {

            ?>

            <div class="list-group" style="text-align: center;">
                <?php
            echo "<b><a href='edit_items.php?update= {$row['item_id']}'>{$row['item_name']}</a></b>";  
                ?>
            </div>


            <?php
            }
            ?>
            

            <?php
            if (isset($_GET['update'])) {
            $update = $_GET['update'];
            $query1 = mysqli_query($conn, "SELECT * FROM food_items WHERE item_id=$update");
            while ($row1 = mysqli_fetch_array($query1)) {
                
            ?>
        </div>
        </div>
        <br> 
    
        
        <form action="edit_items.php" method="GET" >
            
            <input class='input' type='hidden' name="item_id" value=<?php echo $row1['item_id'];  ?> />
            <label for="item_name">Item Name</label>
            <input type="text" id="item_name" name="item_name" value=<?php echo $row1['item_name'];  ?> placeholder="Item_name" required="" >
            
            <label for="category">Item Category</label>
            <input type="text" id="category" name="category" value=<?php echo $row1['category'];  ?> placeholder="category" required="" >
            

            <label for="description">Item Calories</label>
            <input type="number" id="calories" name="calories" value=<?php echo $row1['calories']; ?> placeholder="calories" required=""> 
            
            <label for="item_price">Item Price</label>
            <input type="number" id="item_price" name="item_price" min="0" step="0.01" value=<?php echo $row1['item_price'];  ?> placeholder="Item_price" required="">
 
            <br>
            <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right" onclick="display_alert()" value="Display alert box">Update</button>
        </form>
        <br>

        </div>
        

    
    <?php
}
}

  ?>  
<?php
mysqli_close($conn);
?>

</div>
</div>
</div>

<div class="spacer"><br><br></div>

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



<script>
function display_alert() {
  alert("Updated Successfully");
}


</script>
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