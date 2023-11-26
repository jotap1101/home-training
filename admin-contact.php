<?php
    require_once("config.php");

    session_start();

    $adminUser = $_SESSION['admin_id'];

    if (isset($_GET['message'])) {
        $delete_id = $_GET['message'];

        $sql = "DELETE FROM contact WHERE id = '$delete_id'";
        mysqli_query($conn, $sql) or die('query failed');

        header('location:admin-contact.php?deleted=success');
        exit();
    }
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
    <title>Mensagens</title>
</head>
<body>
    <?php
    include 'admin-header.php';
    ?>
    <main class="messages">
        <h1 class="title">Mensagens</h1>
        <div class="box-container">
            <?php
                $select_message = mysqli_query($conn, "SELECT * FROM contact") or die('query failed');
                if (mysqli_num_rows($select_message) > 0) {
                    while ($fetch_message = mysqli_fetch_assoc($select_message)) {
            ?>
                    <div class="box">
                        <p>ID: <span><?php echo $fetch_message['user_id']; ?></span> </p>
                        <p>Nome: <span><?php echo $fetch_message['name']; ?></span> </p>
                        <p>Email: <span><?php echo $fetch_message['email']; ?></span> </p>
                        <p class="info">Mensagem: <span><?php echo $fetch_message['message']; ?></span> </p>
                        <a href="admin-contact.php?message=<?php echo $fetch_message['id']; ?>" onclick="return confirm('Apagar esta mensagem?');" class="delete-btn">Apagar mensagem</a>
                    </div>
            <?php
                    };
                } else {
                    echo '<p class="empty">Nenhuma mensagem até o momento!</p>';
                }
            ?>
        </div>
    </main>
    <script src="js/script-admin.js"></script>
</body>
</html>