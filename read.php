<?php
include 'conexao.php'; // Inclui o arquivo de conexão

$sql = "SELECT * FROM produto"; // Consulta todos os produtos
$result = $conn->query($sql); // Executa a consulta

if ($result->num_rows > 0) { // Se há resultados
    echo "<table border='1'>
    <tr><th>id
    </th><th>Nome
    </th><th>Marca
    </th><th>Preço
    </th></tr>";
    while ($row = $result->fetch_assoc()) { // Para cada produto
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["Nome"] . "</td>
                <td>" . $row["Marca"] . "</td>
                <td>" . $row["Preço"] . "</td>
                <td>
                    <a href='update.php?id=" . $row["id"] . "'>Editar</a>
                    <a href='delete.php?id=" . $row["id"] . "'>Excluir</a>
                </td>
              </tr>";
    }
    echo "</table>"; // Fecha a tabela
} else {
    echo "Nenhum produto encontrado."; // Mensagem se não houver produtos
}
?>