<?php
ob_start();
session_start();

require_once('../dts/configs.php');

//$acao = mysql_real_escape_string($_POST['acao']);

switch ($acao){
	
	case'serv_email':
	//	$s['usuario'] 	= mysql_real_escape_string($_POST['usuario']);
	//	$s['senha'] 	= mysql_real_escape_string($_POST['senha']);
	//	$s['porta'] 	= mysql_real_escape_string($_POST['porta']);
	//	$s['smtp']		= mysql_real_escape_string($_POST['smtp']);
		
		$grava = update('config_geral',$s,"id = '1'");
		if($grava){
			echo 'Servidor de e-mail atualizado com sucesso.';
		}else{
			echo 'Erro ao atualizar.';
		}
		
	break;
	
	case'redes_sociais':
	//	$r['facebook'] 	= mysql_real_escape_string($_POST['facebook']);
	//	$r['twitter'] 	= mysql_real_escape_string($_POST['twitter']);
	//	$r['instagram'] 	= mysql_real_escape_string($_POST['instagram']);
	//	$r['googleplus'] = mysql_real_escape_string($_POST['googleplus']);
		
		$grava = update('config_geral',$r,"id = '1'");
		if($grava){
			echo 'Redes sociais atualizadas com sucesso.';
		}else{
			echo 'Erro ao atualizar.';
		}
		
	break;
		
	case'analytics':
	//	$a['analytics'] 	= mysql_real_escape_string($_POST['analytics']);
		$grava = update('config_geral',$a,"id = '1'");
		if($grava){
			echo 'Analytics atualizado com sucesso.';
		}else{
			echo 'Erro ao atualizar.';
		}
		
	break;	
	
	default:
		echo 'Error';
}

ob_end_flush();
?>