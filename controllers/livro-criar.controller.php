<?php


if ($_SERVER['REQUEST_METHOD'] != 'POST') {

    header('location: /meus-livros');
    exit();
}

if (! isset($_SESSION['auth'])) {

    abort(403);
}


$usuario_id = $_SESSION['auth']->id;

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$descricao = $_POST['descricao'];
$ano_lancamento = $_POST['ano_lancamento'];


$validation = Validation::toValidate([
    'titulo' => ['required'],
    'autor' => [
        'required',
    ],
    'descricao' => ['required'],
    'ano_lancamento' => ['required'],

], $_POST);

if ($validation->notPass()) {

    header('location: /Book-Store/meus-livros');
    exit();
}

$database->query("insert into livros (titulo,autor,descricao,ano_lancamento,id_usuarios) values
    (:titulo,:autor,:descricao,:ano_lancamento,:id_usuarios)
", null, [
    'titulo' => $titulo,
    'autor' => $autor,
    'descricao' => $descricao,
    'ano_lancamento' => $ano_lancamento,
    'id_usuarios' => $usuario_id
]);

flash()->push('message', 'Livro cadastrado com sucesso!');
header('location: /meus-livros');
exit();
