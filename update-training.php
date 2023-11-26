<?php
    require_once("config.php");

    session_start();

    if (isset($_POST['update-submit'])) {
        $updateID = $_POST['update-id'];
        $updateName = $_POST['update-name'];
        $updateSeries = $_POST['update-qtd-series'];
        $updateRepetitions = $_POST['update-qtd-repetitions'];
        $updatePause = $_POST['update-pause'];
        $updateExample = $_POST['update-example'];

        $sql = "UPDATE exercise SET name = '$updateName', series = '$updateSeries', repetitions = '$updateRepetitions', pause = '$updatePause', example = '$updateExample' WHERE id = '$updateID'";
        $result = mysqli_query($conn, $sql) or die('query failed!');

        if ($result) {
            header('Location: admin-training.php?update=success');
            exit();
        } else {
            header('location: admin-training.php?update=error');
            exit();
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
            <?php
                $updateID = $_GET['update'];
                $sql = "SELECT * FROM exercise WHERE id = '$updateID'";
                $result = mysqli_query($conn, $sql) or die('query failed!');
                $rows = mysqli_num_rows($result);

                if ($rows > 0) {
                    $fetch = mysqli_fetch_assoc($result);
                }
            ?>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="input-box">
                    <input type="hidden" name="update-id" value="<?php echo $fetch['id']; ?>">
                </div>
                <div class="input-box">
                    <input type="text" name="update-name" value="<?php echo $fetch['name']; ?>" placeholder="Nome do exercício" required>
                </div>
                <div class="input-box">
                    <input type="number" name="update-qtd-series" value="<?php echo $fetch['series']; ?>" placeholder="Número de séries" required>
                </div>
                <div class="input-box">
                    <input type="number" name="update-qtd-repetitions" value="<?php echo $fetch['repetitions']; ?>" placeholder="Repetições" required>
                </div>
                <div class="input-box">
                    <input type="time" step="2" min="00:00:10" max="00:01:00" name="update-pause" value="<?php echo $fetch['pause']; ?>" placeholder="Pausa" required>
                </div>
                <div class="input-box">
                    <input type="text" name="update-example" value="<?php echo $fetch['example']; ?>" placeholder="Demonstração" required>
                </div>
                <div class="input-box button">
                    <input type="submit" value="Atualizar" name="update-submit" onclick="return confirm('Salvar alterações?');">
                </div>
            </form>
        </div>
    </main>
    <script src="js/script-admin.js"></script>
</body>
</html>