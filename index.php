<?php
    require_once("checkout.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title>Home Training - Página Inicial</title>
</head>
<body id="body-index">
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
    <main id="main-index">
        <div class="content-index">
            <div class="contentBx">
                <h2>Evolua sua forma de viver</h2>
                <p>Transformar e transformação. Verbo e substantivo de movimento. Trabalhamos os dois: a ação e o resultado. Mas tudo começa com o movimento interno. A sua vontade de fazer os sonhos virarem metas.
                    Não deixar pra depois: não aceitar as coisas como estão. Corpo, alma, espírito. Cada um tem o seu movimento.</p>
                <a href="treinos.php">Ver Treinos</a>
            </div>
        </div>
        <div class="social-index">
            <a href="#" class="face">
                <i class='bx bxl-facebook-circle'></i>
            </a>
            <a href="#" class="insta">
                <i class='bx bxl-instagram'></i>
            </a>
            <a href="#" class="tt">
                <i class='bx bxl-twitter'></i>
            </a>
        </div>
    </main>
    <script src="js/script-navbar.js"></script>
</body>

</html>