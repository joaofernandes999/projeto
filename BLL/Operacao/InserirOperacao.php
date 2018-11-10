<?php 
    require_once("../../DAL/DALOperacao.php");
    include_once("../../MODEL/Operacao.php");
    require_once("../../DAL/DALCliente.php");
    include_once("../../DAL/DALConta.php");
    session_start();

    $dalCliente = new DALCliente();
    $dalConta = new DalConta();
    $testeConta = new DalConta();
    if(isset($_SESSION['user'])){
        $cliente = $dalCliente->SelectId($_SESSION['user']);    
    }

    $cli = "";
    while($c = mysqli_fetch_array($cliente)){
        $cli = $c['id'];
        
    }

    $beni = trim($_POST['cliente']);
    $descricao = trim($_POST['txtDesc']);
    $valor = trim($_POST['txtvalor']);
    $data = trim($_POST['data']);
    
    $saldoClienteQuery = $dalConta->SelectSaldo($cli);
    $saldoBeniQuery = $dalConta->SelectSaldo($beni);

    $saldoCliente = 0;
    while($saldo = mysqli_fetch_array($saldoClienteQuery)){
        $saldoCliente = $saldo['saldo'];
        }
    
    $saldoBeni = 0;    
    while($saldo = mysqli_fetch_array($saldoBeniQuery)){
            $saldoBeni = $saldo['saldo'];
        }    

    if($saldoCliente >= $valor){

        $dalOperacao = new DALOperacao();
        $modelOperacao = new Operacao($cliente,$beni,$valor,$data,$descricao);
        
        $valCliente = $saldoCliente - $valor;
        $valBeni = $saldoBeni + $valor;

        $dalConta->UpdateSaldo($valCliente,$cli);

        $testeConta->UpdateSaldo($valBeni,$beni);
      
        $dalOperacao->Insert($modelOperacao);
        
    }else{
        echo("Saldo Insuficiente!");
    }




?>