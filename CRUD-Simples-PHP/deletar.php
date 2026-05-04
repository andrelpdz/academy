<?php
include("conexao.php");

$id = $_GET['id'];

$sql = "DELETE FROM gastos WHERE id=$id";
$conn->query($sql);

header("Location: index.php");
?>
