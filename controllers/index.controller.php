<?php

$db = new DB($config);

$partsUrl = parse_url($_SERVER['REQUEST_URI']);

$livros = '';

$queryStringPesquisar = [];

if (isset($partsUrl['query'])) {
    parse_str($partsUrl['query'], $queryStringPesquisar);
}

if (isset($queryStringPesquisar['pesquisar'])) {
    $valuePesquisar = $queryStringPesquisar['pesquisar'];
    $livros = $db->query("select * from livros
                where
                titulo like :pesquisa
                or descricao like :pesquisa
                or autor like :pesquisa
            ", Livro::class, ['pesquisa' => "%$valuePesquisar%"]);
} else {
    $livros = $db->query("select * from livros", Livro::class)->fetchAll();
}



view('index', ['livros' => $livros]);
