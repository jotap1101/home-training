<?php
    require_once("checkout.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="10">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title>Sobre nós</title>
</head>
<body id="body-aboutuspage">
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
                        <a href="#" class="active-link">Sobre nós</a>
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
    <main class="cards">
        <section class="card">
            <div class="circle">
                <img src="images/vantuil.jpeg" alt="Imagem de perfil" class="img">
            </div>
            <h3>Vantuil Netto</h3>
            <span>Aluno na instituição - Instituto Federal do Sul de Minas Gerais, Campus Muzambinho</span>
            <div class="social-aboutuspage">
                <a href="https://www.facebook.com/netto.depaula.58" class="face"><i class='bx bxl-facebook-circle'></i></a>
                <a href="https://www.instagram.com/nettovkn/" class="insta"><i class='bx bxl-instagram'></i></a>
                <a href="https://twitter.com/NettoVKN" class="tt"><i class='bx bxl-twitter'></i></a>
            </div>
        </section>
        <section class="card">
            <div class="circle">
                <img src="images/luquinha.jpeg" alt="Imagem de perfil" class="img">
            </div>
            <h3>Lucas Raphael</h3>
            <span>Aluno na instituição - Instituto Federal do Sul de Minas Gerais, Campus Muzambinho</span>
            <div class="social-aboutuspage">
                <a href="https://www.facebook.com/lucas.raphael.944" class="face"><i class='bx bxl-facebook-circle'></i></a>
                <a href="https://www.instagram.com/lucas_rsousaa/" class="insta"><i class='bx bxl-instagram'></i></a>
                <a href="https://twitter.com/LucasRsousa07" class="tt"><i class='bx bxl-twitter'></i></a>
            </div>
        </section>
        <section class="card">
            <div class="circle">
                <img src="images/fabin.jpeg" alt="Imagem de perfil" class="img">
            </div>
            <h3>Fábio Valeriano</h3>
            <span>Aluno na instituição - Instituto Federal do Sul de Minas Gerais, Campus Muzambinho</span>
            <div class="social-aboutuspage">
                <a href="https://www.facebook.com/fabio.valeriano.167" class="face"><i class='bx bxl-facebook-circle'></i></a>
                <a href="https://www.instagram.com/fabio.valerian0/" class="insta"><i class='bx bxl-instagram'></i></a>
                <a href="https://twitter.com/Fabim_Valeriano" class="tt"><i class='bx bxl-twitter'></i></a>
            </div>
        </section>
        <section class="card">
            <div class="circle">
                <img src="images/jao.jpeg" alt="Imagem de perfil" class="img">
            </div>
            <h3>João Pedro</h3>
            <span>Aluno na instituição - Instituto Federal do Sul de Minas Gerais, Campus Muzambinho</span>
            <div class="social-aboutuspage">
                <a href="https://www.facebook.com/jaopedro.1101/" class="face"><i class='bx bxl-facebook-circle'></i></a>
                <a href="https://www.instagram.com/_jaopedro._/" class="insta"><i class='bx bxl-instagram'></i></a>
                <a href="https://twitter.com/joaopedro_1101" class="tt"><i class='bx bxl-twitter'></i></a>
            </div>
        </section>
    </main>
    <script src="js/script-navbar.js"></script>
</body>
</html>