<?php
    class Produto   
    {

        // INICIALIZÇÃO DAS VARIÁVEIS + PDO
        
        private $id;
        private $desc;
        private $price;
        private $pdo;
      
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
