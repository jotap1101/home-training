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
                    <a href="admin-painel.php">Home</a>
                </li>
                <li class="nav-items">
                    <a href="admin-training.php">Treinos</a>
                </li>
                <li class="nav-items">
                    <a href="admin-contact.php">Mensagens</a>
                </li>
                <li class="nav-items">
                    <a href="admin-users.php">Usuários</a>
                </li>
            </ul>
        </div>
        <div class="login">
            <i id="user-btn" class='bx bxs-user' style="color: #ff8000;"></i>
        </div>
        <div class="account-box">
            <p>Usuário: <span><?php echo $_SESSION['admin_username']; ?></span></p>
            <p>Email: <span><?php echo $_SESSION['admin_email']; ?></span></p>
            <div class="acoes">
                <a href="logout.php" class="delete-btn" onclick="return confirm('Deseja realizar o logout?');">logout</a>
                <a href="perfil-delete.php" class="delete-btn" onclick="return confirm('Deseja deletar a conta?');">Deletar conta</a>
            </div>
        </div>
    </div>
</nav>