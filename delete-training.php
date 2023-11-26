<?php
    require_once("config.php");

    session_start();

    if (isset($_GET['delete'])) {
        $delete_id = $_GET['delete'];
    
        $sql = "DELETE FROM exercise WHERE id = '$delete_id'";
        mysqli_query($conn, $sql) or die('query failed!');
    
        header('Location: admin-training.php?deleted=success');
        exit();
    }
?>