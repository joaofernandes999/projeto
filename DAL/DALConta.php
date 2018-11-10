<?php include_once("Conexao.php"); ?>

<?php 
    class DALConta{
        private $conexao;

        public function __construct(){
            $this->conexao = new Conexao();
        }

        public function Insert($conta){
            $sql = "insert into conta(cliente,agencia,tipo,saldo) values ('";
            $sql = $sql . $cliente->getCliente() . "','";
            $sql = $sql . $cliente->getAgencia() . "','";
            $sql = $sql . $cliente->getTipo() . "','";
            $sql = $sql . $cliente->getSaldo() . "')";
            $banco = $this->conexao->getBanco();
            $banco->query($sql);
            $this->conexao->desconectar();

        }
        public function Delete($id){
            $sql = "Delete from conta where id = " .$id;
            
            $banco = $this->conexao->getBanco();
            $banco->query($sql);
            $this->conexao->desconectar();
        }

        public function Update($conta){
            $sql = "Update conta set cliente='" . $conta->getCliente();
            $sql = $sql . "',agencia='" . $conta->getAgencia() . "',";
            $sql = $sql . "',tipo='" . $conta->getTipo() . "',";
            $sql = $sql . "saldo='" . $conta->getSaldo() ."'" . " where id =" .$conta->getId();
            $banco = $this->conexao->getBanco();
            $banco->query($sql);
            $this->conexao->desconectar();
        }
        public function UpdateSaldo($val,$cli){
            $sql= "Update conta set saldo = ".$val. " where cliente = ". $cli;
            
            $banco = $this->conexao->getBanco();
            $banco->query($sql);
            $this->conexao->desconectar();
            
        }


        public function Select(){
            $sql = "Select * from conta";
            $banco = $this->conexao->getBanco();
            $banco->query($sql);
            $this->conexao->desconectar();

        }

        public function SelectSaldo($cli){
            $sql = "Select saldo from conta where cliente= ".$cli;
            $banco = $this->conexao->getBanco();
            $rs = $banco->query($sql);
            return $rs; 
            $this->conexao->desconectar();
            
        }




    }




?>