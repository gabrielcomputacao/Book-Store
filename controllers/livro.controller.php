<?php

// Model

$db = new DB($config);

$numberId = explode('=', $_SERVER['REQUEST_URI']);

$id = $numberId[1];

$filtrado = $db->livro($id);


view('livro', ['livroSelecionado' => $filtrado]);
