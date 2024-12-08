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

    public function returnLivros()
    {

        try {

            $sql = "Select * from livros";


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
