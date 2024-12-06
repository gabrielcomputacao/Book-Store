<?php

    

    class DB{

        public function returnLivros() {

            require 'credentials.php';
            
            try {
    
                $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
            
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
                $query = $pdo->query("Select * from livros");
            
               return $query->fetchAll();
            
            
               
            
            } catch (\Throwable $th) {
                echo "conexão NÃO deu certo";
            }
        }

    }


