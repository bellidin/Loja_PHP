<?php
include 'conexao.php'; // Inclui o arquivo de conexão

if (isset($_GET['id'])) { // Verifica se o ID foi passado
    $id = $_GET['id']; // Recebe o ID
    $sql = "SELECT * FROM produto WHERE id=$id"; // Consulta o usuário
    $result = $conn->query($sql); // Executa a consulta
    $produto = $result->fetch_assoc(); // Obtém os dados do usuário
}

// O formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['Nome']; // Recebe o novo nome
    $marca = $_POST['Marca']; // Recebe a nova marca
    $preco = $_POST['Preço']; // Recebe a nova marca
    $sql = "UPDATE produto SET Nome='$nome', Marca='$marca', Preço='$preco' WHERE id=$id"; // Preparando a atualização

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redireciona a atualização para bem-sucedida
    } else {
        echo "Erro: " . $conn->erro; // Mostra erro, se houver
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Atualizar Produto</title>
</head>
<body>
    <h1>Atualizar Produto</h1>
    <form action="store.php" method="POST">
        <label>Nome:</label>
        <input type="text" name="Nome" value="<?php echo $produto['Nome']; ?>" required>
        <label>Marca:</label>
        <input type="text" name="Marca" value="<?php echo $produto['Marca']; ?>" required>
        <label>Preço:</label>
        <input type="number" name="Preço" value="<?php echo $produto['Preço']; ?>" required>
        <input type="submit" value="Atualizar">
        <div class="a">
        <a href="index.php">Cancelar</a> <!-- Link para voltar -->
        </div>
    </form>
</body>
</html>