<!-- Digite sua solução para o desafio (AQUI) -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
</head>
<body>

<!-- HTML para cadastro de Nome do Produto e Preço -->
     <form action="" method="POST">
        <label for="nome">Nome do Produto:</label>
        <input type="text" id="nome" name="nome">

        <label for="preco">Preço:</label>
        <input type="number" id="preco" name="preco" step="0.01">

        <button type="submit">Cadastrar</button>
     </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os dados do formulário
    $nome = trim($_POST['nome']);
    $preco = trim($_POST['preco']);

    // Validação dos dados antes da inserção
    if ($nome === "") {
        echo "<p style='color: red;'>Erro: O nome do produto não pode estar vazio.</p>";
    } elseif (!is_numeric($preco) || $preco <= 0) {
        echo "<p style='color: red;'>Erro: O preço deve ser um número positivo.</p>";
    } else {
        $servername = "localhost";
        $username = "root";
        $password = "Senai@118";
        $dbname = "exercicio";

        // Tenta criar uma conexão com o banco de dados
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            // Se falhar mostra o erro
            throw new Exception("Falha na conexão: " . $conn->connect_error);
        }

        // Insere o registro no banco de dados (prepared statement)
        $stmt = $conn->prepare("INSERT INTO produtos (nome, preco) VALUES (?, ?)");
        $stmt->bind_param("sd", $nome, $preco);

        // Feedback visual (para o usuário saber se deu certo a inserção)
        if ($stmt->execute()) {
            echo "<p style='color: green;'>Produto cadastrado com sucesso!</p>";
        } else {
            echo "<p style='color: red;'>Erro ao cadastrar produto: " . $stmt->error . "</p>";
        }

        $stmt->close();
        $conn->close();
    }
}
?>

</body>
</html>