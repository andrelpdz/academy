#PROJETO CRUD SIMPLES

-HTML (formulário + listagem)
-CSS (bem básico)
-JavaScript (opcional para confirmação)
-PHP (CRUD)
-MySQL

🗄️ 1. Banco de Dados
Você já tem a tabela, só ajuste para AUTO_INCREMENT:
```SQLCREATE TABLE `gastos` (  `id` int(11) NOT NULL AUTO_INCREMENT,  `item` varchar(64) NOT NULL,  `valor` decimal(11,2) NOT NULL,  PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;Show more lines```

⚙️ 2. Conexão (conexao.php)
```<?php$host = "localhost";$user = "root";$pass = "";$db = "seu_banco";$conn = new mysqli($host, $user, $pass, $db);if ($conn->connect_error) {    die("Erro: " . $conn->connect_error);}?>```

🏠 3. Página principal (index.php)
```<?php include("conexao.php"); ?><!DOCTYPE html><html lang="pt-br"><head><meta charset="UTF-8"><title>Controle de Gastos</title><style>body { font-family: Arial; margin: 20px; }input, button { padding: 5px; margin: 5px; }table { border-collapse: collapse; width: 50%; }td, th { border: 1px solid #ccc; padding: 8px; }</style><script>function confirmar(id) {    if (confirm("Excluir este gasto?")) {        window.location = "deletar.php?id=" + id;    }}</script></head><body><h2>Cadastrar gasto</h2>salvar.php    Item: <input type="text" name="item" required>    Valor: <input type="number" step="0.01" name="valor" required>    <button type="submit">Salvar</button></form><hr><h2>Lista de gastos</h2><table><tr>    <th>ID</th>    <th>Item</th>    <th>Valor</th>    <th>Ações</th></tr><?php$sql = "SELECT * FROM gastos";$result = $conn->query($sql);while($row = $result->fetch_assoc()) {    echo "<tr>        <td>{$row['id']}</td>        <td>{$row['item']}</td>        <td>R$ {$row['valor']}</td>        <td>            editar.php?id={$row[ |            #        </td>    </tr>";}?></table></body></html>```

💾 4. Salvar (salvar.php)
```<?phpinclude("conexao.php");$item = $_POST['item'];$valor = $_POST['valor'];$sql = "INSERT INTO gastos (item, valor) VALUES ('$item', '$valor')";$conn->query($sql);header("Location: index.php");?>```

✏️ 5. Editar (editar.php)
```<?phpinclude("conexao.php");$id = $_GET['id'];$sql = "SELECT * FROM gastos WHERE id=$id";$result = $conn->query($sql);$row = $result->fetch_assoc();?>atualizar.php    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">        Item: <input type="text" name="item" value="<?php echo $row['item']; ?>">    Valor: <input type="text" name="valor" value="<?php echo $row['valor']; ?>">        <button type="submit">Atualizar</button></form>```

🔄 6. Atualizar (atualizar.php)
```<?phpinclude("conexao.php");$id = $_POST['id'];$item = $_POST['item'];$valor = $_POST['valor'];$sql = "UPDATE gastos SET item='$item', valor='$valor' WHERE id=$id";$conn->query($sql);header("Location: index.php");?>```

❌ 7. Deletar (deletar.php)
```<?phpinclude("conexao.php");$id = $_GET['id'];$sql = "DELETE FROM gastos WHERE id=$id";$conn->query($sql);header("Location: index.php");?>```

#✅ Resultado
Você terá um CRUD completo:

-✅ Criar gasto
-✅ Listar gastos
-✅ Editar gasto
-✅ Excluir gasto
