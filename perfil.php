<?php
    require_once("config.php");
    require_once("checkout.php");

    $user = $_SESSION['id'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title><?= $_SESSION['username'] ?> - Perfil</title>
</head>
<body>
    <nav>
        <div class="nav-bar">
            <i class='bx bx-menu sidebarOpen'></i>
            <span class="brand-nav title">
                <a href="#">Home <span>Training</span></a>
            </span>
            <div class="menu">
                <div class="logo-toggle">
                    <span class="brand-nav">
                        <a href="#">Home <span>Training</span></a>
                    </span>
                    <i class='bx bx-x siderbarClose'></i>
                </div>
                <ul class="nav-list">
                    <li class="nav-items">
                        <a href="#">Home</a>
                    </li>
                    <li class="nav-items">
                        <a href="treinos.php">Treinos</a>
                    </li>
                    <li class="nav-items">
                        <a href="faq.php">FAQ</a>
                    </li>
                    <li class="nav-items">
                        <a href="sobre.php">Sobre nós</a>
                    </li>
                    <li class="nav-items">
                        <a href="contato.php">Contato</a>
                    </li>
                </ul>
            </div>
            <div class="login">
                <a href="perfil.php">
                    <i class='bx bxs-user' style="color: #ff8000;"></i>
                </a>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="profile">
            <?php
                $sql = "SELECT * FROM user WHERE id = '$user'";
                $result = mysqli_query($conn, $sql) or die('query failed');
                $row = mysqli_num_rows($result);

                if ($row > 0) {
                    $fetch = mysqli_fetch_assoc($result);
                }
                
                if ($fetch['image_profile'] == '') {
                    echo '<img src="images/default-avatar.png">';
                } else {
                    echo '<img src="uploaded_img/' . $fetch['image_profile'] . '">';
                }
            ?>
            <h3><?php echo $fetch['username']; ?></h3>
            <a href="perfil-update.php" class="update-btn">Atualizar perfil</a>
            <a href="logout.php" class="logout-btn" onclick="return confirm('Deseja realizar o logout?')">Sair</a>
            <a href="perfil-delete.php?user=<?php echo $user; ?>" class="delete-btn" onclick="return confirm('Deseja apagar sua conta?')">Apagar conta</a>
        </div>
    </div>
    <script src="js/script-navbar.js"></script>
</body>
</html>