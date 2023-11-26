<?php
    require_once("config.php");

    session_start();

    $id = $_GET['user'];

    $sql = "DELETE FROM user WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $_SESSION = array();

        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }

        session_destroy();

        header("Location: login-signin.php?deleteaccount=success");
        exit();
    } else {
        header("Location: login-signin.php?deleteaccount=error");
        exit();
    }

    mysqli_close($conn);
?>