<?php include_once("Conexao.php"); ?>
<?php include("../MODEL/TipoConta.php"); ?>
<?php 
    class DALTipoConta{
        private $conexao;

        public function __construct(){
            $conexao = new Conexao();
        }

        public function Insert($tipoconta){
            $sql = "Insert into tipoconta(tipo) values('" . $tipoconta->getTipo() . "')";

            $banco = $this->conexao->getBanco();
            $banco->query($sql);
            $this->conexao->desconectar();


        }
        public function Delete($id){
            $sql = "Delete from tipo_conta where id = " .$id;
            
            $banco = $this->conexao->getBanco();
            $banco->query($sql);
            $this->conexao->desconectar();
        }

        public function Update($tipoconta){
            $sql = "Update agencia set tipo = " .$tipoconta->getTipo();

            $banco = $this->conexao->getBanco();
            $banco->query($sql);
            $this->conexao->desconectar()
        }

        public function Select(){
            $sql = "Select * from tipo_conta";
            $banco = $this->conexao->getBanco();
            $banco->query($sql);
            $this->conexao->desconectar();

        }




    }




?>