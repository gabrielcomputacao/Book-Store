<?php


if (isset($_SESSION['auth'])) {

    $result = $database->query("select * from livros where id_usuarios = :id", Livro::class, ['id' => $_SESSION['auth']->id])->fetchAll();
    view('meus-livros', ['mybooks' => $result]);
    exit();
}



view('meus-livros');
