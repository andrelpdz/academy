<!DOCTYPE html>
<html>
<head>
    <title>Editar</title>
</head>
<body>

<h2>Editar Gasto</h2>

/gastos/atualizar
    <input type="hidden" name="id" value="<?= $gasto['id'] ?>">

    <input type="text" name="item" value="<?= $gasto['item'] ?>">
    <input type="text" name="valor" value="<?= $gasto['valor'] ?>">

    <button>Atualizar</button>
</form>

</body>
</html>
