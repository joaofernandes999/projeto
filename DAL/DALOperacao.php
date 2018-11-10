<?php include_once("Conexao.php");?>


<?php 
    class DALOperacao{
        private $conexao;

        public function __construct(){
            $this->conexao = new Conexao();
        }

        public function Insert($operacao){
            $sql = "Insert into operacao(cliente,clienteDest,valor,data,descricao) values('";
            $sql = $sql . $operacao->getCliente() . "','";
            $sql = $sql . $operacao->getClienteDest() . "','";
            $sql = $sql . $operacao->getValor() . "','";
            $sql = $sql . $operacao->getData() . "','";
            $sql = $sql . $operacao->getDescricao() . "')";
            $banco = $this->conexao->getBanco();
            echo($sql);
            $banco->query($sql);
            $this->conexao->desconectar();

        }

        public function Delete($id){
            $sql = "Delete from operacao where id = ". $id;
            
            $banco = $this->conexao->getBanco();
            $banco->query($sql);
            $this->conexao->desconectar();
        }
        public function Update($operacao){
            $sql = "Update operacao set cliente ='" . $operacao->getCliente();
            $sql = $sql . "',clienteDest='" . $operacao->getClienteDest() . "',";
            $sql = $sql . "',valor='" . $operacao->getValor() . "',";
            $sql = $sql . "data='" . $operacao->getData() ."',";
            $sql = $sql . "descricao='" . $operacao->getDescricao() ."',";
            $sql = $sql . "tipo='" . $operacao->getTipo() ."'" . " where id =" .$operacao->getId(); 

            $banco = $this->conexao->getBanco();
            $banco->query($sql);
            $this->conexao->desconectar();
        }

        public function Select($id){
            $sql = "Select * from operacao where cliente = ". $id;
            $banco = $this->conexao->getBanco();
            $banco->query($sql);
            $this->conexao-desconectar();
        }


        }



    





?>