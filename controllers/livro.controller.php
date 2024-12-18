<?php

// Model


$numberId = explode('=', $_SERVER['REQUEST_URI']);

$id = $numberId[1];

$filtrado = Livro::get($id);

$avaliacoes = $database->query("select * from avaliacoes where livro_id = :id", Avaliacao::class, ['id' => $id])->fetchAll();

view('livro', ['book' => $filtrado, 'avaliacao' => $avaliacoes]);
