<?php 
    include_once("../../DAL/DALCliente.php");

    $usr = trim($_POST['user']);
    $pass = trim($_POST['password']);

    $dalCliente = new DALCliente();

    $c = mysqli_fetch_array($dalCliente->Login($usr,$pass));
   if($pass==$c['pass']){
        session_start();

       $_SESSION['user'] = $usr; 
       header('location: ../../views/Home.php');

   }
   else{ 
       echo "Usuario ou senha não concide";
       header('location: ../../views/login.html');
   }
?>