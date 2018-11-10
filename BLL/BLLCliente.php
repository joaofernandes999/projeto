<?php include_once("../DAL/DALCliente.php") ?>

<?php 

    class BLLCliente{

       private $dalCliente;

        private $usr; 
        private $pass; 

        public function __construct(){
             $this->dalCliente = new DALCliente();
             $this->usr = trim($_POST['user']);
             $this->pass = trim($_POST['password']);
        }

        public function Insert($cliente){
            $dalCliente->Insert();
        }

        public function Delete($id){
            $dalCliente->Delete($id);
        }

        public function Update($cliente){
            $dalCliente->Update($cliente);

        }

        public function Select($id){
            $dalCliente->Select($id);

        }
        public function Login($usr,$pass){
            $c = mysqli_fetch_arra($dalCliente->Login($usr,$pass));
            echo($c['usr']);
            echo($c['pass']);
        }

    }







?>