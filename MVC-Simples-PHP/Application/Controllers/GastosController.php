<?php

class GastosController {

    private $model;

    public function __construct() {
        $this->model = new Gasto();
    }

    public function index() {
        $gastos = $this->model->all();
        require "../Application/Views/gastos/index.php";
    }

    public function salvar() {
        $this->model->create($_POST['item'], $_POST['valor']);
        header("Location: /gastos/index");
    }

    public function editar() {
        $gasto = $this->model->find($_GET['id']);
        require "../Application/Views/gastos/editar.php";
    }

    public function atualizar() {
        $this->model->update($_POST['id'], $_POST['item'], $_POST['valor']);
        header("Location: /gastos/index");
    }

    public function deletar() {
        $this->model->delete($_GET['id']);
        header("Location: /gastos/index");
    }
}
