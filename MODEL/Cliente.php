<?php
    class Cliente
    {
        private $id;
        private $cpf;
        private $nome;
        private $nascimento;
        private $usr;
        private $pass;

        public function __construct($id,$cpf,$nome,$nascimento,$usr,$pass) {
           $this->id = $id;
            $this->cpf = $cpf;
            $this->nome = $nome;
            $this->nascimento = $nascimento;
            $this->usr = $usr;
            $this->pass = $pass;
       
        }
        //GETs
        public function getCpf(){
            return $this->cpf;
        }

        public function getNome(){
            return $this->nome;
        }

        public function getNascimento(){
            return $this->nascimento;
        }
        public function getId(){
            return $this->id;

        }
        public function getUsr(){
            return $this->usr;
        }
        public function getPass(){
            return $this->pass;
        }

        //SETs
        public function setId(){
            $this->id = $id;
        }
        public function setCpf($cpf){
            $this->cpf = $cpf;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }
        
        public function setNascimento($nascimento){
            $this->nascimento = nascimento;
        }

        
    }
    


?>