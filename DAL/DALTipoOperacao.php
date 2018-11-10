<?php include_once("../MODEL/TipoOperacao.php");?>
<?php include_once("../MODEL/TipoOperacao.php"); ?>
<?php  include_once("Conexao.php");?>
<?php 
    class DALTipoOperacao{
        private $conexao;

        public function __construct(){
            $this->conexao = new Conexao();

        }

        public function Insert($tipooperacao){
            $sql = "Insert into tipo_operacao(descricao) values ('" . $tipooperacao->getDescricao() . "')";

            $banco = $this->conexao->getBanco();
            $banco->query($sql);
            $this->conexao->desconectar();
        }

        public function Delete($id){
            $sql = "Delete from tipo_operacao where id = ". $id;
            
            $banco = $this->conexao->getBanco();
            $banco->query($sql);
            $this->conexao->desconectar();

        }

        public function Update($tipooperacao){

            $sql = "Update tipo_operacao set descricao = '" .$tipooperacao->getDescricao() . "' where id = " .$tipooperacao->getId();

            $banco = $this->conexao->getBanco();
            $banco->query($sql);
            $this->conexao->desconectar();
        } 
         public function Select(){
            $sql = "Select * from tipo_operacao";
            $banco = $this->conexao->getBanco();
            $rs = $banco->query($sql);
            $this->conexao->desconectar();
            return $rs;

        }


    }


?>