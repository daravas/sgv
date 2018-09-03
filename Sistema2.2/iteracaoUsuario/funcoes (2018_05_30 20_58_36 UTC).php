<?php

        
function cadastro_usuario()
{
  /*verificamos se existe o índice cpf dentro de $_POST e caso exista, criamos um novo índice em $lista_tarefas*/
    $banco="projetodepad";
        $usuario="root";
        $senha="";
        $hostname="localhost";

        $connect=mysqli_connect($hostname,$usuario,$senha);
        
  if(isset($_POST['campoNome']) && $_POST['campoNome']!=''){
    $nome= $_POST['campoNome'];
    if(isset($_POST['campoLogin']) && $_POST['campoLogin'] !=''){
      $login= $_POST['campoLogin'];
    }
    if(isset($_POST['campoSenha'])&& $_POST['campoSenha'] !=''){
      $senha=md5($_POST['campoSenha']);
    }

    if(isset($_POST['campoConfirmacaoSenha'])&& $_POST['campoConfirmacaoSenha'] !=''){
          $csenha= md5($_POST['campoConfirmacaoSenha']);
        }
        
        $db=mysqli_select_db($connect,$banco);
    
        $sql=mysqli_query($connect,"select * from usuario where login_usuario='$login' and status_usuario=0") or die(mysqli_error());
        $resultado=mysqli_fetch_assoc($sql);
        $totalresultados=mysqli_num_rows($sql);
        if (($senha==$csenha)) {
        if ($totalresultados!=1) {
        mysqli_query($connect,"insert into usuario (nome_usuario,senha_usuario,login_usuario,tipo_usuario,status_usuario) values ('$nome','$senha','$login',1,0)") or die(mysql_error());

        }else {
          echo "
          <script>
          alert('Login já cadastrado no sistema.')
            location.href='TelaCadastrarUsuario.php';
          </script>";
        }

      }else {
        echo "
        <script>
        alert('Senhas não conferem!')
          location.href='TelaCadastrarUsuario.php';
        </script>";

      }
    }
    if ($sql) {
      echo "
      <script>
      alert('Usuário cadastrado com sucesso!')
        location.href='TelaCadastrarUsuario.php';
      </script>";
    }
  }

 function editar_usuario()
 {
    
     $banco="projetodepad";
        $usuario="root";
        $senha="";
        $hostname="localhost";

        $connect=mysqli_connect($hostname,$usuario,$senha);
        $db=mysqli_select_db($connect,$banco);
        
 $id=$_GET['id'];
   if(isset($_POST['campoNome']) && $_POST['campoNome']!=''){
     $nome= $_POST['campoNome'];
     if(isset($_POST['campoLogin']) && $_POST['campoLogin'] !=''){
       $login= $_POST['campoLogin'];
     }
     if(isset($_POST['campoSenha'])&& $_POST['campoSenha'] !=''){
       $senha=md5($_POST['campoSenha']);
     }

     if(isset($_POST['campoConfirmacaoSenha'])&& $_POST['campoConfirmacaoSenha'] !=''){
           $csenha= md5($_POST['campoConfirmacaoSenha']);
         }
         if (($senha==$csenha)) {

          $sql= mysqli_query($connect,"update usuario set nome_usuario='$nome',senha_usuario='$senha',login_usuario='$login' where id_usuario=$id") or die(mysqli_error($connect));

       }else {
         echo "
         <script>
         alert('Senhas não conferem!')
           location.href='TelaAlterarUsuario.php?id=$id';
         </script>";

       }
     }
     if ($sql) {
       echo "
       <script>
       alert('Dados usuário alerados com sucesso!')
         location.href='TelaUsuarios_Exibir.php';
       </script>";
     }

 }

 function excluir_usuario()
 {
     
        $banco="projetodepad";
        $usuario="root";
        $senha="";
        $hostname="localhost";

        $connect=mysqli_connect($hostname,$usuario,$senha);
        $db=mysqli_select_db($connect,$banco);
        
   $id=$_GET['id'];
   $sql=  mysqli_query($connect,"update usuario set status_usuario=1 where id_usuario=$id") or die(mysqli_error());


   if ($sql) {
     echo "
     <script>
     alert('Usuario excluido com sucesso')
       location.href='TelaUsuarios_Exibir.php';
     </script>";
   }else{
     echo "
     <script>
     alert('Não foi possivel excluir usuario')
       location.href='TelaUsuarios_Exibir.php';
     </script>";
   }
 }
 ?>
