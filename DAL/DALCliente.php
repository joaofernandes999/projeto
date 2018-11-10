<?php include_once("Conexao.php"); ?>
<?php 
    class DALCliente{
        private $conexao;

        public function __construct(){
            $this->conexao = new Conexao();
        }

        public function Insert($cliente){
            $sql = "insert into cliente(cpf,nome,nascimento) values ('";
            $sql = $sql . $cliente->getCpf() . "','";
            $sql = $sql . $cliente->getNome() . "','";
            $sql = $sql . $cliente->getNascimento() . "','";
            $sql = $sql . $cliente->getUsr() . "','";
            $sql = $sql . $cliente->getPass() . "')";
            $banco = $this->conexao->getBanco();
            $banco->query($sql);
            $this->conexao->desconectar();

        }

        public function Delete($id){
            $sql = "Delete from cliente where id =" . $id;
            $banco = $this->conexao->getBanco();
            $banco->query($sql);
            $this->conexao->desconectar();

        }

        public function Update($cliente){
            $sql = "Update cliente set cpf='" . $cliente->getCpf();
            $sql = $sql . "',nome='" . $cliente->getNome() . "',";
            $sql = $sql . "',nome='" . $cliente->getNascimento() . "',";
            $sql = $sql . "',nome='" . $cliente->getUsr() . "',";
            $sql = $sql . "nascimento='" . $cliente->getPass() ."'" . " where id =" .$cliente->getId();
            $banco = $this->conexao->getBanco();
            $banco->query($sql);
            $this->conexao->desconectar();
        }

        public function Select($id){
            $sql = "Select * from cliente where id = ". $id;
            $banco = $this->conexao->getBanco();
            $banco->query($sql);
            $this->conexao->desconectar();
        }

        public function SelectAll(){
            $sql = "Select id,nome from cliente";
            $banco = $this->conexao->getBanco();
            $rs = $banco->query($sql);
            $this->conexao->desconectar();
            return $rs;
        }

        public function SelectId($usr){
            $sql = "Select id from cliente where login like '$usr'";
            $banco = $this->conexao->getBanco();
            $rs = $banco->query($sql);
            $this->conexao->desconectar();
            return $rs;
        }

        public function Login($usr,$pass){
            $sql= "Select * from cliente where login like '$usr'";
            $banco = $this->conexao->getBanco();
            $rs = $banco->query($sql);
            $this->conexao->desconectar();
            return $rs;
        }

    



    }


?>