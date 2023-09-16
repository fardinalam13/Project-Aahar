<?php

session_start();

unset($_SESSION['authenticated']);
unset($_SESSION['authenticated']);
$_SESSION['status'] = "You were Successfully Logged out.";
header("Location: index.html");


?>