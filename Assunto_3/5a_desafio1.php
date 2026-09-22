<?php
session_start(); // Deve ser a primeira linha do script PHP, antes de qualquer saída HTML

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $senha = $_POST['senha']; // Representa o ano de nascimento

    $idade = 2026 - $senha; // Ou use date('Y') - $senha para pegar o ano atual dinamicamente

    // Grava as informações no log
    $arquivo = fopen('log_acessos.txt', 'a');
    $linha = $nome . ';' . $idade . "\n";
    fwrite($arquivo, $linha);
    fclose($arquivo);

    $_SESSION['nome_usuario'] = $nome;

    // Verifica se é maior de idade
    if ($idade >= 18) {
        header('Location: ' . $_SERVER['PHP_SELF'] . '?sucesso=1');
    } else {
        header('Location: ' . $_SERVER['PHP_SELF'] . '?negado=1');
    }
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Verificador de maioridade</title>
</head>
<body>
    <!-- Formulário -->
    <form method="post" action="">
        <!-- Campo nome -->
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required><br>

        <!-- Campo data/ano de nascimento -->
        <label for="senha">Ano de nascimento:</label>
        <input type="number" name="senha" id="senha" required><br>

        <!-- Botão de cadastro -->
        <button type="submit">Calcular</button>
    </form>

    <!-- Lógica para exibir mensagens -->
    <?php
    if (isset($_SESSION['nome_usuario'])) {
        $nomeUsuario = $_SESSION['nome_usuario'];

        if (isset($_GET['sucesso'])) {
            echo "<p'>Acesso permitido, {$nomeUsuario}!</p>";
        } elseif (isset($_GET['negado'])) {
            echo "<p>Acesso negado, {$nomeUsuario}! Você é menor de idade.</p>";
        }

        // Limpa a sessão após exibir a mensagem
        unset($_SESSION['nome_usuario']);

        // Atualiza/redireciona a página após 3 segundos
        header('Refresh: 3; url=' . $_SERVER['PHP_SELF']);
    }
    ?>
</body>
</html>