<?php

session_start();
include('dbcon.php'); 

if(isset($_POST['login_now_btn']))
{
    if(!empty(trim($_POST['email'])) && !empty(trim($_POST['password'])))
    {
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);

        $login_query = "SELECT * FROM users WHERE email='$email'";
        $login_query_run = mysqli_query($con, $login_query);
       
        if(mysqli_num_rows($login_query_run) > 0)
        {
            $row = mysqli_fetch_array($login_query_run);
            $storedPassword = $row["password"];
         
            if (password_verify($password,$storedPassword)) {
                // Successful login
                $_SESSION["name"] = $row["name"]; // Store the vendor's name in the session
                $_SESSION["user_id"] = $row["user_id"];
                header("Location: home.php");
                exit();
            //echo $row['verify_status'];
            // if($row['verify_status'] == "1")
            // {
            //     $_SESSION['authenticated'] = TRUE;
            //     $_SESSION['auth_user'] = [
            //         'user_id' => $row['user_id'],
            //         'username' => $row['name'],
            //         'phone' => $row['phone'],
            //         'email' => $row['email'],
            //         'address' => $row['address'],
            //         'password' => $row['password'],
            //     ];
            //     $_SESSION['status'] = "You are Logged In Successfuly.";
            //     header("Location: home.php");
            //     exit(0);
            // }
            // else
            // {
            //     $_SESSION['status'] = "Please verify your Email Address to Log In";
            //     header("Location: login.php");
            //     exit(0);
            // }
        }
        else {
            $_SESSION['status'] = "Incorrect password for the User.";
            header("Location: login.php");
            exit;
        }
        }
        else
        {
            $_SESSION['status'] = "Invalid Email or Password!";
            header("Location: login.php");
            exit(0);
        }
    }
    else
    {
        $_SESSION['status'] = "All fields are Mendatory";
        header("Location: login.php");
    }
    $email = $_POST['email'];
    $password = $_POST['password'];
}
?>