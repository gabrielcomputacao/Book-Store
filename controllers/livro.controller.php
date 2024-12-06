<?php

// Model

$db = new DB();

$livros = $db->returnLivros();

echo "URI: {$_SERVER['REQUEST_URI']}<br>";
var_dump($_REQUEST);

$id = $_REQUEST['id'];


$filtrado = array_filter($livros, function ($book) use ($id) {

    return $book['id'] == (int)$id;
});

$livroSelecionado = array_pop($filtrado);

view('livro', ['livroSelecionado' => $livroSelecionado]);
