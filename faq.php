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
    <title>FAQ</title>
</head>
<body id="body-faqpage">
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
                        <a href="#" class="active-link">FAQ</a>
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
    <main id="main-faqpage">
        <div class="accordion">
            <div class="image-box">
                <img src="images/mainImg.png" alt="Accordion Image">
            </div>
            <div class="accordion-text">
                <div class="title">FAQ</div>
                <ul class="faq-text">
                    <li>
                        <div class="question-arrow">
                            <span class="question">Como a plataforma Home Trainining pode auxiliar no desenvolvimento e no bem estar do meu corpo?</span>
                            <i class="bx bxs-chevron-down arrow"></i>
                        </div>
                        <p>Por meio da aba "Treinos", disponibilizamos as melhores opções de treinos para que o usuário conheça tal exercício e pratique de forma correta, mantendo assim o foco de um melhor desenvolvimento corporal.</p>
                        <span class="line"></span>
                    </li>
                    <li>
                        <div class="question-arrow">
                            <span class="question">Você sabia que para praticar exercícios físicos é necessário uma análise médica?</span>
                            <i class="bx bxs-chevron-down arrow"></i>
                        </div>
                        <p>Para a prática dos exercícios precisa-se de um laudo médico comprovando que você pode praticar exercícios físicos por questões de saúde.</p>
                        <span class="line"></span>
                    </li>
                    <li>
                        <div class="question-arrow">
                            <span class="question">As recomendações da plataforma Home Training são confiáveis?</span>
                            <i class="bx bxs-chevron-down arrow"></i>
                        </div>
                        <p>Sim. Um de nossos ideiais é passar as informações com clareza e confiabilidade, com o objetivo real de auxiliar nossos usuários.</p>
                        <span class="line"></span>
                    </li>
                    <li>
                        <div class="question-arrow">
                            <span class="question">A plataforma Home Training possui algum tipo de atividade comercial?</span>
                            <i class="bx bxs-chevron-down arrow"></i>
                        </div>
                        <p>Não. Nós disponibilizamos informações de forma gratuita, com o objetivo de abranger qualquer público, independente da sua questão financeira.</p>
                        <span class="line"></span>
                    </li>
                    <li>
                        <div class="question-arrow">
                            <span class="question">Se estou com alguma dúvida, posso recorrer aos autores da plataforma?</span>
                            <i class="bx bxs-chevron-down arrow"></i>
                        </div>
                        <p>Com certeza! A idéia é que não haja nenhuma dúvida sobre o uso da plataforma, tais como as informações disponibilizadas na mesma. Dessa forma, há uma aba "Contato" onde você pode se conectar conosco.</p>
                        <span class="line"></span>
                    </li>
                </ul>
            </div>
        </div>
    </main>
    <script src="js/script-navbar.js"></script>
    <script src="js/script-accordeon.js"></script>
</body>
</html>