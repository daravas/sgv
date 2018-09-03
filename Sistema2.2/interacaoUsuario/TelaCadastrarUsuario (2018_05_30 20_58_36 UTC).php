<?php
include '../connection/conexao.php';
connect();
session_start('usuario');
if (!isset($_SESSION['usuarioId']) or $_SESSION['usuarioNiveisAcessoId']!=0 ) {
  header("Location: ../index.php");
}
if (isset($_POST['cadastrar'])) {
include 'funcoes.php';
cadastro_usuario();
}?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Usuário </title>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" media="screen"/>

    </head>

        <body>
          <!--CABEÇALHO-->
        <header>
            <!-- LOGO SUPERIOR IFBA -->
            <img src="../imagens/logoifba.png" class="img-responsive" alt="Imagem Responsiva">
            <div class="modal-header" style="background-color: #255625; color: white">
                <div class="col-md-12"><!---->
                    <h5 style="text-align: center"><a class="navbar-brand" href="../TelaPrincipalADM.php">Home</a>Sistema de Gestão de Viagens Institucionais - Cadastrar Usuário</h5></div></div>

        </header>

    <div class="container-fluid">
      <br><br><br><br>
        <div class=" col-md-8 col-md-offset-2">
            <form method="post">
              <div class="col-md-12">
                <div class="col-md-1">
                  <label for="i1" value="Nome:">Nome:   </label>
                </div>
                <div class="col-md-11">
                  <input class="form-control" type="text" id="i1" class="input-texto" value="" placeholder="name" name="campoNome">
                </div>
               </div>
               <div class="col-md-12">
                 <div class="col-md-1">
                   <br>
                 <label for="i2" value="Login:">Login: </label>
               </div>
                <div class="col-md-11">
                     <br>
                     <input class="form-control" type="text" id="i2" class="input-texto" value="" placeholder="login" name="campoLogin">
               </div>
               </div>
                <div class="col-md-6">

                  <div class="col-md-2">
                    <br>
                    <label for="i3" value="Senha:">Senha:</label>
                  </div>
                  <div class="col-md-10">
                    <br>
                    <input class="form-control" type="password" id="i3" class="input-texto" value="" placeholder="password" name="campoSenha">
                  </div>


                 </div>
                 <div class="col-md-6">
                     <div class="col-md-3">
                          <br>
                         <label for="i3" value="Senha:">Confirmar*:</label>
                     </div>

                   <div class="col-md-9">
                     <br>
                     <input class="form-control" type="password" id="i4" class="input-texto" value="" placeholder="repeat your password" name="campoConfirmacaoSenha">
                   </div>
                  </div>


</div>

           <div class="col-sm-1 col-md-offset-8">
             <br><br>
             <input type="submit" name="cadastrar" value="Cadastrar" class="btn btn-success"  >
           </div>
           <div class="col-sm-1 ">
             <br><br>
             <!--             <input type="button" value="Voltar" class="btn btn-default" onClick="history.go(-1)">
-->
             <a type="submit" value="" class="btn btn-success" href="../TelaPrincipalADM.php">Voltar</a>
           </div>

</form>

</div>


</body>
</html>
