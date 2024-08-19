<?php
$status = isset($_GET['status']) ? $_GET['status'] : '';

$message = '';
switch ($status) {
    case 'success':
        $message = 'Seu e-mail foi enviado com sucesso!';
        break;
    case 'error_upload':
        $message = 'Erro no upload do arquivo. Por favor, tente novamente.';
        break;
    case 'error_mail':
        $message = 'Erro ao enviar o e-mail. Por favor, tente novamente.';
        break;
    case 'error_action':
        $message = 'Ação não reconhecida. Por favor, tente novamente.';
        break;
    default:
        $message = 'Ocorreu um erro desconhecido.';
        break;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Resultado do Envio</title>
</head>
<body>
    <p><?php echo htmlspecialchars($message); ?></p>
</body>
</html>