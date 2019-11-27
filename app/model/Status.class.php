<?php
    Class Status{
        
        private $id;
        private $nome;

        public function setId($id){
            $this->id = (int)$id;
        }
    
        public function getId(){
            return $this->id;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }
    
        public function getNome(){
            return $this->nome;
        }
    }
?>