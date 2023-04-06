<?php

session_start();
ob_start();

unset($_SESSION["user"]); 

header('Location: ./login.php');

ob_end_flush(); 
?>



