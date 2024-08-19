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
    <h2>Qualidade Certificada</h2>
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
<form name="principal_qua_certificada" method="post">
    <textarea rows="10" name="qua_cert" placeholder="Texto Qualidade Certificada" class="textarea" maxlength="160" onkeyup="mostrarResultado(this.value, 160, '.maxTexto strong');" required><?php if($principal['quaCertificada']){ echo $principal['quaCertificada'];} ?></textarea>
    <p class="maxTexto"><strong>0</strong>/160</p>
    <br/>
    <div class="clear"></div>
    <input type="submit" class="btn btn-success " style="float:right;" value="Salvar">
</form>

