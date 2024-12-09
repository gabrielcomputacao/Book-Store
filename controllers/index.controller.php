<?php

$db = new DB();

$partsUrl = parse_url($_SERVER['REQUEST_URI']);

$livros = '';

$queryStringPesquisar = [];

if (isset($partsUrl['query'])) {
    parse_str($partsUrl['query'], $queryStringPesquisar);
}


if (isset($queryStringPesquisar['pesquisar'])) {
    $livros = $db->returnLivros($queryStringPesquisar['pesquisar']);
} else {
    $livros = $db->returnLivros();
}



view('index', ['livros' => $livros]);
