<?php
    session_start();
    require_once("config.php");
    require_once("functions.php");

    if (isset($_POST['btn_login'])) {
        $email = mysqli_real_escape_string($conn, trim($_POST['email-login']));
        $password = mysqli_real_escape_string($conn, trim($_POST['password-login']));

        if (emptyInputLogin($email, $password)) {
            header("Location: login.php?error=emptyinputs");
            exit();
        }

        loginUser($conn, $email, $password);
    } else {
        header("Location: login-signin.php");
        exit();
    }
?>