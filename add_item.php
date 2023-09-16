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

//Check if the vendor is logged in
if (!isset($_SESSION["vendor_name"])) {
    // Redirect to the login page if not logged in
    header("Location: sign_in.php");
    exit();
}

    $vendor_id = $_SESSION["vendor_id"];
    $vendor_name = $_SESSION["vendor_name"];
    // Check if the form is submitted
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $item_name = $_POST["item_name"];
    $category = $_POST["category"];
    $calories = $_POST["calories"];
    $item_price = $_POST["item_price"];
    
    // Handle image upload
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == UPLOAD_ERR_OK) {
        // Specify the directory where you want to save the uploaded image
        $uploadDir = "uploads/";

        // Generate a unique name for the image to prevent overwriting
        $uniqueName = uniqid() . "_" . $_FILES["image"]["name"];

        // Move the uploaded image to the specified directory
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $uploadDir . $uniqueName)) {
            // The image was uploaded successfully, and $uniqueName now contains the image file name
            $item_image = $uniqueName;
        } else {
            // Handle the case where the image upload fails
            echo "Error uploading image.";
        }
    } else {
        // Handle the case where no image was uploaded
        echo "No image uploaded.";
    }

    $sql = "INSERT INTO food_items (item_name, category, calories, item_price, item_image, vendor_id) VALUES (?, ?, ?, ?, ?, ?)";
    
    // Use a prepared statement to prevent SQL injection
    $stmt = $conn->prepare($sql);
    
    // Bind parameters
    $stmt->bind_param("sssssi", $item_name, $category, $calories, $item_price, $item_image, $vendor_id);
    
    // Execute the statement
    if ($stmt->execute()) {
        // Item added successfully, redirect to view_items.php
        echo "<script> alert('Item added successfully')</script>";
        header("Location: view_items.php");
        exit();
    } else {
        // Error occurred while adding the item
        echo "Error: " . $stmt->error;
    }
}
    // Close the statement
    //$stmt->close();

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Food Item - Vendor || আহার </title>
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
                    
                    <div style="text-align: center;">Welcome, <?php echo isset($vendor_name) ? $vendor_name : 'Guest'; ?>!<br>Are you ready to serve your food!</div>
                
                
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
                                    <li><a href="index.html">Home</a> </li>
                                    <li><a href="about.php">About</a></li>
                                    <!-- <li><a href="bmi_calculator.php">Calculate BMI</a></li>-->
    
                                    <li class="dropdown"><a href="#">My Profile</a>
                                        <ul>
                                            <li><a href="vendor.php">My Home</a></li>
                                            <li><a href="view_items.php">View Food Items</a></li>
                                            <li><a href="remove_items.php">Remove Food Items</a></li>
                                            <li><a href="edit_items.php">Edit Food Items</a></li>
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
                    <li><a href="index.html">Home</a> </li>
                    <li><a href="about.php">About</a></li>
                    <!-- <li><a href="bmi_calculator.php">Calculate BMI</a></li>--> 
                     <li class="dropdown"><a href="#">My Profile</a>
                                        <ul>
                                        <li><a href="vendor.php">My Home</a></li>
                                            <li><a href="view_items.php">View Food Items</a></li>
                                            <li><a href="remove_items.php">Remove Food Items</a></li>
                                            <li><a href="edit_items.php">Edit Food Items</a></li>
                                            <li><a href="vendor_order_details.php">View Order Details</a></li>
                                            <li><a href="pending_order.php">View pending Order Details</a></li>
                                        </ul>
                                    </li>
                 </ul>
            </div><!-- /.Side-menu -->
    
        </div><!-- / Hidden Bar Wrapper -->
    </section>

        <br> 
    <div class="container">
        <h1>Add Food Item</h1>
        
        <form action="add_item.php" method="post" enctype="multipart/form-data">
            <label for="item_name">Item Name</label>
            <input type="text" id="item_name" name="item_name" required>
            
            <label for="category">Item Category</label>
                    <select id="category" name="category" required>
                        <option value="">Select Category</option>
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

            
            <label for="calories">Item Calories</label>
            <input type="number" id="calories" name="calories" required>
            
            <label for="item_price">Item Price</label>
            <input type="number" id="item_price" name="item_price" min="0" step="0.01" required>
            
            <label for="itemImage">Select an image</label>
            <input type="file" name="image" class="form-control">
 
            <br>
            <button type="submit" name="submit">Add Item</button>
        </form>
        <br>
    </div>

    <div class="spacer"></div>

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
