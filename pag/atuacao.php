<?php
include('../admin/dts/configs.php');
include('../inc/header_html.php');
$lerAtuacao = read('atuacao', "WHERE id = 1");
if ($lerAtuacao) {
    foreach ($lerAtuacao as $atuacao)
        ;
}
?>
<div class="col-esq2">
 <a href="#" class="logo"></a>                
  <ul class="menu">
    <li><a href="../index.php" class="<?php ativaMenu("principal") ?>"><i><img src="../img/ico-principal.png" width="24" height="24" alt="Ícone principal"></i>Principal</a></li>
    <li><a href="../pag/empresa.php" class="<?php ativaMenu("empresa") ?>"><i><img src="../img/ico-empresa.png" width="20" height="24" alt="Ícone empresa"></i>Empresa</a></li>
    <li><a href="#" class="<?php ativaMenu("atuacao") ?>"><i><img src="../img/ico-atuacao.png" width="23" height="23" alt="Ícone atuação"></i>Atuação</a></li>
    <li><a href="../pag/portfolio.php" class="<?php ativaMenu("portfolio") ?>"><i><img src="../img/ico-portfolio.png" width="22" height="18" alt="Ícone portif4olio"></i>Portfólio</a></li>
    <li><a href="../pag/clientes.php" class="<?php ativaMenu("clientes") ?>"><i><img src="../img/ico-clientes.png" width="22" height="18" alt="Ícone clientes"></i>Clientes</a></li>
    <li><a href="../pag/qualidade.php" class="<?php ativaMenu("qualidade") ?>"><i><img src="../img/ico-qualidade.png" width="21" height="21" alt="Ícone qualidade"></i>Qualidade</a></li>
    <li><a href="../pag/fale-conosco.php" class="<?php ativaMenu("fale-conosco") ?>"><i><img src="../img/ico-fale-conosco.png" width="24" height="24" alt="Ícone conosco"></i>Fale Conosco</a></li>
  </ul>
</div>
<div class="box box5 limite atuacao">
    <h1 class="titulo titulo-branco">Atuação</h1>
    <div class="texto text-azul-normal box-single"> 
        <div id="atuacao-texto" class="float-left">
            
            <?php echo $atuacao['atuacao']; ?>

        </div>



        <ul class="fotos float-left">
            <li><img src="../img/atuacao-01.jpg" alt=""></li>
            <li><img src="../img/atuacao-02.jpg" alt=""></li>
            <li><img src="../img/atuacao-03.jpg" alt=""></li>
        </ul>

        <!--<small class="imgilustra float-left">*imagens meramente ilustrativas</small>-->


        <div class="clear"></div>
    </div>

</div><!--  BOX -->


