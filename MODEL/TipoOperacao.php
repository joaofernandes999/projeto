<?php 
    class TipoOperacao{

        private $id;
        private $tipo;

        
        public function __construct($id,$tipo){
            $this->id = $id;
            $this->tipo = $tipo;

        }

        public function getId(){
            return $this->id;
        }

        public function getTipo(){
            return $this->tipo;
        }

        public function setTipo(){
            $this->tipo = $tipo;
        }



    }




?>