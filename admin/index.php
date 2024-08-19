<?php
ob_start();
session_start();

require_once('dts/configs.php');

if ($_GET['sair']) {
    unset($_SESSION['userlogin_cms']);
}
//print_r($_SESSION['userlogin']);
//ALTERAR LOGIN E SENHA DA SESSÃO
if ($_SESSION['userlogin_cms']) {
    $login = $_SESSION['userlogin_cms']['login'];
    $senha = $_SESSION['userlogin_cms']['senha'];
    $readAut = read('usuarios', "WHERE login = '$login' AND senha = '$senha'");
    if ($readAut) {
        header('Location: dashboard.php');
    } else {
        unset($_SESSION['userlogin_cms']);
    }
}
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>LOGIN | <?php echo SITENAME ?></title>
        <link rel="stylesheet" type="text/css" href="css/login.css">

        <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="js/login.js"></script>

    </head>

    <body>
        <div class="login">
            <img src="img/logo.png" class="logo">
            <?php
            if (!$_GET['esqueceu']) {
                ?>
                <form method="post" name="login">
                    <input name="user" type="text" placeholder="Login">
                    <input name="pass" type="password" placeholder="Senha">
                    <input type="submit" value="Entrar" name="logar" >
                    <a href="index.php?esqueceu=true" class="esqueceu">Esqueceu a senha?</a>
                    <div style="clear:both"></div>
                    <img src="img/loader.gif" class="load">
                </form>
                <?php
            } else {
                ?>
                <form method="post" name="relembra">
                    <input name="email" type="email" placeholder="E-mail">
                    <input type="submit" value="Recuperar senha" name="rec" >
                    <a href="index.php" class="esqueceu">Voltar</a>
                    <div style="clear:both"></div>
                    <img src="img/loader.gif" class="load"> 
                </form>        
                <?php
            }
            ?>
            <div style="clear:both"></div>
            <?php
            if (isset($_GET['sair'])):
                echo '<div class="msg" style="display:block"><p class="sucesso">Você deslogou com sucesso.</p></div>';
            endif;

            if (isset($_GET['restrito'])):
                echo '<div class="msg" style="display:block"><p class="erro">Acesso restrito.</p></div>';
            endif;
            ?>
            <div class="msg"></div><!--/msg-->
        </div>
    </body>
</html>
<?php
ob_end_flush();
?>