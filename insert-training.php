<?php
    require_once("config.php");

    if (isset($_POST['submit'])) {
        $exercicio = mysqli_real_escape_string($conn, $_POST['exercicio']);
        $series = $_POST['qtd-series'];
        $repeticoes = $_POST['qtd-repeticoes'];
        $pausa = $_POST['pausa'];
        $exemplo = mysqli_real_escape_string($conn, $_POST['exemplo']);
    
        $sql = "SELECT name FROM exercise WHERE name = '$exercicio'";
        $result = mysqli_query($conn, $sql) or die("query failed!");
        $rows = mysqli_num_rows($result);
    
        if ($rows > 0) {
            header("Location: admin-training.php?error=trainingalreadyadded");
            exit();
        } else {
            $time = date("H:i:s", strtotime($pausa));
            $sql = "INSERT INTO exercise (name, series, repetitions, pause, example) VALUES ('$exercicio', '$series', '$repeticoes', '$time', '$exemplo')";
            $result = mysqli_query($conn, $sql) or die("query failed!");
    
            if ($result) {
                header("Location: admin-training.php?insert=success");
                exit();
            } else {
                header("Location: admin-training.php?insert=error");
                exit();
            }
        }
    }
?>