<?php
include("conexao.php");

$id = $_GET['id'];

$sql = "SELECT * FROM gastos WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<form action="atualizar.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    
    Item: <input type="text" name="item" value="<?php echo $row['item']; ?>">
    Valor: <input type="text" name="valor" value="<?php echo $row['valor']; ?>">
    
    <button type="submit">Atualizar</button>
</form>
