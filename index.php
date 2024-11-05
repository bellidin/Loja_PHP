<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja</title>
</head>
<body>
<h1>Cadastrar Produtos</h1>
    <form action="store.php" method="POST">
        <label>Produto:</label>
        <input type="text" name="nome" required>
        <label>Marca:</label>
        <input type="text" name="marca" required>
        <label>Preço:</label>
        <input type="number" name="preco" required>
        <input type="submit" value="Adicionar Produto">
    </form>
    <hr>
    <h2>Lista de Produtos</h2>
    <div>
    <?php include 'read.php'; ?> <!-- Inclui a lista de produtos -->
    </div>
</body>
</html>