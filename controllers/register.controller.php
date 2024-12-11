<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $database->query(
        'insert into usuarios (nome,email,senha) values (:nome,:email,:senha)',
        null,
        [
            'nome' => $_POST['name'],
            'email' => $_POST['email'],
            'senha' => $_POST['password'],
        ]
    );



    header("location: /login?msg=Registrado com sucesso!");
    exit();
}
