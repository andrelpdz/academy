<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "seu_banco";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erro: " . $conn->connect_error);
}
?>
