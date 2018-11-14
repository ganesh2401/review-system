<?php
session_unset();// remove all session variables
session_destroy();
header("location:home page.php");
// destroy the session 


?>
