<?php 
    class TipoConta{

        //Atributos
        private $id;
        private $tipo;

        //Construtor
        public function __construct($id,$tipo){
            $this->id = $id;
            $this->$tipo = $tipo;

        }

        //GETs
        public function getId(){
            return $this->id;
        }

        public function getTipo(){
            return $this->$tipo;
        }

        //SETs
        public function setTipo(){
            $this->tipo = $tipo;
        }


    }




?>