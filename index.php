<?php

// O php processa os dados de cima para baixa e vai passando as variaveis para baixo

$controller = 'index';

echo $_SERVER['PATH_INFO'];

if (isset($_SERVER['PATH_INFO'])) {

    $uri = str_replace('/', '', $_SERVER['PATH_INFO']);

    $controller = $uri;
}

// sempre pega o caminho direto da raiz do projeto e nao da pagina em questao
require "controllers/{$controller}.controller.php";
