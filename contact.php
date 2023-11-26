<?php
    require_once("config.php");

    session_start();

    $user = $_SESSION['id'];

    if (isset($_POST['btn-msg'])) {
        // if (empty($name) || empty($email) || empty($message)) {
        //     header("Location: contato.php?error=emptyinputs");
        //     exit();
        // }

        $name = mysqli_real_escape_string($conn, trim($_POST['nome']));
        $email = mysqli_real_escape_string($conn, trim($_POST['email']));
        $message = mysqli_real_escape_string($conn, trim($_POST['mensagem']));
        
        $sql = "SELECT * FROM contact WHERE name = '$name' AND email = '$email' AND message = '$message'";
        $result = mysqli_query($conn, $sql);
        $rows = mysqli_num_rows($result);

        if ($rows > 0) {
            header("Location: contato.php?error=messagesentalready");
            exit();
        } else {
            $sql = "INSERT INTO contact (name, email, message, user_id) VALUES ('$name', '$email', '$message', '$user')";
            $result = mysqli_query($conn, $sql) or die('query failed');
            
            header("Location: contato.php?send=messagesentsuccessfully");
            exit();
        }
    }
?>