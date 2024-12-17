<?php

if ($_SERVER['REQUEST_METHOD'] != 'POST') {

    header('location: /');
    exit();
}


$usuario_id = $_SESSION['auth']->id;
$livro_id = $_POST['livro_id'];
$avaliacao = $_POST['avaliacao'];
$nota = $_POST['nota'];


if (trim($avaliacao) === ''  || strlen($nota) == 0) {
    header('location: /livro?id=' . $livro_id);
    exit();
}

$database->query("
    insert into avaliacoes (usuario_id,livro_id,avaliacao,nota) values (:usuario_id,:livro_id,:avaliacao,:nota);
", null, [
    "usuario_id" => $usuario_id,
    "livro_id" => $livro_id,
    "avaliacao" => $avaliacao,
    "nota" => $nota,
]);

flash()->push('message', "Avaliação criada com sucesso!");
header('location: /livro?id=' . $livro_id);
exit();
