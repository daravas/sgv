<?php
        $usuario = array(
        "usuario");

        session_start($usuario);
	session_destroy();
	unset(
    $_SESSION['usuarioId'] ,
    $_SESSION['usuarioNome'] ,
    $_SESSION['usuarioNiveisAcessoId'],
    $_SESSION['login'],
    $_SESSION['senha']
	);

	header("Location: ../index.php");
?>
