<?php
    require_once("config.php");
    require_once("checkout.php");

    $user = $_SESSION['id'];

    if (isset($_POST['update_profile'])) {
        $update_name = mysqli_real_escape_string($conn, trim($_POST['update_name']));
        $update_email = mysqli_real_escape_string($conn, trim($_POST['update_email']));

        $sql = "UPDATE user SET username = '$update_name', email = '$update_email' WHERE id = '$user'";
        $result = mysqli_query($conn, $sql) or die('query failed');

        $old_password = $_POST['old_password'];
        $update_password = mysqli_real_escape_string($conn, $_POST['update_password']);
        $check_password = password_verify($update_password, $old_password);
        $new_password = mysqli_real_escape_string($conn, $_POST['new_password']);
        $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);

        if (!empty($update_password) || !empty($new_password) || !empty($confirm_password)) {
            if ($check_password === false) {
                $message[] = 'Senha antiga incorreta!';
            } elseif ($new_password != $confirm_password) {
                $message[] = 'As senhas não conferem!';
            } else {
                $hashedPassword = password_hash($confirm_password, PASSWORD_DEFAULT);

                $sql = "UPDATE user SET password = '$hashedPassword' WHERE id = '$user'";
                $result = mysqli_query($conn, $sql) or die('query failed');

                $message[] = 'Senha alterada com sucesso!';
            }
        }

        $update_image = $_FILES['update_image']['name'];
        $update_image_size = $_FILES['update_image']['size'];
        $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
        $update_image_folder = 'uploaded_img/' . $update_image;

        if (!empty($update_image)) {
            if ($update_image_size > 2000000) {
                $message[] = 'Tamanho da imagem é muito grande!';
            } else {
                $sql = "UPDATE user SET image_profile = '$update_image' WHERE id = '$user'";
                $image_update_query = mysqli_query($conn, $sql) or die('query failed');
                
                if ($image_update_query) {
                    move_uploaded_file($update_image_tmp_name, $update_image_folder);
                }

                $message[] = 'Imagem atualizada com sucesso!';
            }
        }
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
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title>Atualize seu perfil</title>
</head>
<body>
    <nav>
        <div class="nav-bar">
            <i class='bx bx-menu sidebarOpen'></i>
            <span class="brand-nav title">
                <a href="index.php">Home <span>Training</span></a>
            </span>
            <div class="menu">
                <div class="logo-toggle">
                    <span class="brand-nav">
                        <a href="index.php">Home <span>Training</span></a>
                    </span>
                    <i class='bx bx-x siderbarClose'></i>
                </div>
                <ul class="nav-list">
                    <li class="nav-items">
                        <a href="index.php">Home</a>
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
    <div class="update-profile">
        <?php
            $select = mysqli_query($conn, "SELECT * FROM user WHERE id = '$user'") or die('query failed');
            if (mysqli_num_rows($select) > 0) {
                $fetch = mysqli_fetch_assoc($select);
            }
        ?>
        <form action="" method="post" enctype="multipart/form-data">
            <?php
                if ($fetch['image_profile'] == '') {
                    echo '<img src="images/default-avatar.png">';
                } else {
                    echo '<img src="uploaded_img/' . $fetch['image_profile'] . '">';
                }
                if (isset($message)) {
                    foreach ($message as $message) {
                        echo '<div class="message">' . $message . '</div>';
                    }
                }
            ?>
            <div class="flex">
                <div class="inputBox">
                    <span>Nome:</span>
                    <input type="text" name="update_name" value="<?php echo $fetch['username']; ?>" class="box">
                    <span>Email:</span>
                    <input type="email" name="update_email" value="<?php echo $fetch['email']; ?>" class="box">
                    <span>Atualize sua imagem</span>
                    <input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" class="box">
                </div>
                <div class="inputBox">
                    <input type="hidden" name="old_password" value="<?php echo $fetch['password']; ?>">
                    <span>Senha antiga:</span>
                    <input type="password" name="update_password" placeholder="Digite a senha antiga" class="box">
                    <span>Nova senha:</span>
                    <input type="password" name="new_password" placeholder="Digite a nova senha" class="box">
                    <span>Confirme a senha:</span>
                    <input type="password" name="confirm_password" placeholder="Confirme a nova senha" class="box">
                </div>
            </div>
            <input type="submit" value="Salvar alterações" name="update_profile" class="update-btn" onclick="return confirm('Deseja salvar as alterações?')">
            <a href="perfil.php" class="delete-btn">Voltar</a>
        </form>
    </div>
    <script src="js/script-navbar.js"></script>
</body>
</html>