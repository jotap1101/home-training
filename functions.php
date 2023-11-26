<?php
    session_start();
    function emptyInputSignup($name, $email, $password, $passwordConfirm) {
        if (empty($name) || empty($email) || empty($password) || empty($passwordConfirm)) {
            return true;
        } else {
            return false;
        }
    }

    // function invalidUsername($username) {
    //     if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }

    function invalidEmailSignup($email) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }

    function invalidPasswordSignup($password, $passwordConfirm) {
        if ($password !== $passwordConfirm) {
            return true;
        } else {
            return false;
        }
    }

    function userExists($conn, $name, $email) {
        $sql = "SELECT * FROM user WHERE username = ? OR email = ?";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: login-signin.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $name, $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($result)) {
                return $row;
            } else {
                return false;
            }

            mysqli_stmt_close($stmt);
        }
    }

    function insertUser($conn, $name, $email, $password) {
        $sql = "INSERT INTO user (username, email, password) VALUES (?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: login-signin.php?error=sqlerror");
            exit();
        } else {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            mysqli_stmt_bind_param($stmt, "sss", $name, $email, $hashedPassword);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);

            header("Location: login-signin.php?signup=success");
            exit();
        }
    }

    function emptyInputLogin($email, $password) {
        if (empty($email) || empty($password)) {
            return true;
        } else {
            return false;
        }
    }

    function loginUser($conn, $email, $password) {
        $userExists = userExists($conn, $email, $email);

        if ($userExists === false) {
            header("Location: login-signin.php?error=nouser");
            exit();
        } else {
            $hashedPassword = $userExists['password'];
            $checkPassword = password_verify($password, $hashedPassword);

            if ($checkPassword === false) {
                header("Location: login-signin.php?error=wrongpassword");
                exit();
            } else if ($checkPassword === true) {
                if ($userExists['usertype'] === 'user') {
                    $_SESSION['id'] = $userExists['id'];
                    $_SESSION['username'] = $userExists['username'];
                    $_SESSION['email'] = $userExists['email'];
                    $_SESSION['usertype'] = $userExists['usertype'];
                    $_SESSION['logged_in'] = true;

                    header("Location: index.php?login=success");
                    exit();
                } else if ($userExists['usertype'] === 'admin') {
                    $_SESSION['admin_id'] = $userExists['id'];
                    $_SESSION['admin_username'] = $userExists['username'];
                    $_SESSION['admin_email'] = $userExists['email'];
                    $_SESSION['admin_usertype'] = $userExists['usertype'];
                    $_SESSION['admin_logged_in'] = true;

                    header("Location: admin-painel.php?login=success");
                    exit();
                }
            }
        }
    }