<?php
include '../connection/conexao.php';
connect();
session_start('usuario');
if (!isset($_SESSION['usuarioId']) or $_SESSION['usuarioNiveisAcessoId']!=0 ) {
  header("Location: ../index.php");
}
if (isset($_POST['editar'])) {
include 'funcoes.php';
editar_usuario();
}
$id_usuario=$_GET['id'];
$sql=mysql_query("select * from usuario where id_usuario=$id_usuario ");
$resultado=mysql_fetch_assoc($sql);
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" media="screen"/>

        <title>Alterar Usuário </title>
      </head>

        <body>
          <!--CABEÇALHO-->
        <header>
            <!-- LOGO SUPERIOR IFBA -->
            <img src="../imagens/ifba-logo-alterarCadastroUsuario_1.png" alt="" height="10%" width="100%" border-width="15px">
        </header>
       
        <form class="" action="<?php echo $_SERVER['PHP_SELF'],'?id='.$resultado['id_usuario'];?>" method="post">
          <div class="m">
                <div><label for="i1" value="Nome:">Nome:   </label>
                    <input type="text" id="i1" class="input-texto" value="<?php echo $resultado['nome_usuario']; ?>" onclick="this.value=''" name="campoNome">
                </div>

                <div><label for="i2" value="Login:">Login: </label>
                    <input type="text" id="i2" class="input-texto" value="<?php echo $resultado['login_usuario']; ?>" onclick="this.value=''" name="campoLogin">
                </div>

                <div><label for="i3" value="Senha:">Senha:</label>
                    <input type="password" id="i3" class="input-texto" value="" onclick="this.value=''" name="campoSenha">
                </div>

                <div><label for="i3" value="Senha:">Senha:</label>
                    <input type="password" id="i4" class="input-texto" value="" onclick="this.value=''" placeholder="password" name="campoConfirmacaoSenha">
                </div>
                </div>


          <div></div>
            <span id="w">
                <input type="submit" id="input-button1" name="editar" value="Editar" class="bot"  ></span>
                <input type="button" value="Voltar" class="bot" onClick="history.go(-1)">

              </form>

           <div class="di">
                <a class="d" href="index.php">Sair</a>
           </div>
</body>
</html>
