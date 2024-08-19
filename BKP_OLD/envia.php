<?
$nome=($_POST['nome']);
$estado=($_POST['estado']);
$cidade=($_POST['cidade']);
$email=($_POST['email']);
$ddd=($_POST['ddd']);
$tel=($_POST['tel']);
$setor=($_POST['setor']);
$mensagem=($_POST['mensagem']);
$assunto .= "Quality | Contato Via Site";
$destinatario .= "quality@qualityltda.com.br";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $email \r\n";


$html .= "<html>";
$html .= "
<style>
.cur{
font-family: arial;
font-size:10pt;
color:black;
padding:3px;
}
HR {
font-family: arial;
color:black;
border: 2px black solid;
}
CENTER{
font-family: arial;
font-weight:bold;
font-size:15pt;
}
BIG{
font-family: arial;
font-weight:bold;
font-size:14pt;
}
TEXTO{
font-family: arial;
font-weight:bold;
font-size:12pt;
}
H1{
font-family: arial;
FONT-WEIGHT:BOLD;
FONT-SIZE:13PT;
MARGIN-LEFT:20PX;
MARGIN-TOP:0PX;
MARGIN-BOTTOM:-9PX
}
</style>";
$html .= "<DIV><CENTER>Quality | Contato via site </CENTER><HR><B> Nome: $nome </B><BR>";
$html .= "<TEXTO><B>Cidade: </B> $cidade </TEXTO><BR>";
$html .= "<TEXTO><B>Estado: </B> $estado </TEXTO><BR>";
$html .= "<TEXTO><B>Telefone: </B> ($ddd) $tel </TEXTO><BR>";
$html .= "<TEXTO><B>Email: </B> $email </TEXTO><BR><BR>";

$html .= "<B>Mensagem: </B><cur> $mensagem </cur><BR>";
$html .= "</DIV>";
$html .= "</html>";

if (mail($destinatario,$assunto,$html,$headers)) {
header("Location: obrigado.html");
} 
else {
echo "<font face=verdana size=3>Ocorreu um erro durante o envio do email<br><br><a href='java script:history.go(-1);'>VOLTAR</a></font>";
}
?> 
