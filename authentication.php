<?php

session_start();

if(!isset($_SESSION['authenticated']))
{
    $_SESSION['status'] = "please Log In to access user Dashboard!";
    header("Location: login.php");
    exit(0);
}
else
{

}
?>