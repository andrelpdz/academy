<!DOCTYPE html>
<html>
<head>
    <title>Gastos</title>
</head>
<body>

<h2>Novo Gasto</h2>
/gastos/salvar
    <input type="text" name="item" placeholder="Item" required>
    <input type="number" step="0.01" name="valor" placeholder="Valor" required>
    <button>Salvar</button>
</form>

<h2>Lista</h2>

<table border="1">
<tr>
    <th>ID</th>
    <th>Item</th>
    <th>Valor</th>
    <th>Ações</th>
</tr>

<?php foreach($gastos as $g): ?>
<tr>
    <td><?= $g['id'] ?></td>
    <td><?= $g['item'] ?></td>
    <td>R$ <?= $g['valor'] ?></td>
    <td>
        editar?id=<?= $g['id'] ?>">Editar</a>
        deletar?id=<?= $g['id'] ?>" onclick="return confirm('Excluir?')">Excluir</a>
    </td>
</tr>
<?php endforeach; ?>

</table>

</body>
</html>
