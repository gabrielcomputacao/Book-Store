<?php

class Livro
{

    public $id;
    public $titulo;
    public $autor;
    public $descricao;


    // Funcao que pode ser chamada , sem precisa ser instanciado um objeto
    public static function make($item)
    {

        // self instancia a classe sendo ela mesmo, nesse caso seria um novo Livro
        $livro = new self();
        $livro->autor = $item['autor'];
        $livro->id = $item['id'];
        $livro->titulo = $item['titulo'];
        $livro->descricao = $item['descricao'];

        return $livro;
    }
}
