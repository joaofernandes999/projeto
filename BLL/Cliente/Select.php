<?php
    include_once("../../DAL/DALCliente.php");

    $retorno = array();

    $dalCliente = new DALCliente();

    $dados = $dalCliente->SelectAll();
    $n = 0;
    $retorno['qtd'] = count($retorno);
    while($ln = mysqli_fetch_array($dados)){
        $retorno['nome'][$n] = $ln['nome'];
        $retorno['id'][$n] = $ln['id'];
        $n++;
       
    }
    $retorno['qtd'] = count($retorno)-1;
    die(json_encode($retorno));


?>