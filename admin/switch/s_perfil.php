<?php
ob_start();
session_start();

require_once('../dts/configs.php');

//$acao = mysql_real_escape_string($_POST['acao']);

switch ($acao){
	
	case'perfil':
	//	$senha 	= mysql_real_escape_string($_POST['senha']);
	
	
	//	$p['nome'] 		= mysql_real_escape_string($_POST['nome']);
	//	$p['email'] 	= mysql_real_escape_string($_POST['email']);
	//	$p['login'] 	= mysql_real_escape_string($_POST['login']);
		
		if($senha != ''){
	//		$p['code'] 	= mysql_real_escape_string($_POST['senha']);
			$p['senha'] 		= md5($_POST['senha']);
		}
		$id = $_SESSION['userlogin_cms']['id'];
		$grava = update('usuarios',$p,"id = '$id'");
		if($grava){
			echo 'Perfil atualizado com sucesso.';
		}else{
			echo 'Erro ao atualizar.';
		}
		
	break;
	
	
	default:
		echo 'Error';
}

ob_end_flush();
?>