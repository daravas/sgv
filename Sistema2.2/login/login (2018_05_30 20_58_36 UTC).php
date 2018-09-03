<?php

  if((isset($_POST['campoUsuario'])) && (isset($_POST['campoSenha']))){
    $login= $_POST['campoUsuario'];
    $senha= $_POST['campoSenha'];

    $banco="projetodepad";
    $usuario="root";
    $senha="root";
    $hostname="localhost";

    $connect=mysqli_connect($hostname,$usuario,$senha);
    $db=mysqli_select_db($connect,$banco);

    $usuario = mysqli_real_escape_string($connect, $_POST['campoUsuario']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
    $senha = mysqli_real_escape_string($connect, $_POST['campoSenha']);
    $senha = md5($senha);


    $sql=mysqli_query($connect, "select * from usuario where login_usuario='$login' and senha_usuario='$senha' and status_usuario=0 limit 1") or die(mysqli_error($connect));
    $resultado = mysqli_fetch_assoc($sql);//Busca o resultado de uma linha e o coloca numa matriz associativa
    if (isset($resultado) && ($resultado['login_usuario']==$login) && ($resultado['senha_usuario']==$senha)) {
      $_SESSION['usuarioId'] = $resultado['id_usuario'];
      $_SESSION['usuarioNome'] = $resultado['nome_usuario'];
      $_SESSION['usuarioNiveisAcessoId'] = $resultado['tipo_usuario'];
      $_SESSION['login'] = $login;
      $_SESSION['senha'] = $senha;
      switch ($_SESSION['usuarioNiveisAcessoId']) {
        case '0':
            //include 'TelaPrincipalADM.php';
            header("Location: TelaPrincipalADM.php");

            break;
       case '1':
           //include_once 'TelaPrincipalOutroUsuario.php';
           header("Location: TelaPrincipalOutroUsuario.php");

        break;
      }


    }else {
      echo "Usuário ou senha Inválido";

    }
  }else {
    echo "Preencha os campos";
  }

 ?>
