<?php
session_start();

if($_SESSION["name"] == null) {
    header("Location: ../../login.php");
}
else {

// remove all session variables
session_unset();

// destroy the session
session_destroy();    

header("Location: ../../login.php");
}
?>