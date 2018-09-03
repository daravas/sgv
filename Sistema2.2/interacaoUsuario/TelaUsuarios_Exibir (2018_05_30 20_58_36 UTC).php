<?php
include '../connection/conexao.php';
connect();
session_start('usuario');
if (!isset($_SESSION['usuarioId']) or $_SESSION['usuarioNiveisAcessoId']!=0 ) {
  header("Location: ../index.php");
}
$sql=mysql_query("select * from usuario inner join tipo_usuario on tipo_usuario=id_tipo_usuario where status_usuario=0 ");

if (isset($_POST['pesquisa'])) {
    $pesquisa=$_POST['pesquisa'];

  $sql=mysql_query("select * from usuario inner join tipo_usuario on tipo_usuario=id_tipo_usuario where status_usuario=0 and nome_usuario LIKE '%$pesquisa%' or status_usuario=0 and login_usuario LIKE '%$pesquisa%'") or die(mysql_error());;
}
if (isset($_POST['exclui'])) {
 include 'funcoes.php';
 excluir_usuario();
}
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" media="screen"/>

        <title>Usuários Cadastrados  </title>

      </head>

<body>
  <!--CABEÇALHO-->
<header>
    <!-- LOGO SUPERIOR IFBA -->
    <img src="../imagens/logoifba.png" class="img-responsive" alt="Imagem Responsiva">
    <div class="modal-header" style="background-color: #255625; color: white">
        <div class="col-md-12"><!----><h5 style="text-align: center">
                <a class="navbar-brand" href="../TelaPrincipalADM.php">Home</a>Sistema de Gestão de Viagens Institucionais - Usuários cadastrados</h5>
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
          <a href="TelaCadastrarUsuario.php" type="submit" class="btn btn-success">Novo</a>
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
      <th scope="col">Nome</th>
      <th scope="col">Login</th>
      <th scope="col">Nivel de Acesso</th>
    </tr>
    </thead></div>
    <?php
    $x=0;
    while ($resultado=mysql_fetch_assoc($sql)) {
    $x++;  ?>
    <tbody>
    <tr>
      <th scope="row"><?php echo $x; ?></th>
      <td><?php echo $resultado['nome_usuario']; ?></td> <!--Onde os dados serão listados-->
      <td><?php echo $resultado['login_usuario']; ?></td>
      <td><?php echo $resultado['nome_tipo_usuario']; ?></td>
      <td>
       <form class="" action="<?php echo $_SERVER['PHP_SELF'],'?id='.$resultado['id_usuario'];?>" method="post">
          <a href="TelaAlterarUsuario.php?id=<?php echo $resultado['id_usuario']; ?>" class="btn btn-default" role="submit" aria-pressed="false">Alterar</a>
          <input class="btn btn-default" type="submit" name="exclui" value="Excluir">
        </form>

     </td>

    </tr>

    </tbody>
    <?php } ?>
    </table>
    </table>
  </div>


  </div>
  </div>

</body>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</html>
