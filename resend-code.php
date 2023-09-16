<?php
session_start();
include('dbcon.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

function resend_email_verify($name,$email,$verify_token)
{
    $mail = new PHPMailer(true);

    //$mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->SMTPAuth = true;

    $mail->Host = "smtp.gmail.com";
    $mail->Username = "rahil152131@gmail.com";
    $mail->Password = "zkarixahineqmjiq";
    $mail->SMTPSecure = "tls";
    $mail->Port = 587;



    $mail->setFrom("rahil152131@gmail.com", $name);
    $mail->addAddress($email);
    
    $mail->isHTML(true);
    $mail->Subject = "Resent Email varification from Aahar";


    $email_template = "
    <h2>You have Successfully register with Aahar</h2>
    <h5>Verify your emil address to Login with the below given link</h5>
    <br><br>
    <a href ='http://localhost/Aaaahar/verify-email.php?token=$verify_token'>Click Here</a>
    ";

    $mail->Body = $email_template;
    $mail->send();
}

if(isset($_POST['resend_email_verify_btn']))
{
    if(!empty(trim($_POST['email'])))
    {
        $email = mysqli_real_escape_string($con, $_POST['email']);

        $checkemail_query = "SELECT * FROM users WHERE email = '$email' LIMIT 1"; 
        $checkemail_query_run = mysqli_query($con, $checkemail_query);

        if(mysqli_num_rows($checkemail_query_run) > 0)
        {
            $row = mysqli_fetch_array($checkemail_query_run);
            if($row['verify_status'] == "0")
            {
                $name = $row['name']; 
                $email = $row['email']; 
                $verify_token = $row['verify_token']; 

                resend_email_verify($name,$email,$verify_token);

                $_SESSION['status'] = "Verification Email link has been sent to your email address!";
                header("Location:login.php");
                exit(0);
            }
            else
            {
                $_SESSION['status'] = "Email already Verified. Please Login";
                header("Location: resend-email.php");
                exit(0); 
            }
        }
        else
        {
            $_SESSION['status'] = "Email is not registered. Please register now!";
            header("Location: register.php");
            exit(0);
        }
    }
    else
    {
        $_SESSION['status'] = "Please enter your email in the email field";
        header("Location: resend-email.php");
        exit(0);
    }
}
?>