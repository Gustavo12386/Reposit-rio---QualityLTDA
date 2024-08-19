<?php
if (function_exists(myAut() || null)) {
    myAut();
} else {
    header('Location: nav/home.php');
    die;
}
?>
<div class="titulo">
    <h1><i class="ico_black ico_seta_right"></i>Principal</h1>
</div>
<div class="sub-titulo">
    <h2>Gerenciando seus projetos</h2>
</div>
<?php
/**
* 
* @var object $lerPrincipal
*/
$lerPrincipal = read('principal');
if ($lerPrincipal) {
    foreach ($lerPrincipal as $principal)
        ;
}
?>
<form name="principal_ger_projetos" method="post">
    <textarea rows="10" name="ger_proj" placeholder="Texto Gerenciando seus projetos" class="textarea" maxlength="330" onkeyup="mostrarResultado(this.value, 330, '.maxTexto strong');" required="required"><?php if($principal['gerProjetos']){ echo $principal['gerProjetos'];} ?></textarea>
    <p class="maxTexto"><strong>0</strong>/330</p>
    <br/>
    <div class="clear"></div>
    <input type="submit" class="btn btn-success " style="float:right;" value="Salvar">
</form>

