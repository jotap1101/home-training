<?php
    require_once("config.php");

    session_start();

    $adminUser = $_SESSION['admin_id'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/admin.css">
    <title>Painel do administrador</title>
</head>
<body>
    <?php
        include 'admin-header.php';
    ?>
    <main class="dashboard">
        <h1 class="title">dashboard</h1>
        <h2>Bem vindo <?php echo $_SESSION['admin_username']; ?></h2>
        <div class="box-container">
            <div class="box">
                <?php
                    $select_users = mysqli_query($conn, "SELECT * FROM user WHERE usertype = 'user'") or die('query failed');
                    $number_of_users = mysqli_num_rows($select_users);
                ?>
                <h3><?php echo $number_of_users; ?></h3>
                <p>normal users</p>
            </div>
            <div class="box">
                <?php
                    $select_admins = mysqli_query($conn, "SELECT * FROM user WHERE usertype = 'admin'") or die('query failed');
                    $number_of_admins = mysqli_num_rows($select_admins);
                ?>
                <h3><?php echo $number_of_admins; ?></h3>
                <p>admin users</p>
            </div>
            <div class="box">
                <?php
                    $select_account = mysqli_query($conn, "SELECT * FROM user") or die('query failed');
                    $number_of_account = mysqli_num_rows($select_account);
                ?>
                <h3><?php echo $number_of_account; ?></h3>
                <p>total accounts</p>
            </div>
            <div class="box">
                <?php
                    $select_messages = mysqli_query($conn, "SELECT * FROM contact") or die('query failed');
                    $number_of_messages = mysqli_num_rows($select_messages);
                ?>
                <h3><?php echo $number_of_messages; ?></h3>
                <p>new messages</p>
            </div>
            <div class="box">
                <?php
                    $select_training = mysqli_query($conn, "SELECT * FROM exercise") or die('query failed');
                    $number_of_training = mysqli_num_rows($select_training);
                ?>
                <h3><?php echo $number_of_training; ?></h3>
                <p>new trainings</p>
            </div>
        </div>
    </main>
    <script src="js/script-admin.js"></script>
</body>
</html>