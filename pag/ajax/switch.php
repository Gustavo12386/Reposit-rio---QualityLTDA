<?php

require_once('mail/PHPMailerAutoload.php');
$acao = $_POST['acao'];

$usuario = 'quality@qualityltda.com.br';
$senha = 'qlT2020@';
$replica = "quality@qualityltda.com.br";

switch ($acao) {
    case 'contato':
        $p['nome'] = $_POST['nome'];
        $p['email'] = $_POST['email'];
        $p['tel'] = $_POST['tel'];
        $p['hora'] = $_POST['m_horario'];
        $p['msg'] = $_POST['msg'];        

        $msg = '
	<table width="600" border="0" cellspacing="1" cellpadding="0">
  <tr>
    <td width="149"><font face="Helvetica Neue, Helvetica, Arial, sans-serif">Nome</font></td>
    <td width="448"><font face="Helvetica Neue, Helvetica, Arial, sans-serif"><strong>' . $p['nome'] . '</strong></font></td>
  </tr> 
  <tr>
    <td><font face="Helvetica Neue, Helvetica, Arial, sans-serif">E-mail</font></td>
    <td><font face="Helvetica Neue, Helvetica, Arial, sans-serif"><strong>' . $p['email'] . '</strong></font></td>
  </tr>
  <tr>
    <td height="20"><font face="Helvetica Neue, Helvetica, Arial, sans-serif">Telefone</font></td>
    <td><font face="Helvetica Neue, Helvetica, Arial, sans-serif"><strong>' . $p['tel'] . '</strong></font></td>
  </tr> 
  <tr>
    <td height="20"><font face="Helvetica Neue, Helvetica, Arial, sans-serif">Melhor contato</font></td>
    <td><font face="Helvetica Neue, Helvetica, Arial, sans-serif"><strong>' . $p['hora'] . '</strong></font></td>
  </tr>
  <tr>
    <td height="20"><font face="Helvetica Neue, Helvetica, Arial, sans-serif">Mensagem</font></td>
    <td><font face="Helvetica Neue, Helvetica, Arial, sans-serif"><strong>' . $p['msg'] . '</strong></font></td>
  </tr>
  <tr>
    <td height="20"><font face="Helvetica Neue, Helvetica, Arial, sans-serif">Enviado em</font></td>
    <td><font face="Helvetica Neue, Helvetica, Arial, sans-serif"><strong>' . date("d/m/Y h:i:s") . '</strong></font></td>
  </tr>
</table>
	';

        $assunto = '[Contato Quality]';


        /*         * ********************************* A PARTIR DAQUI NAO ALTERAR *********************************** */

        $mail = new PHPMailer(); // create a new object
        $mail->IsSMTP(); // enable SMTP
        $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
        $mail->SMTPAuth = true; // authentication enabled
        $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
        $mail->Host = "smtps.uhserver.com";
        $mail->Port = 465; // or 587
        $mail->IsHTML(true);
        $mail->Username = $usuario;
        $mail->Password = $senha;
        $mail->SetFrom($usuario);

        $mail->Subject = $assunto;
        $mail->Body = $msg;
        $mail->AddAddress('quality@qualityltda.com.br');
        $mail->AddReplyTo($replica);
        
        if (!$mail->Send()) {
          echo "Erro: " . $mail->ErrorInfo;
        } else {
            echo "ok";
        }



        break;
    case 'curriculo':
        $p['nome'] = $_POST['nome'];
        $p['email'] = $_POST['email'];
        $p['tel'] = $_POST['tel'];
        $p['msg '] = $_POST['msg'];
        $arquivo = $_FILES['arq_curriculo'];        

        $msg = '
	<table width="600" border="0" cellspacing="1" cellpadding="0">
  <tr>
    <td width="149"><font face="Helvetica Neue, Helvetica, Arial, sans-serif">Nome</font></td>
    <td width="448"><font face="Helvetica Neue, Helvetica, Arial, sans-serif"><strong>' . $p['nome'] . '</strong></font></td>
  </tr> 
  <tr>
    <td><font face="Helvetica Neue, Helvetica, Arial, sans-serif">E-mail</font></td>
    <td><font face="Helvetica Neue, Helvetica, Arial, sans-serif"><strong>' . $p['email'] . '</strong></font></td>
  </tr>
  <tr>
    <td height="20"><font face="Helvetica Neue, Helvetica, Arial, sans-serif">Telefone</font></td>
    <td><font face="Helvetica Neue, Helvetica, Arial, sans-serif"><strong>' . $p['tel'] . '</strong></font></td>
  </tr> 
  <tr>
    <td height="20"><font face="Helvetica Neue, Helvetica, Arial, sans-serif">Anexo</font></td>
    <td><font face="Helvetica Neue, Helvetica, Arial, sans-serif"><strong>' . $arquivo['tel'] . '</strong></font></td>
  </tr> 
  <tr>
    <td height="20"><font face="Helvetica Neue, Helvetica, Arial, sans-serif">Mensagem</font></td>
    <td><font face="Helvetica Neue, Helvetica, Arial, sans-serif"><strong>' . $p['msg'] . '</strong></font></td>
  </tr>
  <tr>
    <td height="20"><font face="Helvetica Neue, Helvetica, Arial, sans-serif">Enviado em</font></td>
    <td><font face="Helvetica Neue, Helvetica, Arial, sans-serif"><strong>' . date("d/m/Y h:i:s") . '</strong></font></td>
  </tr>
</table>
	';
        
        $assunto = '[Contato Quality - Currículo]';


        /*         * ********************************* A PARTIR DAQUI NAO ALTERAR *********************************** */

        $mail = new PHPMailer(); // create a new object
        $mail->IsSMTP(); // enable SMTP
        $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
        $mail->SMTPAuth = true; // authentication enabled
        $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
        $mail->Host = "smtps.uhserver.com";
        $mail->Port = 465; // or 587
        $mail->IsHTML(true);
        $mail->Username = $usuario;
        $mail->Password = $senha;
        $mail->SetFrom($usuario);

        $mail->Subject = $assunto;
        $mail->Body = $msg;
        $mail->AddAddress('quality@qualityltda.com.br');
        //$mail->AddReplyTo($replica);
        $mail->AddAttachment($arquivo['tmp_name'], $arquivo['name']); 
        if (!$mail->Send()) {
            echo "Erro: " . $mail->ErrorInfo;
        } else {
            echo "ok";
        }

        
        /*if ($_FILES['arq_curriculo']['tmp_name']) {
            print_r($_FILES['arq_curriculo']);
        }*/

        break;

    default:
        break;
}
?>