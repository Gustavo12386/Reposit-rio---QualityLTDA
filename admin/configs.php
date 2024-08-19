<?php
//DEFINE BANCO DEDADOS
define('HOST','dbmy0048.whservidor.com');
define('USER','qualityltd');
define('PASS','Site2024@');
define('DBSA','qualityltd');

//BASE DO SITE
define('BASE','http://qualityltda.com.br/');
define('IMAGEW','700px');

//CONECTA NO BANCO
$conn = mysql_connect(HOST, USER, PASS) or die ('Erro ao conectar: '.mysql_error());
$dbsa = mysql_select_db(DBSA) or die ('Erro ao selecionar banco: '.mysql_error());


//INCLUI FUNÇÕES DO PRO PHP
require_once('functions.php');

function myAut(){
	if($_SESSION['userlogin_cms']){
		$id 			= $_SESSION['userlogin_cms']['id'];
		$login 			= $_SESSION['userlogin_cms']['login'];
		$senha 			= $_SESSION['userlogin_cms']['senha'];			
		$readAutUser 	= read('usuarios', "WHERE id = '$id' AND login = '$login' AND senha = '$senha'");
		if(!$readAutUser){
			unset($_SESSION['userlogin_cms']);
			header('Location: index.php?restrito=true');
		}			
	}else{
		header('Location: index.php');
	}	
}

//MEUS DADOS
 /**
 * 
 * @var object $config_readGeral
 */
$config_readGeral = read('config_geral');
if($config_readGeral){
	foreach($config_readGeral as $geral);
	define('SITENAME',$geral['titulo']);
	define('SITEDESC',$geral['descricao']);
	define('ENDERECO',$geral['endereco']);
	define('TELEFONE',$geral['telefone']);
}else{
	define('SITENAME','null');
	define('SITEDESC','null');
	define('ENDERECO','null');
	define('TELEFONE','null');	
}



//DEFINE O SERVIDOR DE E-MAIL
/**
 * 
 * @var object $config_readMailServer
 */
$config_readMailServer = read('config_geral');
if($config_readMailServer){
	foreach($config_readMailServer as $config_mailserver);
	define('MAILUSER',$config_mailserver['usuario']);
	define('MAILPASS',$config_mailserver['senha']);
	define('MAILPORT',$config_mailserver['porta']);
	define('MAILHOST',$config_mailserver['smtp']);
}else{
	define('MAILUSER','null');
	define('MAILPASS','null');
	define('MAILPORT','null');
	define('MAILHOST','null');
}

