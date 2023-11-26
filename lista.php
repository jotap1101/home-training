<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="lista_cadastro.css" rel="stylesheet">
        <title>Lista de cadastros</title>
    </head>
    <body class="text-center">
        <div class="container">
            <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
                <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                    <li>
                        <a href="formulario.php" class="nav-link px-2 link-success">Home</a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-2 link-success">Recursos</a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-2 link-success">Preços</a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-2 link-success">FAQs</a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-2 link-success">Sobre</a>
                    </li>
                </ul>
                <div class="col-md-3 text-end">
                    <a href="logout.php" class="btn btn-outline-danger">Sair</a>
                </div>
            </header>
            <main>
                <?php
                    require("config.php");

                    $sql = "SELECT * FROM user ORDER BY id ASC";
                    $result = mysqli_query($conn, $sql);

                    echo '
                            <table class="table table-success table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Senha</th>
                                        <th scope="col">Data de cadastro</th>
                                        <th scope="col">Opções</th>
                                    </tr>
                                </thead>
                            <tbody>
                         ';

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "
                                    <tr>
                                        <td>" . $row['id'] . "</td>
                                        <td>" . $row['username'] . "</td>
                                        <td>" . $row['email'] . "</td>
                                        <td>" . $row['password'] . "</td>
                                        <td>" . $row['registration_date'] . "</td> 
                                        <td>
                                            <a class='btn btn-outline-success' href='update.php?cod=" . $row['id'] . "'>Alterar</a> 
                                            <a class='btn btn-outline-danger' href='delete.php?cod=" . $row['id'] . "'>Excluir</a>
                                        </td>                               
                                    </tr>";
                        }
                    } else {
                        echo '<p class="link-success">Não há registros no momento!</p>';
                    }

                    echo '
                                </tbody>
                            </table>
                         ';
                ?>
            </main>
            <footer class="py-3">
                <p class="text-center text-muted">&copy; 2021 Company, Inc</p>
            </footer>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>