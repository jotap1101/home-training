<?php
    require_once("config.php");
    require_once("checkout.php");
    session_start();
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
    <link rel="stylesheet" href="css/admin.css">
    <title>Treinos</title>
</head>

<body id="body-trainingpage">
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
                        <a href="#" class="active-link">Treinos</a>
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
    <main id="main-trainingpage">
        <h1 class="title">Últimos treinos</h1>
        <div class="treinos">
            <div class="box-container">
                <?php
                $sql = "SELECT * FROM exercise";
                $result = mysqli_query($conn, $sql) or die('query failed');
                $rows = mysqli_num_rows($result);

                if ($rows > 0) {
                    while ($fetch = mysqli_fetch_assoc($result)) {
                ?>
                        <div class="card">
                            <div class="infos">Nome do exercício: <?php echo $fetch['name']; ?></div>
                            <div class="infos">Número de séries: <?php echo $fetch['series']; ?></div>
                            <div class="infos">Número de repetições: <?php echo $fetch['repetitions']; ?></div>
                            <div class="infos">Tempo de descanso: <?php echo $fetch['pause']; ?>s</div>
                            <div class="infos" style="text-align: center; font-size: 1.5rem;">Exemplo: <?php echo $fetch['example']; ?></div>
                        </div>
                <?php
                    }
                } else {
                    echo '<p class="empty">no products added yet!</p>';
                }
                ?>
            </div>
        </div>
        <!-- <div class="div-alongamento">
            <h1>Alongamentos</h1>
            <span style="margin-bottom: 10px">Alongamentos são exercícios voltados para o aumento da flexibilidade muscular. É uma prática fundamental para o bom
                funcionamento do corpo, que,além de prevenir lesões, proporciona mais agilidade e elasticidade.</span>
            <span>Antes e depois dos seus treinos, é sempre bom alongar, isso pode evitar lesões! Vamos lá?</span>
            <div class="info">
                <div class="iframes">
                    <h3>Alongamento para relaxamento</h3>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/pZlpoFrG0Ng?start=2" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="iframes">
                    <h3>Alongamento para flexibilidade</h3>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/4TsDiufTdVs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="div-emagrecimento">
            <h1>Emagrecimento</h1>
            <span>Acelere o metabolismo para acabar com aquelas gordurinhas que tanto incomodam.</span>
            <div class="info-emagrecimento">
                <div class="info-divide">
                    <h2>Emagrecimento Express</h2>
                    <span>Quer emagrecer de forma rápida? Vem aumentar o seu metabolismo com a gente:</span>
                    <div class="info">
                        <div class="iframes">
                            <h3>Treino 1</h3>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/s2YLfBYUWMo?start=2" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="iframes">
                            <h3>Treino 2</h3>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/c5IzeLJvtJo?start=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <hr width="80%" align="center" style="margin: 50px 0px; border-color: #ff8000;">
                <div class="info-divide" style="margin-top: 0;">
                    <h2>Emagrecimento Queima Total</h2>
                    <span>Treino de alta intensidade! Use o peso do seu próprio corpo ;D</span>
                    <div class="info">
                        <div class="iframes">
                            <h3>Treino 1</h3>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/QkmcEPQtyJQ?start=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="iframes">
                            <h3>Treino 2</h3>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/QUG6t_oMv4Y?start=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <hr width="80%" align="center" style="margin: 50px 0px; border-color: #ff8000;">
                <div class="info-divide" style="margin-top: 0;">
                    <h2>Emagrecimento Respira e Vai!</h2>
                    <span>É tão intenso que você vai perdendo as calorias durante o dia</span>
                    <div class="info">
                        <div class="iframes">
                            <h3>Treino 1</h3>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/qUirNzr2DdA?start=3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="iframes">
                            <h3>Treino 2</h3>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/Bl2YU580Qe8?start=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="div-abdominais">
            <h1>Abdominais</h1>
            <span>Esse é intenso! Várias séries para definir o abdômen e dar adeus aos pneuzinhos.</span>
            <div class="info">
                <div class="iframes">
                    <h3>Treino 1</h3>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/FdwjN2n5foA?start=6" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="iframes">
                    <h3>Treino 2</h3>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/UgBa68uNL4A?start=8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="div-funcionais">
            <h1>Treinos funcionais</h1>
            <span>Use o peso do próprio corpo para queimar calorias e ainda definir o abdômen, braços e pernas.</span>
            <div class="info">
                <div class="iframes">
                    <h3>Treino 1</h3>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/D9yZKK92RfY?start=15" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="iframes">
                    <h3>Treino 2</h3>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/cmb3He91kBg?start=4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="div-hipertrofia">
            <h1>Hipertrofia</h1>
            <span>Não tem halteres em casa? Sem problemas, você pode usar garrafas de água e bora treinar!</span>
            <div class="info">
                <div class="iframes">
                    <h3>Treino 1</h3>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/AAShcGvA6ac?start=4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="iframes">
                    <h3>Treino 2</h3>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Ybu6HNUxQxU?start=4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="div-yoga">
            <h1>Yoga</h1>
            <span>Melhore o seu dia e elimine as toxinas do seu corpo através do Yoga. Vem, é possível!</span>
            <div class="info">
                <div class="iframes">
                    <h3>Treino 1</h3>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/aQ4ioh77SoA?start=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="iframes">
                    <h3>Treino 2</h3>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/wJ6V098gGP8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div> -->
        <div class="dica" style="text-align: center;">
            <p>Lembre-se: sem excesso de treino. Pessoas que treinam mais de sete horas por semana podem deixar o sistema imune
                delimitado.</p>
        </div>
    </main>
    <script src="js/script-navbar.js"></script>
</body>
</html>