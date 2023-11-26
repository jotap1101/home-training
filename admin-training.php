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
    <title>Adicionar treinos</title>
</head>
<body>
    <?php
        include 'admin-header.php';
    ?>
    <main id="main-training">
        <h1 class="title">Treinos</h1>
        <div class="wrapper">
            <h2>Adicionar treino</h2>
            <form action="insert-training.php" method="POST">
                <div class="input-box">
                    <input type="text" name="exercicio" placeholder="Nome do exercício" required>
                </div>
                <div class="input-box">
                    <input type="number" name="qtd-series" placeholder="Número de séries" required>
                </div>
                <div class="input-box">
                    <input type="number" name="qtd-repeticoes" placeholder="Repetições" required>
                </div>
                <div class="input-box">
                    <input type="time" step="2" min="00:00:10" max="00:01:00" name="pausa" placeholder="Pausa" required>
                </div>
                <div class="input-box">
                    <input type="text" name="exemplo" placeholder="Demonstração" required>
                </div>
                <div class="input-box button">
                    <input type="submit" value="Adicionar" name="submit">
                </div>
            </form>
        </div>
        <div class="treinos">
            <?php
                $sql = "SELECT * FROM exercise";
                $result = mysqli_query($conn, $sql) or die('query failed!');
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
                        <div class="opc">
                            <a href="update-training.php?update=<?php echo $fetch['id']; ?>" class="update-btn">Atualizar</a>
                            <a href="delete-training.php?delete=<?php echo $fetch['id']; ?>" class="delete-btn" onclick="return confirm('Apagar este treino?');">Apagar</a>
                        </div>
                        
                    </div>
            <?php
                }
            } else {
                echo '<p class="empty" style="margin-top: 50px;">Não há treinos cadastrados!</p>';
            }
            ?>
        </div>
    </main>
    <script src="js/script-admin.js"></script>
</body>
</html>