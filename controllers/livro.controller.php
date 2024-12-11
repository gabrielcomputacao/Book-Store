<?php

// Model


$numberId = explode('=', $_SERVER['REQUEST_URI']);

$id = $numberId[1];

$filtrado = $database->livro($id);


view('livro', ['livroSelecionado' => $filtrado]);
