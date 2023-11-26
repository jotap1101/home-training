<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title>Login & Signup</title>
</head>
<body id="body-loginpage">
    <span class="brand title">
        <a href="index.php">Home <span>Training</span></a>
    </span>
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Login</span>
                <form action="login.php" method="post" id="form-login">
                    <div class="input-field">
                        <input type="email" name="email-login" id="" class="inputEmail" placeholder="Digite seu email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" name="password-login" id="" class="inputPassword" placeholder="Digite sua senha" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>
                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Lembrar-me</label>
                        </div>
                        <a href="#" class="text">Esqueceu sua senha?</a>
                    </div>
                    <div class="input-field button">
                        <input type="submit" value="Fazer login" name="btn_login">
                    </div>
                </form>
                <div class="login-signup">
                    <span class="text">
                        Não é inscrito? <a href="#" class="text signup-link">Inscreva-se agora</a>
                    </span>
                </div>
            </div>
            <!-- Registration Form -->
            <div class="form signup">
                <span class="title">Inscreva-se</span>
                <form action="signin.php" method="post" id="form-register">
                    <div class="input-field">
                        <input type="text" name="name" id="nome" placeholder="Digite seu nome" required>
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="input-field">
                        <input type="email" name="email" id="email" class="inputEmail" placeholder="Digite seu email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" name="password" id="senha01" class="inputPassword" minlength="8" placeholder="Digite sua senha" required>
                        <i class="uil uil-lock icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" name="confirm-password" id="senha02" class="inputPassword" minlength="8" placeholder="Confirme sua senha" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>
                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="sigCheck">
                            <label for="sigCheck" class="text">Lembrar-me</label>
                        </div>
                        <a href="#" class="text">Esqueceu sua senha?</a>
                    </div>
                    <div class="input-field button">
                        <input type="submit" value="Inscrever" name="btn_signin">
                    </div>
                </form>
                <div class="login-signup">
                    <span class="text">
                        Já é usuário? <a href="#" class="text login-link">Realize seu login</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <script src="js/script-login.js"></script>
</body>
</html>