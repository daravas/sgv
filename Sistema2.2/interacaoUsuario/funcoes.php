<?php
function cadastro_usuario()
{
  /*verificamos se existe o índice cpf dentro de $_POST e caso exista, criamos um novo índice em $lista_tarefas*/
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
        $sql=mysql_query("select * from usuario where login_usuario='$login' and status_usuario=0") or die(mysql_error());
        $resultado=mysql_fetch_assoc($sql);
        $totalresultados=mysql_num_rows($sql);
        if (($senha==$csenha)) {
        if ($totalresultados!=1) {
        mysql_query("insert into usuario (nome_usuario,senha_usuario,login_usuario,tipo_usuario,status_usuario) values ('$nome','$senha','$login',1,0)") or die(mysql_error());

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
        alert('As senhas informadas não conferem.')
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

          $sql= mysql_query("update usuario set nome_usuario='$nome',senha_usuario='$senha',login_usuario='$login' where id_usuario=$id") or die(mysql_error());

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
       alert('Dados do usuário alterados com sucesso!')
         location.href='TelaUsuarios_Exibir.php';
       </script>";
     }

 }

 function excluir_usuario()
 {
   $id=$_GET['id'];
   $sql=  mysql_query("update usuario set status_usuario=1 where id_usuario=$id") or die(mysql_error());


   if ($sql) {
     echo "
     <script>
     alert('Usuário excluído com sucesso.')
       location.href='TelaUsuarios_Exibir.php';
     </script>";
   }else{
     echo "
     <script>
     alert('Não foi possível excluir usuário.')
       location.href='TelaUsuarios_Exibir.php';
     </script>";
   }
 }
 ?>
