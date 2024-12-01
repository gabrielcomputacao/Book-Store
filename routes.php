<?php

// O php processa os dados de cima para baixa e vai passando as variaveis para baixo

$controller = 'index';

if (isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] !== '/') {

    $uri = str_replace('/', '', $_SERVER['REQUEST_URI']);
    $linkUri = explode('?', $uri);

    $controller = $linkUri[0];
}

if (!file_exists("controllers/{$controller}.controller.php")) {

    abort(404);
}

// => INGLES: DUMP = jogar fora

// sempre pega o caminho direto da raiz do projeto e nao da pagina em questao
require "controllers/{$controller}.controller.php";