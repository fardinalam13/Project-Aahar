<?php
session_start();
include('dbcon.php');

if(isset($_GET['token']))
{
    $token =$_GET['token'];
    $verify_query = "SELECT verify_token, verify_status FROM vendors WHERE verify_token = '$token' LIMIT 1";
    $verify_query_run = mysqli_query($con, $verify_query);

    if(mysqli_num_rows($verify_query_run) > 0)
    {
        $row = mysqli_fetch_array($verify_query_run);

        if($row['verify_status'] == "0")
        {
            $clicked_token = $row['verify_token'];
            $update_query = "UPDATE vendors SET verify_status = '1' WHERE verify_token = '$clicked_token' LIMIT 1";
            $update_query_run = mysqli_query($con, $update_query);

            if($update_query_run)
            {
                $_SESSION['status'] = "Your Account has been varified Successfully.!";
                header("Location: vendor_login.php");
                exit(0);
            }
            else
            {
                $_SESSION['status'] = "Varification Failed.!";
                header("Location: vendor_login.php");
                exit(0);
            }
        }
        else
        {
            $_SESSION['status'] = "Email Already Verified. Please Login";
            header("Location: vendor_login.php");
            exit(0);
        }

    }
    else
    {
        $_SESSION['status'] = "This Token doesn't Exists.";
        header("Location: vendor_login.php");
    }
}
else
{
$_SESSION['status'] = "Not Allowed";
header("Location: vendor_login.php");
}

?>