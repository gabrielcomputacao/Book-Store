<?php

// Model
require 'dados.php';

$id = $_REQUEST['id'];


$filtrado = array_filter($livros, function ($book) use ($id) {

    return $book['id'] == (int)$id;
});

$livroSelecionado = array_pop($filtrado);

$view = 'livro';

require "views/template/app.php";
