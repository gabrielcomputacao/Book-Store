<?php

$db = new DB();

$livros = $db->returnLivros();


view('index', ['livros' => $livros]);
