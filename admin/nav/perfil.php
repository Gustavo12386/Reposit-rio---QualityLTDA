<?php if (function_exists(myAut() || null)) {
    myAut();
} else {
    header('Location: nav/home.php');
    die;
} ?>
<div class="titulo">
    <h1><i class="ico_black ico_seta_right"></i>Perfil</h1>
</div>
<?php
$usuarioUser = $_SESSION['userlogin_cms']['login'];
$senhaUser = $_SESSION['userlogin_cms']['senha'];
/**
* 
* @var object $lerPerfil
*/
$lerPerfil = read('usuarios', "WHERE login = '$usuarioUser' AND senha = '$senhaUser'");
if ($lerPerfil) {
    foreach ($lerPerfil as $perfil)
        ;
}
?>

<form name="perfil" method="post">
    <div class="clear"></div>
    <input type="text" placeholder="Nome" name="nome" class="input input-xlarger" value="<?php echo $perfil['nome'] ?>">
    <input type="email" placeholder="E-mail" name="email" class="input input-xlarger" value="<?php echo $perfil['email'] ?>">
    <input type="text" placeholder="Login" name="login" class="input input-large" value="<?php echo $perfil['login'] ?>">
    <input type="password" placeholder="Senha" name="senha" class="input input-large" value="">
    <input type="password" placeholder="Repita a senha" name="re_senha" class="input input-large" value="">
    <div class="clear"></div>
    <input type="submit" class="btn btn-success" value="Salvar" style="float:right;" value=""> 
</form>