<?php
    session_start();
    require_once("config.php");
    require_once("functions.php");

    if (isset($_POST['btn_signin'])) {
        $name = mysqli_real_escape_string($conn, trim($_POST['name']));
        $email = mysqli_real_escape_string($conn, trim($_POST['email']));
        $password = mysqli_real_escape_string($conn, trim($_POST['password']));
        $passwordConfirm = mysqli_real_escape_string($conn, trim($_POST['confirm-password']));

        if (emptyInputSignup($name, $email, $password, $passwordConfirm)) {
            header("Location: login-signin.php?error=emptyinputs");
            exit();
        }

        if (invalidEmailSignup($email)) {
            header("Location: login-signin.php?error=invalidemail");
            exit();
        }

        if (invalidPasswordSignup($password, $passwordConfirm)) {
            header("Location: login-signin.php?error=invalidpassword");
            exit();
        }

        if (userExists($conn, $name, $email)) {
            header("Location: login-signin.php?error=userexists");
            exit();
        }

        insertUser($conn, $name, $email, $password);
    }
?>