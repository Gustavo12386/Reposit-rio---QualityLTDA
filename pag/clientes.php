<?php
include('../admin/dts/configs.php');
include('../inc/header_html.php');   
?>
<div class="col-esq2">
 <a href="#" class="logo"></a>                
  <ul class="menu">
    <li><a href="../index.php" class="<?php ativaMenu("principal") ?>"><i><img src="../img/ico-principal.png" width="24" height="24" alt="Ícone principal"></i>Principal</a></li>
    <li><a href="../pag/empresa.php" class="<?php ativaMenu("empresa") ?>"><i><img src="../img/ico-empresa.png" width="20" height="24" alt="Ícone empresa"></i>Empresa</a></li>
    <li><a href="../pag/atuacao.php" class="<?php ativaMenu("atuacao") ?>"><i><img src="../img/ico-atuacao.png" width="23" height="23" alt="Ícone atuação"></i>Atuação</a></li>
    <li><a href="../pag/portfolio.php" class="<?php ativaMenu("portfolio") ?>"><i><img src="../img/ico-portfolio.png" width="22" height="18" alt="Ícone portif4olio"></i>Portfólio</a></li>
    <li><a href="#" class="<?php ativaMenu("clientes") ?>"><i><img src="../img/ico-clientes.png" width="22" height="18" alt="Ícone clientes"></i>Clientes</a></li>
    <li><a href="../pag/qualidade.php" class="<?php ativaMenu("qualidade") ?>"><i><img src="../img/ico-qualidade.png" width="21" height="21" alt="Ícone qualidade"></i>Qualidade</a></li>
    <li><a href="../pag/fale-conosco.php" class="<?php ativaMenu("fale-conosco") ?>"><i><img src="../img/ico-fale-conosco.png" width="24" height="24" alt="Ícone conosco"></i>Fale Conosco</a></li>
  </ul>
</div>
<div class="box box3 limite clientes">
    <h1 class="titulo titulo-branco">Clientes</h1>
    <div class="text-azul-normal texto-justficado box-single">        
        <ul class="menu_int float-left menu_int_default">
            <li>
                <a href="#industrial" class="ativo">INDUSTRIAL</a>
                <span></span>
            </li>
            <li>
                <a href="#estatal" class="ativo">ESTATAL</a>
                <span></span>
            </li>
            <li>
                <a href="#setor-privado">SETOR PRIVADO</a>
                <span></span>
            </li>
            <li>
                <a href="#construcao">CONSTRUÇÃO</a>
                <span></span>
            </li>
            <li>
                <a href="#administracao">ADM. PÚBLICA</a>
                <span></span>
            </li>
            <li>
                <a href="#outros">OUTROS</a>
                <span></span>
            </li>
        </ul>
        <div class="container container_clientes">
            <div class="box_scroll">

                <div id="industrial" class="div_hidden"><?php include('./clientes/industrial.php'); ?></div>
                <div id="estatal" class="div_hidden"><?php include('./clientes/estatal.php');?></div>
                <div id="setor-privado" class="div_hidden"><?php include('./clientes/setor-privado.php');?></div>
                <div id="construcao" class="div_hidden"><?php include('./clientes/construcao.php');?></div>
                <div id="administracao" class="div_hidden"><?php include('./clientes/administracao.php');?></div>
                <div id="outros" class="div_hidden"><?php include('./clientes/outros.php'); ?></div>
            </div>
        </div>

        

        <div class="menu_int_mobile">
            <h3 class="item_um">INDUSTRIAL</h3>
            <div class="cont_mobile">
                <?php include('./clientes/industrial.php'); ?>
            </div>
            <h3 class="item_dois">ESTATAL</h3>
            <div class="cont_mobile">
                <?php include('./clientes/estatal.php'); ?>
            </div>
            <h3 class="item_tres">SETOR PRIVADO</h3>
            <div class="cont_mobile">
                <?php include('./clientes/setor-privado.php'); ?>
            </div>
            <h3 class="item_quatro">CONSTRUÇÃO</h3>
            <div class="cont_mobile">
                <?php include('./clientes/construcao.php'); ?>
            </div>
            <h3 class="item_cinco">ADM. PÚBLICA</h3>
            <div class="cont_mobile">
                <?php include('./clientes/administracao.php'); ?>
            </div>
            <h3 class="item_seis">OUTROS</h3>
            <div class="cont_mobile">
                <?php include('./clientes/outros.php'); ?>
            </div>
        </div>

        <div class="clear"></div>
    </div>
</div><!--  BOX -->


