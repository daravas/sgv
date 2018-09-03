<?php

$usuario = array(
    "usuario");

session_start($usuario);
if (!isset($_SESSION['usuarioId']) or $_SESSION['usuarioNiveisAcessoId']!=1 ) {
  header("Location: ../index.php");
} ?>
<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
       <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="screen"/>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">-->
  
      <title>Principal</title>

    </head>
    <body>

         <img src="imagens/logoifba.png" class="img-responsive" alt="Imagem Responsiva">
         <div class="modal-header" style="background-color: #255625; color: white">
             <div class="col-md-12"><!----><h5 style="text-align: center; padding: -10px"><a class="navbar-brand" href="login/logoff.php">Sair</a>Sistema de Gestão de Viagens Institucionais</h5>
                 </div></div>

         <br>
         <br>
         <br>
         <br>
      

     <div class="container">
      <div class="col-md-2">
        <img src="imagens/ifba-logo-irece2.png" class="img-responsive" alt="Imagem Responsiva">

      </div>
         
         <div class="col-md-2"></div>
         
       <div class="col-md-10 ">
         <br>
         <br>
         <div class="row">
            <div class="col-md-3">
                <div class="btn-group">
                 
             <div  class="dropdown">
                 <input type="image" style="cursor: pointer" src="imagens/viagens1.png" class="img-responsive" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><br>
                <a class="dropdown-item" style="color:#000000; cursor: pointer" href="#">Agendadas</a><br><br>
                <a class="dropdown-item" style="color:#000000;" href="#">Registrar nova</a><br><br>
              </div>
              </div></div>
            </div>
            
            
           <div class="col-md-3">
               <div class="btn-group">
             <div class="dropdown">
             <input type="image" src="imagens/veiculos1.png" style="cursor: pointer" class="img-responsive" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" width="169%">
             <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><br>
       
                 <a class="dropdown-item"style="color:#000000;" href="interacaoVeiculos/TelaVeiculos_Cadastrar.php">Novo</a><br><br>
                 <a class="dropdown-item" style="color:#000000;" href="interacaoVeiculos/TelaVeiculos_Exibir.php">Cadastrados</a><br><br>
               <div class="dropdown-divider"></div>
         
               <a class="dropdown-item" style="color:#000000;" href="interacaoVeiculos/TelaAbastecimento_Exibir.php">Abastecimento</a><br><br>
               <a class="dropdown-item" style="color:#000000;" href="interacaoVeiculos/TelaManutencao_Exibir.php">Manutenção</a><br>
               <div class="dropdown-divider"></div>
               
             </div>
             </div></div>
           </div>
             
             
             
           <div class="col-md-3">
               <div class="btn-group">
             <div  class="dropdown">
             <input type="image" src="imagens/motorista1.png" style="cursor: pointer" class="img-responsive" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" width="160%">
             <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><br>
               <a class="dropdown-item" style="color:#000000;" href="#">Novo</a><br><br>
               <a class="dropdown-item" style="color:#000000;" href="#">Cadastrados</a><br><br>
               <div class="dropdown-divider"></div>
               <a class="dropdown-item" style="color:#000000;"href="#">Horários</a><br><br>
               <a class="dropdown-item" style="color:#000000;"href="#">Diárias</a><br><br>
               
             </div>
             </div></div>
           </div>
             
             
             
           <div class="col-md-3">
               <div class="btn-group">
             <div  class="dropdown">
                 <input type="image" src="imagens/relatorios1.png" style="cursor: pointer" class="img-responsive"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" width="171%">
             <div class="dropdown-menu" style="color:#000000;" aria-labelledby="dropdownMenuButton"><br>
               <a class="dropdown-item" style="color:#000000;" href="#">Relatório de Horários Mensais do Motorista</a><br><br>
               <a class="dropdown-item" style="color:#000000;"href="#">Relatório de Viagens Mensais Agendadas</a><br><br>
               <a class="dropdown-item" style="color:#000000;" href="#">Relatório de Viagens Mensais Realizadas</a><br><br>
               <a class="dropdown-item" style="color:#000000;" href="#">Relatório de Status de Veículos</a><br><br>
             </div>
             </div></div>
           </div>

       </div>
       <br><br><br><br><br><br><br>
       <div class="row">
         <!--<div class="col-md-2 col-md-offset-10">
             <a href="login/logoff.php" class="btn btn-light" style="padding-right: 40px; padding-left: 40px; font-size: 13pt">Sair</a>
         </div>-->
       </div>
       <br><br><br>
     </div>
     </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    </body>
</html>
