<?php 
    include_once("../../DAL/DALCliente");
    session_start();

    $dalCliente = new DALCliente();

    if(isset($_SESSION['user'])){
        $resposta = $dalCliente->SelectId($_SESSION['user']);
    }



?>