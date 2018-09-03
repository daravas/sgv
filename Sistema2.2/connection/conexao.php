<?php
function connect($banco="projetodepad",$usuario="root",$senha="root",$hostname="localhost")
{
	$connect=mysql_connect($hostname,$usuario,$senha);
	if (!$connect) {
		die(trigger_error("Não foi possivel estabelecer a conexão"));
		return false;
	}else{
		$db=mysql_select_db($banco,$connect);
		if (!$db) {
			die(trigger_error("Não foi possivel selecionar o banco"));
			return false;
		}else{
			return $connect;
		}
	}

}
?>
