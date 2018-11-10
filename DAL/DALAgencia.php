<?php  include_once("Conexao.php");?>
<?php include("../MODEL/Agencia.php");?>

<?php 
    class DALAgencia{
        private $conexao;

        public function __construct(){
            $this->conexao= new Conexao();
        }

        public function Insert($agencia){
            $sql = "Insert into agencia(descricao) values ('" . $agencia->getDescricao() . "')";
            $banco = $this->conexao->getBanco();
            $banco->query($sql);
            $this->conexao->desconectar();
        }

        public function Delete($id){
            $sql = "Delete from agencia where id=" . $id;
            $banco = $this->conexao->getBanco();
            $banco->query($sql);
            $this->conexao->desconectar();
        }

        public function Update($agencia){
            $sql = "Update agencia set descricao = '" .$agencia->getDescricao() . "' where id= " . $agencia->getId();
            $banco = $this->conexao->getBanco();
            $banco->query($sql);
            $this->conexao->desconectar();

        
        }

        public function Select(){
            $sql = "Select * from agencia";
            $banco = $this->conexao->getBanco();
            $rs = $banco->query($sql);
            $this->conexao->desconectar();
            return $rs;

        }




    }














?>