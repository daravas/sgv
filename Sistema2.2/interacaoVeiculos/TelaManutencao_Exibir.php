<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" media="screen"/>

        <title>Manutenção de Veículos  </title>

      </head>

<body>
  <!--CABEÇALHO-->
<header>
    <!-- LOGO SUPERIOR IFBA -->
    <img src="../imagens/logoifba.png" class="img-responsive" alt="Imagem Responsiva">
    <div class="modal-header" style="background-color: #255625; color: white">
        <div class="col-md-12"><!----><h5 style="text-align: center">
                <a class="navbar-brand" href="../TelaPrincipalADM.php">Home</a>Sistema de Gestão de Viagens Institucionais - Manutenções registradas</h5>
                </div></div>
</header>

  <!-- PRIMEIRO BLOCO -->
  <div class="container-fluid">
  <div class="col-md-10 col-md-offset-1">
    <div class="row">
      <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
          <div class="col-md-8">
                    <br><br>
                    <div class="input-group">
                    <input type="text" class="form-control"name="pesquisa" placeholder="Search">
                        <div class="input-group-btn">
                          <button class="btn btn-default" type="submit" name="pesquisar">
                          <i class="glyphicon glyphicon-search"></i>
                          </button>
                        </div>
                    </div>
                    <br><br>
          </div>

          <div class="col-md-1 pull-left"></div>
          <div class="col-md-1 pull-left"></div>

                  <div class="col-md-1 pull-left">
                    <br><br>
                    <a href="../interacaoVeiculos/TelaManutencao_Cadastrar.php" type="submit" class="btn btn-success">Novo</a>
                    <br><br>
                  </div>

          <div class="col-md-1 pull-right"></div>

                  <div class="col-md-1 pull-right">
                    <br><br>
                    <a type="submit" class="btn btn-success" href="../TelaPrincipalADM.php">Voltar</a>
                    <br><br>
                  </div>
      </form>
    </div>

  <div class="row">
    <table  cellspacing="1%" padding="5%">
    <table class="table">
    <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Veículo</th>
      <th scope="col">Data</th>
      <th scope="col">Especificação</th>
      <th scope="col">Valor</th>
    </tr>
    </thead></div>
    </table>
    </table>
  </div>

  </div>
  </div>
