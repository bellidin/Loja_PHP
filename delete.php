<?php
include 'conexao.php'; // Inclui o arquivo de conexão

if (isset($_GET['id'])) { // Verifica se o ID foi passado
    $id = $_GET['id']; // Recebe o ID
    $sql = "DELETE FROM produto WHERE id=$id"; // Prepara a exclusão

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redireciona se a exclusão para bem-sucedida
    } else {
        echo "Erro: " . $conn->erro; // Mostra erro, se houver
    }
}
?>