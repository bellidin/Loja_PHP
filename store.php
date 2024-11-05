<?php
include 'conexao.php'; // Inclui o arquivo de conexão

if ($_SERVER["REQUEST_METHOD"] == "POST") { // Verifica se o formulário foi enviado
    $nome = $_POST['nome']; // Recebe o nome
    $marca = $_POST['marca']; // Recebe a marca
    $preco = $_POST['preco']; // Recebe o preço
    $sql = "INSERT INTO produto (nome, marca, preço) VALUES ('$nome', '$marca', '$preco')"; // Prepara a consulta

    // Executa a consulta e verifica se foi bem-sucedida
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redireciona para a página principal
    } else {
        echo "Erro: " . $conn->error; // Mostra erro, se houver
    }
}
?>