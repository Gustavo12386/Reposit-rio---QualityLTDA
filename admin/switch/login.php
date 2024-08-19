<?php
ob_start();
session_start();

require_once('../dts/configs.php');

//$acao = mysql_real_escape_string($_POST['acao']);

switch ($acao){
	case'login':
	//	$user = mysql_real_escape_string($_POST['user']);
	//	$pass = mysql_real_escape_string($_POST['pass']);
		
		if(!$user || !$pass){
			echo 'erroempty';
		}else{	
			$senha = md5($pass);
			/**
            * 
            * @var object $readUser
            */
			$readUser = read('usuarios', "WHERE login = '$user' AND senha = '$senha'");
			if($readUser){
				foreach($readUser as $userlogin);
				$_SESSION['userlogin_cms'] = $userlogin;
				echo 'sucess';
			}else{
				echo 'errosenha';
			}
		}
	break;
	
	case 'esqueceu_senha';
		//$email = mysql_real_escape_string($_POST['email']);
		if(!$email){
			echo 'erroempty';
		}else{
			/**
            * 
            * @var object $readUser
            */
			$readUser = read('usuarios', "WHERE email = '$email'");
			if($readUser){
				foreach($readUser as $user);
				$msg = '
				<table width="600" border="0" cellspacing="1" cellpadding="0">
			  <tr>
				<td width="149"><font face="Helvetica Neue, Helvetica, Arial, sans-serif">Senha:</font></td>
				<td width="448"><font face="Helvetica Neue, Helvetica, Arial, sans-serif"><strong>'.$user['code'].'</strong></font></td>
			  </tr>
			  
			</table>
				';
				require_once("../dts/mail/class.phpmailer.php");
				require_once("../dts/mail/class.smtp.php");
				$assunto = "[Recuperação de senha] - Quality Engenharia";
				$usuario = 'qualitydigital2014@gmail.com';
				$senha = 'qualitydigital@2014';
				//$replica = "contato@quanticacomunicacao.com.br";
				/*********************************** A PARTIR DAQUI NAO ALTERAR ************************************/
				
				$mail = new PHPMailer(); // create a new object
				$mail->IsSMTP(); // enable SMTP
				$mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
				$mail->SMTPAuth = true; // authentication enabled
				$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
				$mail->Host = "smtp.gmail.com";
				$mail->Port = 465; // or 587
				$mail->IsHTML(true);
				$mail->Username = $usuario;
				$mail->Password = $senha;
				$mail->SetFrom($usuario, "Quality Engenharia");
				$mail->CharSet = 'UTF-8';
				$mail->Subject = $assunto;
				$mail->Body = $msg;
				$mail->AddAddress($email);
				//$mail->AddReplyTo($replica);
			
				if(!@$mail->Send()) {
				 echo 'errosend';
				  //echo 'Erro: ' . $mail->ErrorInfo;
				} else {
				 echo 'sucess';
				}
			}
			/*if($readUser){
			
				$msg = '
	<table width="600" border="0" cellspacing="1" cellpadding="0">
  <tr>
    <td width="149"><font face="Helvetica Neue, Helvetica, Arial, sans-serif">Nome</font></td>
    <td width="448"><font face="Helvetica Neue, Helvetica, Arial, sans-serif"><strong>Teste</strong></font></td>
  </tr>
  
</table>
	';
			
				require_once("mail/class.phpmailer.php");
				require_once("mail/class.smtp.php");
				
				$assunto = "[Recuperação de senha] - Quality Engenharia";
				
				$mail = new PHPMailer();
			
				$mail->IsMail();  // uso o mail normal do PHP
				$mail->CharSet = 'UTF-8';
			
				$mail->From		   = 'marketing@sertenge.com.br'; //$rmt;
				$mail->FromName    = 'Bruno';
				
				$mail->AddAddress('brunotrinchao@gmail.com');
				
				
				$mail->AddReplyTo($rmt, "RE: $assunto");
			
				$mail->Subject  = $assunto;
				$mail->Body     = $msg;
				$mail->IsHTML(true);
			
				if(!@$mail->Send()) {
				 echo 'errosend';
				  //echo 'Erro: ' . $mail->ErrorInfo;
				} else {
				 echo 'sucess';
				}
			
			}*/
		}
	break;
	
	default:
		echo 'Error';
}

ob_end_flush();
?>