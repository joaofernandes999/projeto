<?php
    class Agencia{

        //Atributos
        private $id;
        private $descricao;

        //Construtor
        public function __construct($id,$descricao){
            $this->id = $id;
            $this->descricao = $descricao;
        }
        
        //GETs
        public function getId(){
            return $this->id;
        }

        public function getDescricao(){
            return $this->descricao;
        }

        //SETs
        public function setDescricao($descricao){
            $this->descricao = $descricao;

        }

    }

?>