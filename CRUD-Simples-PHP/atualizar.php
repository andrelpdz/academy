<?php
include("conexao.php");

$id = $_POST['id'];
$item = $_POST['item'];
$valor = $_POST['valor'];

$sql = "UPDATE gastos SET item='$item', valor='$valor' WHERE id=$id";
$conn->query($sql);

header("Location: index.php");
?>
