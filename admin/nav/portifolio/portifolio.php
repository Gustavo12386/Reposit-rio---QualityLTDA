<?php
if (function_exists(myAut() || null)) {
    myAut();
} else {
    header('Location: nav/home.php');
    die;
}
?>
<div class="titulo">
    <h1><i class="ico_black ico_seta_right"></i>Portifólio</h1>
</div>
<?php
/**
* 
* @var object $lerEmpresa
*/
$lerEmpresa = read('portifolio', "WHERE id ='1'");
if ($lerEmpresa) {
    foreach ($lerEmpresa as $empresa)
        ;
}
?>
<form name="portifolio" method="post">
    <textarea rows="10" class="editormce" name="portifolio"><?php echo $empresa['portifolio'] ?> </textarea>
    <br/>
    <div class="clear"></div>
    <input type="submit" class="btn btn-success " style="float:right;" value="Salvar">
</form>

