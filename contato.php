<?php
    require_once("checkout.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title>Contato</title>
</head>
<body id="body-contactpage">
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
                        <a href="#" class="active-link">Contato</a>
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
    <main id="main-contactpage">
        <div class="container-contactpage">
            <div class="content-contactpage">
                <div class="left-side">
                    <div class="address details">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="topic">Endereço</div>
                        <div class="text-one">IF Muzambinho</div>
                        <div class="text-two">Bairro - Morro Preto</div>
                    </div>
                    <div class="phone details">
                        <i class="fas fa-phone-alt"></i>
                        <div class="topic">Telefone</div>
                        <div class="text-one">+55 35 99708-3608</div>
                        <div class="text-two">+55 35 99872-4512</div>
                    </div>
                    <div class="email details">
                        <i class="fas fa-envelope"></i>
                        <div class="topic">Email</div>
                        <div class="text-one">12201000366@gmail.com</div>
                        <div class="text-two">12201000124@gmail.com</div>
                    </div>
                </div>
                <div class="right-side">
                    <div class="topic-text">Envie sua mensagem</div>
                    <p>Se você tiver algum trabalho ou qualquer tipo de dúvida relacionado ao nosso site você pode nos enviar uma mensagem aqui. É um prazer ajudá-lo!</p>
                    <form action="contact.php" method="post">
                        <div class="input-box">
                            <input type="text" name="nome" id="" placeholder="Digite seu nome">
                        </div>
                        <div class="input-box">
                            <input type="email" name="email" id="" placeholder="Digite seu email">
                        </div>
                        <div class="input-box message-box">
                            <textarea name="mensagem" id="" cols="" rows="" placeholder="Digite sua mensagem"></textarea>
                        </div>
                        <?php
                            if (isset($message)) {
                                foreach($message as $message) {
                                    echo '
                                            <span style="color: red">'.$message.'</span>
                                    ';
                                }
                            }
                        ?>
                        <div class="button">
                            <input type="submit" value="Enviar" name="btn-msg">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script src="js/script-navbar.js"></script>
</body>
</html>