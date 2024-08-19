<?php
include('../admin/dts/configs.php');
include('../inc/header_html.php');
?>
<div class="col-esq2">
 <a href="#" class="logo"></a>                
  <ul class="menu">
    <li><a href="../index.php" class="<?php ativaMenu("principal") ?>"><i><img src="../img/ico-principal.png" width="24" height="24" alt="Ícone principal"></i>Principal</a></li>
    <li><a href="#" class="<?php ativaMenu("empresa") ?>"><i><img src="../img/ico-empresa.png" width="20" height="24" alt="Ícone empresa"></i>Empresa</a></li>
    <li><a href="../pag/atuacao.php" class="<?php ativaMenu("atuacao") ?>"><i><img src="../img/ico-atuacao.png" width="23" height="23" alt="Ícone atuação"></i>Atuação</a></li>
    <li><a href="../pag/portfolio.php" class="<?php ativaMenu("portfolio") ?>"><i><img src="../img/ico-portfolio.png" width="22" height="18" alt="Ícone portif4olio"></i>Portfólio</a></li>
    <li><a href="../pag/clientes.php" class="<?php ativaMenu("clientes") ?>"><i><img src="../img/ico-clientes.png" width="22" height="18" alt="Ícone clientes"></i>Clientes</a></li>
    <li><a href="../pag/qualidade.php" class="<?php ativaMenu("qualidade") ?>"><i><img src="../img/ico-qualidade.png" width="21" height="21" alt="Ícone qualidade"></i>Qualidade</a></li>
    <li><a href="../pag/fale-conosco.php" class="<?php ativaMenu("fale-conosco") ?>"><i><img src="../img/ico-fale-conosco.png" width="24" height="24" alt="Ícone conosco"></i>Fale Conosco</a></li>
  </ul>
</div>
<div class="box box6 limite empresa">
    <h1 class="titulo titulo-branco">Empresa</h1>
    <div class="text-azul-normal texto-justficado box-single">        
        <ul class="menu_int float-left menu_int_default">
            <li>
                <a href="#objetivo" class="ativo">OBJETIVOS</a>
                <span><?php ?></span>
            </li>
            <li>
                <a href="#especializacao">ESPECIALIZAÇÃO</a>
                <span></span>
            </li>
            <li>
                <a href="#estrutura">ESTRUTURA</a>
                <span></span>
            </li>
            <li>
                <a href="#social">SOCIAL</a>
                <span></span>
            </li>
        </ul>
        <div class="container container_empresa float-right">
            <div class="box_scroll">

                <div id="objetivo" class="div_hidden"><?php include('./empresa/objetivo.php');?></div>
                <div id="especializacao" class="div_hidden"><?php include('./empresa/especializacao.php');?></div>
                <div id="estrutura" class="div_hidden"><?php include('./empresa/estrutura.php');?></div>
                <div id="social" class="div_hidden"><?php include('./empresa/social.php');?></div>
            </div>
        </div>


        <div class="menu_int_mobile">
            <h3 class="item_um">OBJETIVOS</h3>
            <div class="cont_mobile">
                <?php include('./empresa/objetivo.php');?>
            </div>
            <h3 class="item_dois">ESPECIALIZAÇÃO</h3>
            <div class="cont_mobile">
                <?php include('./empresa/especializacao.php'); ?>
            </div>
            <h3 class="item_tres">ESTRUTURA</h3>
            <div class="cont_mobile">
                <?php include('./empresa/estrutura.php'); ?>
            </div>
            <h3 class="item_quatro">SOCIAL</h3>
            <div class="cont_mobile">
                <?php include('./empresa/social.php'); ?>
            </div>
        </div>

        <div class="clear"></div>
    </div>
</div><!--  BOX -->


