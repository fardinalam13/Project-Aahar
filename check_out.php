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
    header("Location: login.php");
    exit();
}


?>

<?php
require_once('vendor/autoload.php');

$callbackURL = 'http://localhost/Aahar/home.php';

$app_key ='4f6o0cjiki2rfm34kfdadl1eqq';
$app_secret ='2is7hdktrekvrbljjh44ll3d9l1dtjo4pasmjvs5vl5qr3fug4b';
$username ='sandboxTokenizedUser02';
$password ='sandboxTokenizedUser02@12345';
$base_url = 'https://tokenized.sandbox.bka.sh';

// Start Grant Token
$client = new \GuzzleHttp\Client();
$response = $client->request('POST', $base_url.'/v1.2.0-beta/tokenized/checkout/token/grant', 
[
  'body' => "{'app_key':$app_key, 'app_secret':$app_secret}",
  'headers' => [
    'accept' => 'application/json',
    'content-type' => 'application/json',
    'password' => $password,
    'username' => $username,
  ],
]);
$response = json_decode($response->getBody());
$id_token = $response->id_token;
// End Grant Token





if (isset($_GET['a'])) {
$amount = $_GET['a'];

$InvoiceNumber = 'aahar'.rand();


// Strat Create Payment
$auth = $id_token;
$requestbody = array(
'mode' => '0011',
'amount' => $amount,
'currency' => 'BDT',
'intent' => 'sale',
'payerReference' => $InvoiceNumber,
'merchantInvoiceNumber' => $InvoiceNumber,
'callbackURL' => $callbackURL
);
 $url = curl_init($base_url.'/v1.2.0-beta/tokenized/checkout/create');
$requestbodyJson = json_encode($requestbody);
$header = array(
'Content-Type:application/json',
'Authorization:'.$auth,
'X-APP-Key:'.$app_key
);
curl_setopt($url, CURLOPT_HTTPHEADER, $header);
curl_setopt($url, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($url, CURLOPT_RETURNTRANSFER, true);
curl_setopt($url, CURLOPT_POSTFIELDS, $requestbodyJson);
curl_setopt($url, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($url, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
$resultdata = curl_exec($url);
curl_close($url);
$obj = json_decode($resultdata);
header("Location: " . $obj->{'bkashURL'});
// End Create Payment
}






// execute payment
if (isset($_GET['paymentID'],$_GET['status']) && $_GET['status'] == 'success') {
    $paymentID = $_GET['paymentID'];  
    $auth = $id_token;
    $post_token = array( 'paymentID' => $paymentID );
    $url = curl_init($base_url.'/v1.2.0-beta/tokenized/checkout/execute');       
    $posttoken = json_encode($post_token);
                $header = array(
                    'Content-Type:application/json',
                    'Authorization:' . $auth,
                    'X-APP-Key:'.$app_key
                );
                curl_setopt($url, CURLOPT_HTTPHEADER, $header);
                curl_setopt($url, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($url, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($url, CURLOPT_POSTFIELDS, $posttoken);
                curl_setopt($url, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt($url, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
                $resultdata = curl_exec($url);
                curl_close($url);
              $obj = json_decode($resultdata);
    
    $customerMsisdn = $obj->customerMsisdn;
    $paymentID = $obj->paymentID;
    $trxID = $obj->trxID;
    $merchantInvoiceNumber = $obj->merchantInvoiceNumber;
    $time = $obj->paymentExecuteTime;
    $transactionStatus = $obj->transactionStatus;
    $amount = $obj->amount;
    
    print_r($obj);
    }
// execute payment

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>আহার || Check out</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/revolution-slider.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
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
                                <li><a href="food_cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart  (<?php
                            if(isset($_SESSION["cart"])){
                            $count = count($_SESSION["cart"]); 
                            echo "$count"; 
                            }
                            else
                                echo "0";
                            ?>) </a></li> 
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
                                            <li><a href="food_cart.php">Food Cart</a></li>
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
                        <li><a href="food_zone.php">Order Now</a></li>
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
    







<!-- -->








    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/10.jpg);">	
    	<div class="auto-container">
    		<h3>Hand-Crafted Dishes Sourced</h3>
        	<h2>Checkout</h2>
        </div>
    </section>
    <!--Page Title-->
    
    <div class="checkout-page">
        <div class="auto-container">
            <!--Billing Details-->
            <div class="billing-details">
                <div class="shop-form default-form">
                    <form method="post" action="check_out.php">
                        <div class="row clearfix">
                            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                
                                <div class="default-title"><h2>Delivery Address</h2></div>
                                <?php
                                $user_id = $_SESSION["user_id"];
                                $sql = "SELECT address FROM users WHERE user_id = ?";
                                $stmt = $conn->prepare($sql);
                                if ($stmt === false) {
                                    // Handle the error if the prepare statement fails
                                    die("Prepare failed: " . $conn->error);
                                }
                                
                                $stmt->bind_param("i", $user_id);
                                if ($stmt->execute()) {
                                    $stmt->bind_result($user_address);
                                    $stmt->fetch();
                                    $stmt->close();
                                } else {
                                    // Handle the error if the execution fails
                                    die("Execute failed: " . $stmt->error);
                                }
                                ?>
                                   
                                    <input type="text" id="address" name="address" value="<?php echo $user_address; ?>"><br>
                                    <button type="submit" class="theme-btn btn-style-three place-order"> Confirm Address </button>                   
                            </div>  
                            
                        </div>                             
                    </form>
                    <?php
            // Handle form submission to update the address
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $new_address = $_POST["address"];

                // Update the address in the database
                $update_sql = "UPDATE users SET address = ? WHERE user_id = ?";
                $update_stmt = $conn->prepare($update_sql);

                if ($update_stmt === false) {
                    // Handle the error if the prepare statement fails
                    die("Prepare failed: " . $conn->error);
                }

                $update_stmt->bind_param("si", $new_address, $user_id);

                if ($update_stmt->execute()) {
                    // Address updated successfully
                    $user_address = $new_address; // Update the displayed address
                    echo "<script> alert('Delivery Address Confirmed!')</script>";
                } else {
                    // Handle the error if the execution fails
                    die("Execute failed: " . $update_stmt->error);
                }

                $update_stmt->close();
            }
            ?>
                                
                </div>
                
            </div>
            <!--End Billing Details-->
            <?php
  $gtotal = 0;
  foreach($_SESSION["cart"] as $keys => $values)
  {

    $itemID = $values["item_id"];
    $quantity = $values["quantity"];
    $price =  $values["item_price"];
    $total = ($values["quantity"] * $values["item_price"]);
    $vendorID = $values["vendor_id"];
    $userId = $_SESSION["user_id"];
    $order_date = date('Y-m-d H:i:s');
    
    $gtotal = $gtotal + $total;


     $query = "INSERT INTO orders (order_date, item_id,  quantity, total_price, user_id, vendor_id) 
              VALUES ('" . $order_date . "','" .  $itemID . "','" . $quantity . "','" . $total . "','" . $userId . "','" . $vendorID . "')";
             

              $success = $conn->query($query);         

      if(!$success)
      {
        ?>
        <div class="container">
          <div class="jumbotron">
            <h1>Something went wrong!</h1>
            <p>Try again later.</p>
          </div>
        </div>

        <?php
      }
      
  }

        ?>


            <h4> <div class="clearfix">Total Price: <?php echo "$gtotal"; ?> BDT <!--<span class = "theme-btn btn-style-three pull-right"> </span>--></div></h4>
            <h5> Deliver Charge : 20 BDT</h5>
            <?php $full_payment =20 + $gtotal; ?>
            <h4> <b> You Have to Pay:  <?php echo "$full_payment";?> BDT</b></h4>
            <!--Place Order-->
            <div class="place-order">
                <div class="default-title"><h2>Payment Method</h2></div>
                
                <!--Payment Options-->
                <div class="payment-options">
                    <ul>
                        <li>
                            <div class="radio-option">
                                <input type="radio" name="payment-group" id="payment-3">
                                <label for="payment-3">Cash On Delivery</label>
                            </div>
                        </li>
                        <li>
                            <div class="radio-option">
                                <input type="radio" name="payment-group" id="payment-4">
                                <label for="payment-4">Bkash</label>
                            </div>
                        </li>
                    </ul>
                </div>
                
                <button type="button" class="theme-btn btn-style-three place-order" id="placeOrderBtn">Place Order</button>
                <!--<a href="paypal_payment.php" >-->
                <div id="paypal-button-container"></div>

            </div>
            <!--End Place Order-->
            
        </div>
    </div>

    
    
    
            
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



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Include jQuery (if not already included) -->

<script>
$(document).ready(function () {
    // Add a click event listener to the "Place Order" button
    $('#placeOrderBtn').click(function () {
        // Check if the "Cash on Delivery" option is selected
        if ($('#payment-3').is(':checked')) {
            // Display an alert message
            //alert("Your order has been placed successfully.");
            
            // Redirect to home.php
            window.location.href = 'customer_order_details.php';
        } else if ($('#payment-4').is(':checked')) { // Check if the "PayPal" option is selected
            // Redirect to paypal_payment.php
            window.location.href = 'https://sandbox.payment.bkash.com/redirect/tokenized/?paymentID=TR0011i0lEcPY1694923171707&hash=RwWVF!4wnCTJWtACA_z(c(vmy7umXW5_69ys0yguuNe2q(MC5oNRHcHogAs-CSuyKjPSwcNZwgM2U)gEIP3BHLM)xFR_HOWomDCr1694923176605&mode=0011&apiVersion=v1.2.0-beta';
        } else {
            // If no payment option is selected, display an error message
            alert("Please select a payment option.");
        }
    });
});
</script>
<!-- <script>
$(document).ready(function () {
    // Add a click event listener to the "Place Order" button
    $('#placeOrderBtn').click(function () {
        // Check if the "Cash on Delivery" option is selected
        if ($('#payment-3').is(':checked')) {
            // Display an alert message
            //alert("Your order has been placed successfully.");

            // Redirect to home.php
            window.location.href = 'customer_order_details.php';
        } else if ($('#payment-4').is(':checked')) { // Check if the "Bkash" option is selected
            // Retrieve the transaction token from the query parameter
            var transactionToken = getParameterByName('token');

            if (transactionToken) {
                // Construct the Bkash redirect URL with the token
                var bkashRedirectURL = 'http://localhost/bKash-Payment-geteway/bkash_payment.php?token=' + transactionToken;

                // Redirect the user to the Bkash payment gateway URL
                window.location.href = bkashRedirectURL;
            } else {
                // Handle the case where the token is missing or invalid
                alert("Invalid transaction token.");
            }
        } else {
            // If no payment option is selected, display an error message
            alert("Please select a payment option.");
        }
    });

    // Function to get URL query parameters by name
    function getParameterByName(name, url) {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, '\\$&');
        var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, ' '));
    }
});
</script> -->

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


