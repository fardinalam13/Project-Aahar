<?php

session_start();

unset($_SESSION['authenticated']);
unset($_SESSION['authenticated']);
$_SESSION['status'] = "";
header("Location: index.html");


?>