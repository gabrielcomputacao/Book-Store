<?php

class Livro
{

    public $id;
    public $titulo;
    public $autor;
    public $descricao;
    public $ano_lancamento;
    public $id_usuarios;
    public $count_avaliacoes;
    public $nota_avaliacao;


    public static function get($id)
    {

        $database = new DB(config());

        return  $database->query("
        select l.id,l.titulo,l.descricao,l.autor,l.ano_lancamento, round(sum( a.nota / 5)) as nota_avaliacao, count(a.id) as count_avaliacoes
            from livros as l
            left join avaliacoes as a on a.livro_id = l.id
            where l.id = :id
            group by l.id,l.titulo,l.descricao,l.autor,l.ano_lancamento;
        ", self::class, ['id' => $id])->fetch();
    }

    public static function all()
    {

        $database = new DB(config());

        return  $database->query("
        select l.id,l.titulo,l.descricao,l.autor,l.ano_lancamento, round(sum( a.nota / 5)) as nota_avaliacao, count(a.id) as count_avaliacoes
            from livros as l
            left join avaliacoes as a on a.livro_id = l.id
            group by l.id,l.titulo,l.descricao,l.autor,l.ano_lancamento;
        ", self::class)->fetchAll();
    }



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
