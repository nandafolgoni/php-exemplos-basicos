<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de maior idade</title>
</head>
<body>

<h1>Verificador de maior idade</h1>

    <!-- Formulário -->
    <form method="post" action="">

        <!-- Campo nome -->
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>

        <!-- Campo senha -->
        <label for="idade">Ano de Nascimento:</label>
        <input type="text" name="idade" required>
       
        <!-- Botão de cadastro -->
        <button type="submit">Verificar</button>

    </form>

<!-- Lógica para gravar as informações -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $anoNascimento = $_POST["idade"];

    $anoAtual = date("Y");
    $idade = $anoAtual - $anoNascimento;

    if ($idade >= 18) {
        echo "<p>✅ Acesso permitido, $nome!</p>";

        // Salva no arquivo de log
        $linha = "Nome: $nome | Idade: $idade\n";
        file_put_contents("log_acessos.txt", $linha, FILE_APPEND);
    } else {
        echo "<p>❌ Acesso negado, $nome!</p>";
    }
}

?>