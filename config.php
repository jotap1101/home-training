<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "hometraining_db";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!mysqli_connect_error()){
        // echo "Connected successfully";
    } else {
        echo "Connection failed!" . "<br>" . mysqli_connect_error();
    }
?>