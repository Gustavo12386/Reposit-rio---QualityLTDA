<?php
if (function_exists(myAut() || null)) {
    myAut();
} else {
    header('Location: nav/home.php');
    die;
}
?>
<div class="titulo">
    <h1><i class="ico_black ico_seta_right"></i>Empresa</h1>
</div>
<div class="sub-titulo">
    <h2>Especializacao</h2>
</div>
<?php
/**
 * 
 * @var object $lerEmpresa
 */
$lerEmpresa = read('empresa', "WHERE id ='1'");
if ($lerEmpresa) {
    foreach ($lerEmpresa as $empresa)
        ;
}
?>
<form name="empresa" method="post">
    <textarea rows="10" class="editormce" name="especializacao"><?php echo $empresa['especializacao'] ?> </textarea>
    <input type="hidden" value="especializacao" name="tipo">
    <br/>
    <div class="clear"></div>
    <input type="submit" class="btn btn-success " style="float:right;" value="Salvar">
</form>

