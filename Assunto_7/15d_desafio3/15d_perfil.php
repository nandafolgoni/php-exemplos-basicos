<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Perfil</title>
    <?php
    // Página de perfil.
    session_start();

    // Verifica se o usuário está logado.
    if (!isset($_SESSION['usuario'])) {
        header("Location: 15d_login.php");
        exit();
    }

    // Cor de fundo definida no login
    $cor = $_SESSION['cor'];
    ?>
</head>
<body style="background-color: <?php echo $cor; ?>;">
    <h2>Bem-vindo, <?php echo $_SESSION['usuario']; ?>!</h2>
    <p>Esta é a sua página de perfil.</p>
    <a href="15d_logout.php">Logout</a>
</body>
</html>