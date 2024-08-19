<?php
include('../admin/dts/configs.php');
include('../inc/header_html.php');
 
if (isset($_GET['link'])) {
    $link = $_GET['link'];
    $lerNoticia = read('noticias', "WHERE link = '{$link}'");

    if ($lerNoticia) {
        foreach ($lerNoticia as $new);        
    } else {
        echo "Notícia não encontrada.";
    }
} else {
    echo "Link da notícia não fornecido.";
}
if(empty($_GET['link'])){
  header("Location: ../index.php");
}
?>
<div class="col-esq2">
 <a href="#" class="logo"></a>                
  <ul class="menu">
    <li><a href="../index.php" class="<?php ativaMenu("principal") ?>"><i><img src="../img/ico-principal.png" width="24" height="24" alt="Ícone principal"></i>Principal</a></li>
    <li><a href="../pag/empresa.php" class="<?php ativaMenu("empresa") ?>"><i><img src="../img/ico-empresa.png" width="20" height="24" alt="Ícone empresa"></i>Empresa</a></li>
    <li><a href="../pag/atuacao.php" class="<?php ativaMenu("atuacao") ?>"><i><img src="../img/ico-atuacao.png" width="23" height="23" alt="Ícone atuação"></i>Atuação</a></li>
    <li><a href="../pag/portfolio.php" class="<?php ativaMenu("portfolio") ?>"><i><img src="../img/ico-portfolio.png" width="22" height="18" alt="Ícone portif4olio"></i>Portfólio</a></li>
    <li><a href="../pag/clientes.php" class="<?php ativaMenu("clientes") ?>"><i><img src="../img/ico-clientes.png" width="22" height="18" alt="Ícone clientes"></i>Clientes</a></li>
    <li><a href="../pag/qualidade.php" class="<?php ativaMenu("qualidade") ?>"><i><img src="../img/ico-qualidade.png" width="21" height="21" alt="Ícone qualidade"></i>Qualidade</a></li>
    <li><a href="../pag/fale-conosco.php" class="<?php ativaMenu("fale-conosco") ?>"><i><img src="../img/ico-fale-conosco.png" width="24" height="24" alt="Ícone conosco"></i>Fale Conosco</a></li>
  </ul>
</div>
<div class="box box7 limite novidade_single">
    <h1 class="titulo titulo-novidades titulo-branco"><?php echo lmWord($new['titulo'], $words = '60') ?></h1>
    <div class="texto text-azul-normal box-single"> 
        <div class="box_scroll">  
            <?php echo $new['texto'] ?>            
        </div>
    </div>
</div><!--  BOX -->




