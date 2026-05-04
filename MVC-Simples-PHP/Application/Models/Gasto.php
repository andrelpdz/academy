<?php

class Gasto {

    private $pdo;

    public function __construct() {
        $db = new Database();
        $this->pdo = $db->connect();
    }

    public function all() {
        return $this->pdo->query("SELECT * FROM gastos")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM gastos WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($item, $valor) {
        $stmt = $this->pdo->prepare("INSERT INTO gastos (item, valor) VALUES (?, ?)");
        return $stmt->execute([$item, $valor]);
    }

    public function update($id, $item, $valor) {
        $stmt = $this->pdo->prepare("UPDATE gastos SET item=?, valor=? WHERE id=?");
        return $stmt->execute([$item, $valor, $id]);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM gastos WHERE id=?");
        return $stmt->execute([$id]);
    }
}
