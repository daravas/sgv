<?php  include 'connection/conexao.php';
connect();
$usuario = array(
    "usuario");

session_start($usuario);
if (isset($_POST['logar'])) {
  include 'login/login.php';
} ?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="screen"/>
    <title>Sistema de Viagens Institucionais</title>
 
  </head>
  <body>
      
      <img src="imagens/logoifba.png" class="img-responsive" alt="Imagem Responsiva">
       <div class="modal-header" style="background-color: #255625; color: white">
             <div class="col-md-12"><!----><h5 style="text-align: center">Sistema de Gestão de Viagens Institucionais</h5>
                 </div></div>
    <br>
    <br>

<div class="container">
 <div class="col-md-4">
   <img src="imagens/ifba-logo-irece2.png" class="img-responsive" alt="Imagem Responsiva">

 </div>
  <div class="col-md-4 ">
  <form  class="form-signin" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" >
    <br>
    <br>
    <br>
    <br>
    <input type="text" name="campoUsuario" class="form-control" placeholder="Login" required autofocus>
    <br>

    <input type="password" class="form-control" name="campoSenha" placeholder="Senha" required>

    <br>
    <div class="col-md-6 col-md-offset-3">
      <center>
      <input type="submit"  name="logar" class="btn btn-md btn-success btn-block" value="Entrar">

    </div>
    </form>

    <br>

</div>
</div>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script type="text/javascript" src="js/bootstrap.js"></script>
  </body>
</html>
