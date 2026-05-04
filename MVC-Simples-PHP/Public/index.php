<?php

require_once "../config/database.php";

// Autoload simples
spl_autoload_register(function($class) {
    if (file_exists("../Application/Controllers/" . $class . ".php")) {
        require_once "../Application/Controllers/" . $class . ".php";
    }

    if (file_exists("../Application/Models/" . $class . ".php")) {
        require_once "../Application/Models/" . $class . ".php";
    }
});

// URL
$url = isset($_GET['url']) ? $_GET['url'] : "gastos/index";
$url = explode("/", $url);

// Controller
$controllerName = ucfirst($url[0]) . "Controller";
$method = $url[1] ?? "index";

$controller = new $controllerName();
$controller->$method();
