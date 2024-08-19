<?php
if (function_exists(myAut() || null)) {
    myAut();
} else {
    header('Location: nav/home.php');
    die;
}
?>
<div class="titulo">
    <h1><i class="ico_black ico_seta_right"></i>Notícias</h1>
</div>
<div class="sub-titulo">
    <h2>Nova notícia</h2>
</div>
<?php
$id = $_GET['id'];
 /**
 * 
 * @var object $lerNew
 */
$lerNew = read('noticias', "WHERE id ='$id'");
if ($lerNew) {
    foreach ($lerNew as $new)
        ;
}
?>
<form name="noticia_edit" method="post">
    <input type="text" placeholder="Título" class="input input-xxlarge" name="titulo" value="<?php if($new['titulo']){echo $new['titulo'];} ?>">
    <textarea rows="10" class="editormce" name="texto"><?php if($new['texto']){echo $new['texto'];} ?></textarea>
    <input type="hidden" name="id" value="<?php echo $new['id']; ?>">
    <br/>
    <div class="clear"></div>
    <a href="dashboard.php?exe=nav/noticias/gerenciar" class="btn">Voltar</a>
    <input type="submit" class="btn btn-success " style="float:right;" value="Salvar">
</form>

