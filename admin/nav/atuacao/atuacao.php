<?php
include_once './admin/dts/configs.php';
if (function_exists(myAut() || null)) {
    myAut();
  
} else {
    header('Location: nav/home.php');
    die;
}
?>
<div class="titulo">
    <h1><i class="ico_black ico_seta_right"></i>Atuação</h1>
</div>

<?php
 /**
 * 
 * @var object $lerEmpresa
 */
$lerEmpresa = read('atuacao', "WHERE id ='1'");
if ($lerEmpresa || null) {
    foreach ($lerEmpresa as $empresa)
        ;
}
?>
<form name="atuacao" method="post">
    <textarea rows="10" class="editormce" name="atuacao"><?php echo $empresa['atuacao'] ?> </textarea>
    <br/>
    <div class="clear"></div>
    <input type="submit" class="btn btn-success " style="float:right;" value="Salvar">
</form>


