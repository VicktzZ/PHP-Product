<?php
    class Produto   
    {

        // INICIALIZÇÃO DAS VARIÁVEIS + PDO
        
        private $id;
        private $desc;
        private $price;
        private $pdo;

	    // function __construct(){
            // $dns = "mysql:dbname=produto;host=localhost";
            // $dbUser = "root";
            // $dbPass = "";

            // try {
            //    $this->pdo = new PDO($dns, $dbUser, $dbPass);
            // } catch (Exception $e) {
            //    echo "<h1>Não consegui Conectar. Tente mais tarde";
            // }
        // }
      
        // GETTERS

        public function getId()
        {
            return $this->id;  
        }

        public function getDesc()
        {
            return $this->desc;
        }

        public function getPrice()
        {
            return $this->price;
        }

        // SETTERS

        public function setId($id)
        {
            $this->id = $id;
        }

        public function setDesc($desc)
        {
            $this->desc = $desc;
        }

        public function setPrice($price)
        {
            $this->price = $price;
        }
    }
