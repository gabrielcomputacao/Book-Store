<?php


$partUrl = parse_url($_SERVER['REQUEST_URI']);
$message = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = $_POST['email'];
    $password = $_POST['password'];


    $user = $database->query("
    select * from usuarios where
    email = :email and 
    senha = :password
    ", User::class, [
        'email' => $email,
        'password' => $password
    ])->fetch();

    var_dump($user);

    if ($user) {

        $_SESSION['auth'] = $user;
        header('location: /Book-Store');
        exit();
    }
}



if (isset($partUrl['query'])) {
    parse_str($partUrl['query'], $message);
    view('login', ['message' => $message['msg']]);
    exit();
}

view('login');
