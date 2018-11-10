<?php 
    class Conexao{
        
        //Atributos
        private $servidor;
        private $usuario;
        private $senha;
        private $nomeBanco;
        private $banco;

        public function __construct($servidor = "localhost",$usuario = "root",$senha = "",$nomeBanco = "com"){
            $this->setServidor($servidor);
            $this->setUsuario($usuario);
            $this->setSenha($senha);
            $this->setNomeBanco($nomeBanco);
            $this->conectar();

        }

        //GETs
        public function getServidor(){
            return $this->servidor;
        }

        public function getUsuario(){
            return $this->usuario;
        }

        public function getSenha(){
            return $this->senha;
        }

        public function getNomeBanco(){
            return $this->nomeBanco;
        }

        

        //SETs
        public function setServidor($servidor){
             $this->servidor = $servidor;
        }

        public function setUsuario($usuario){
            $this->usuario = $usuario;
        }

        public function setSenha($senha){
            $this->senha = $senha;
        }

        public function setNomeBanco($nomeBanco){
            $this->nomeBanco = $nomeBanco;
        }

        

        public function conectar(){
            $this->banco = new mysqli(
                $this->getServidor(),
                $this->getUsuario(),
                $this->getSenha(),
                $this->getNomeBanco()
            );

            if($this->banco->connect_error){
                die('Erro de Conexão (' . $this->banco->error . '):' . $mysqli->connect_error);

            }
        }

        public function getBanco(){
            return $this->banco;
        }

        public function desconectar(){
            $this->banco->close();
        }


    }



?>