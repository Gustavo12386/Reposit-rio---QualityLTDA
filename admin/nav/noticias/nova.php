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

<form name="noticia_add" method="post">
    <input type="text" placeholder="Título" class="input input-xxlarge" name="titulo" required="required" maxlength="50">
    <textarea rows="10" class="editormce" name="texto"></textarea>
    <br/>
    <div class="clear"></div>
    <input type="submit" class="btn btn-success " style="float:right;" value="Salvar">
</form>

