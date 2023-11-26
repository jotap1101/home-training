<?php
    session_start();
    
    if (!isset($_SESSION['logged_in'])) {
        header("Location: login-signin.php");
        exit();
    }
?>