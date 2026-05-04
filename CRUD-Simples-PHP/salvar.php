<?php
include("conexao.php");

$item = $_POST['item'];
$valor = $_POST['valor'];

$sql = "INSERT INTO gastos (item, valor) VALUES ('$item', '$valor')";
$conn->query($sql);

header("Location: index.php");
?>
