<?php
require_once("config.php");

session_start();

$adminUser = $_SESSION['admin_id'];

if (isset($_GET['user'])) {
    $delete_id = $_GET['user'];

    $sql = "DELETE FROM user WHERE id = '$delete_id'";
    mysqli_query($conn, $sql) or die('query failed');

    header('location:admin-users.php?deleted=success');
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
    <title>Usuários</title>
</head>

<body>
    <?php
    include 'admin-header.php';
    ?>
    <main>
        <h1 class="title">Usuários</h1>
        <table>
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Data de registro</th>
                    <th scope="col">Tipo de usuário</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $select_users = mysqli_query($conn, "SELECT * FROM user") or die('query failed');

                while ($fetch_users = mysqli_fetch_assoc($select_users)) {
                ?>

                    <tr>
                        <td scope="row" data-label="ID"><?php echo $fetch_users['id']; ?></td>
                        <td data-label="Nome"><?php echo $fetch_users['username']; ?></td>
                        <td data-label="Email"><?php echo $fetch_users['email']; ?></td>
                        <td data-label="Data de registro"><?php $date = new DateTime($fetch_users['registration_date']);
                                                            echo $date->format('d/m/Y'); ?></td>
                        <td data-label="Tipo de usuário"><?php echo $fetch_users['usertype']; ?></td>
                        <td class="btn"><a href="admin-users.php?user=<?php echo $fetch_users['id']; ?>" onclick="return confirm('Excluir este usuário?');" class="delete-btn">Excluir</a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </main>
    <script src="js/script-admin.js"></script>
</body>

</html>