<?php


class DB
{

    private $db;

    public function __construct()
    {

        require 'credentials.php';

        $this->db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function returnLivros($pesquisa = null)
    {

        try {

            $sql = '';
            if (!isset($pesquisa)) {
                $sql = "select * from livros";
            } else {
                $sql = "select * from livros
                where
                titulo like '%$pesquisa%'
                or descricao like '%$pesquisa%'
                or autor like '%$pesquisa%'
            ";
            }

            $query = $this->db->query($sql);

            $items =  $query->fetchAll();



            return array_map(fn($item) => Livro::make($item), $items);
        } catch (\Throwable $th) {
            echo "conexão NÃO deu certo";
        }
    }

    public function livro($id = null)
    {

        $sql = "SELECT * from livros";

        $sql .= " where id =" . $id;

        $query = $this->db->query($sql);

        $items = $query->fetchAll();

        return array_map(fn($item) => Livro::make($item), $items)[0];
    }
}
