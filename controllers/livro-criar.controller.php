<?php


if ($_SERVER['REQUEST_METHOD'] != 'POST') {

    header('location: /Book-Store/meus-livros');
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



$dir = "Book-Store/images/";
$arquivo = $dir . basename($_FILES['image']['name']);
// md5 é um metodo para incriptografar e o rand coloca um numero aleatorio
// newName é feito para nao salvar as imagens com caracteres especiais dentro do banco
$newName = md5(rand());
$extension = pathinfo($arquivo, PATHINFO_EXTENSION);
$newFile = "$dir$newName.$extension";

// move um arquivo temporario do servidor para uma pasta dentro do projeto
move_uploaded_file($_FILES['image']['tmp_name'], $newFile);

$database->query("insert into livros (titulo,autor,descricao,ano_lancamento,id_usuarios,image) values
    (:titulo,:autor,:descricao,:ano_lancamento,:id_usuarios,:image)
", null, [
    'titulo' => $titulo,
    'autor' => $autor,
    'descricao' => $descricao,
    'ano_lancamento' => $ano_lancamento,
    'id_usuarios' => $usuario_id,
    'image' => $newFile
]);

flash()->push('message', 'Livro cadastrado com sucesso!');
header('location: /Book-Store/meus-livros');
exit();
