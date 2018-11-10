<?php 
    class Operacao{

        //Atributos
        private $id;
        private $cliente;
        private $clienteDest;
        private $valor;
        private $data;
        private $descricao;


        //Construtor
        public function __construct($cliente,$clienteDest,$valor,$data,$descricao){
            $this->cliente = $cliente;
            $this->cliente = $clienteDest;
            $this->valor = $valor;
            $this->data = $data;
            $this->descricao = $descricao;
            
        }

        //GETs
        public function getId(){
            return $this->id;
        }

        public function getCliente(){
            return $this->cliente;
        }
        public function getClienteDest(){
            return $this->cliente;
        }

        public function getValor(){
            return $this->valor;
        }

        public function getData(){
            return $this->data;
        }

        public function getDescricao(){
            return $this->descricao;
        }


        //SETs

        public function setId($id){
            $this->id = $id;
        }

        public function setCliente($cliente){
            $this->cliente = $cliente;
        }
        public function setClienteDest($cliente){
            $this->cliente = $cliente;
        }

        public function setValor($valor){
            $this->valor = $valor;
        }

        public function setData($data){
            $this->data = $data;
        }

        public function setDescricao($descricao){
            $this->descricao = $descricao;
        }

      
        

        


    }



?>