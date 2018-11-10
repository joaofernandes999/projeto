
<?php 
  session_start();
  if(!isset($_SESSION['user'])){
    header("location: login.html");
  }
?>

<html>
    <head>
        
        <meta charset="utf-8" /> 
        <title>Opecação</title>  
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
       
        <link rel="stylesheet" href="../scripts/css/bootstrap-datepicker.css">
        <script src="../scripts/js/bootstrap-datepicker.min.js"></script>
        <script src="../scripts/locales/bootstrap-datepicker.pt-BR.min.js"></script>
        
    </head>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                    <a class="nav-link" href="Home.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Opções
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="Operacao.php">Operação</a>
                        </div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#" onclick="javascript:location.href='../BLL/Cliente/logout.php'">sair<span class="sr-only">(current)</span></a>
                      </li>
                </ul>
                </div>
        </nav>
    </div>
     <body>
        <div class="container col-md-8">
            <h1>Fazer Movimentação</h1>

            <form id="frmOperacao" name="frmOperacao" method="POST" data-toggle="validator" action="../BLL/Operacao/InserirOperacao.php">

                <div class="form-group">
                     <label for="lblCLi">Benificiario</label><br>
                        <select name="cliente" class="form-control col-md-4">
                            <option>Selecione para quem deseja depositar</option>
                         </select>
                         <br>
                    <label for="lblDesc">Descrição</label><br>
                    <input class="form-control col-md-4" type="text" id="txtDesc" name="txtDesc" placeholder="Informe a descrição:" data-error="Informe a" required>
                    <br>
                    <label for="lblDesc">Valor</label><br>
                    <input class="form-control col-md-4" type="number" id="txtvalor" name="txtvalor" placeholder="Informe o valor ">
                    
                    <br>
                    <label for="lblDesc">Data:</label><br>
                    
                    <div class="input-group date" >
                            <input placeholder="Selecio a data" type="text" name="data" id="exemplo" class="form-control datepicker col-md-4" data-provide="datepicker" data-date-format="yyyy/mm/dd" data-error="Informe a" required >
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-th"></span>
                            </div>
                    </div>
                    <br>
                    <br>
                    <button type="submit" class="btn btn-dark">Depositar</button>
                   
                     
                </div>
               
            </form>
            
            
        </div> 
        <script>
            $('#exemplo').datepicker({
                format: 'yyyy/mm/dd',
                language: 'pt-BR',
                startDate: '-3d'
            });</script>
        
        <script src="../scripts/jquery.js"></script>
        <script src="../scripts/pegaCliente.js"></script>
        <scrip src="../scripts/validator.min.js"></script>
      
     </body>


</html>