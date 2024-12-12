<?php


$partUrl = parse_url($_SERVER['REQUEST_URI']);
$message = [];

if (isset($partUrl['query'])) {
    parse_str($partUrl['query'], $message);
    view('login', ['message' => $message['msg']]);
    exit();
}

view('login');
