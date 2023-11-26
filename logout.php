<?php
    session_start();
    session_unset();
    session_destroy();

    unset($_SESSION['id']);
    unset($_SESSION['admin_id']);
    unset($_SESSION['logged_in']);
    unset($_SESSION['admin_logged_in']);

    header("Location: login-signin.php?logout=success");
    exit();
?>