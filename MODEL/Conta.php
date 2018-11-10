<?php

    class Conta{

        //Atributos
        private $id;
        private $cliente;
        private $agencia;
        private $tipo;
        private $saldo;

        //Construtor
        public function __construct($id,$cliente,$agencia,$tipo,$saldo){
            $this->id = $id;
            $this->cliente = $cliente;
            $this->agencia = $agencia;
            $this->tipo = $tipo;
            $this->saldo = $saldo;
        }

        //GETs
        public function getId(){
            return $this->id;
        }

        public function getCliente(){
            return $this->cliente;
        }

        public function getAgencia(){
            return $this->agencia;
        }

        public function getTipo(){
            return $this->tipo;
        }

        public function getSaldo(){
            return $this->saldo;
        }
        
        //SETs
        public function setCliente($cliente){
            $this->cliente = $cliente;
        }

        public function setAgencia($agencia){
            $this->agencia = $agencia;
        }

        public function setTipo($tipo){
            $this->tipo = $tipo;
        }

        public function setSaldo($saldo){
            $this->saldo = $saldo;
        }
    }



?>