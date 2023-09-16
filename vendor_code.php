<?php
session_start();

include('dbcon.php');


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';


function sendemail_verify($vendor_name, $email, $verify_token)
{
    
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    //$mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->SMTPAuth = true;

    $mail->Host = "smtp.gmail.com";
    $mail->Username = "rahil152131@gmail.com";
    $mail->Password = "zkarixahineqmjiq";
    $mail->SMTPSecure = "tls";
    $mail->Port = 587;



    $mail->setFrom("rahil152131@gmail.com", $vendor_name);
    $mail->addAddress($email);
    
    $mail->isHTML(true);
    $mail->Subject = "Vendor's Email varification from Aahar";


    $email_template = "
    <h2>You have Successfully register with Aahar</h2>
    <h5>Verify your emil address to Login with the below given link</h5>
    <br><br>
    <a href ='http://localhost/Aaaahar/vendor_verify-email.php?token=$verify_token'>Click Here</a>
    ";

    $mail->Body = $email_template;
    $mail->send();
    //echo 'Message has been sent.';

}

if(isset($_POST['vendor_register_btn']))
{
    $vendor_name = $_POST['vendor_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $verify_token = md5(rand());

    // Email Exists or NOT
    $check_email_query = "SELECT email FROM vendors WHERE email = '$email' LIMIT 1";
    $check_email_query_run = mysqli_query($con, $check_email_query);

    if(mysqli_num_rows($check_email_query_run) > 0)
    {
        $_SESSION['status'] = "Email Id already Exists";
        header("Location: vendor_register.php");
        exit(); // Add this line to stop executing the rest of the code
    }
    else
    {
        // Insert User/ Register User Data
        $query = "INSERT INTO vendors (vendor_name, phone, email, address, password, verify_token) VALUES ('$vendor_name','$phone','$email','$address','$password','$verify_token')";
        $query_run = mysqli_query($con, $query);

        if ($query_run) {
            sendemail_verify("$vendor_name", "$email", "$verify_token");

            $_SESSION['status'] = "Registration Successful! Please Verify your Email Address.";
        } else {
            $_SESSION['status'] = "Registration Failed!";
        }
    }

    session_write_close(); // Write session data and close the session

    header("Location: vendor_register.php");
    exit(); // Add this line to stop executing the rest of the code
}

?>
