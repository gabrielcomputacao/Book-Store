<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $validacoes = [];

    $nome = $_POST['name'];
    $email = $_POST['email'];
    $confirmEmail = $_POST['confirmemail'];
    $password = $_POST['password'];

    if (strlen($nome) == 0) {
        $validacoes[] = 'O nome é obrigatório';
    }

    // A funcao filter_var tem varias validacoes ja embutidas que retornam true se passa da valicação
    // nesse exemplo foi a validação se é um email valido
    if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $validacoes[] = 'invalid email';
    }

    if ($email != $confirmEmail) {
        $validacoes[] = 'Confirmation email is different';
    }

    if (strlen($password) == 0) {
        $validacoes[] = 'Password is required';
    }

    if (strlen($password) < 8 || ! str_contains($password, '*')) {
        $validacoes[] = 'Password must have a special character';
    }

    if (sizeof($validacoes) > 0) {
        $_SESSION['validacoes'] = $validacoes;
        header('location: /Book-Store/login');
        exit();
    }


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
