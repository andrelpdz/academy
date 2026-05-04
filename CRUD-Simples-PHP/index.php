<?php    
include("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Controle de Gastos</title>

<style>
body { font-family: Arial; margin: 20px; }
input, button { padding: 5px; margin: 5px; }
table { border-collapse: collapse; width: 50%; }
td, th { border: 1px solid #ccc; padding: 8px; }
</style>

<script>
function confirmar(id) {
    if (confirm("Excluir este gasto?")) {
        window.location = "deletar.php?id=" + id;
    }
}
</script>

</head>
<body>

<h2>Cadastrar gasto</h2>
<form action="salvar.php" method="post">
    Item: <input type="text" name="item" required>
    Valor: <input type="number" step="0.01" name="valor" required>
    <button type="submit">Salvar</button>
</form>

<hr>

<h2>Lista de gastos</h2>
<table>
<tr>
    <th>ID</th>
    <th>Item</th>
    <th>Valor</th>
    <th>Ações</th>
</tr>

<?php
$sql = "SELECT * FROM gastos";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['item']}</td>
        <td>R$ {$row['valor']}</td>
        <td>
            <a href='editar.php?id={$row['id']}'>Editar</a> |
            <a href='#' onclick='confirmar({$row['id']})'>Excluir</a>
        </td>
    </tr>";
}
?>

</table>

</body>
</html>
