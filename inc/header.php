<?php
include_once 'admin/dts/configs.php';
include_once 'header_html.php';
?>

    <body>
        <!--<div class="debug"></div>-->
        <div id="geral" class="limite">
            <div class="barmobile">
                <a href="principal" class="logo"></a>
                <div class="menu_anchor">
                    MENU
                    <a href="#" class="toggle_menu_mobile"></a>
                </div>
                <ul class="menumobile">
                    <li><a href="#" class="ativo"><i><img src="img/ico-principal.png" width="24" height="24" alt="Ícone principal"></i>Principal</a></li>
                    <li><a href="../pag/empresa.php"><i><img src="img/ico-empresa.png" width="20" height="24" alt="Ícone empresa"></i>Empresa</a></li>
                    <li><a href="../pag/atuacao.php"><i><img src="img/ico-atuacao.png" width="23" height="23" alt="Ícone atuação"></i>Atuação</a></li>
                    <li><a href="../pag/portfolio.php"><i><img src="img/ico-portfolio.png" width="22" height="18" alt="Ícone portifolio"></i>Portfólio</a></li>
                    <li><a href="../pag/clientes.php"><i><img src="img/ico-clientes.png" width="22" height="18" alt="Ícone clientes"></i>Clientes</a></li>
                    <li><a href="../pag/qualidade.php"><i><img src="img/ico-qualidade.png" width="21" height="21" alt="Ícone qualidade"></i>Qualidade</a></li>
                    <li><a href="../pag/fale-conosco.php"><i><img src="img/ico-fale-conosco.png" width="24" height="24" alt="Ícone conosco"></i>Fale Conosco</a></li>
                </ul>

            </div>
            <div class="col-esq">
                <a href="#" class="logo"></a>                
                <ul class="menu">
                    <li><a href="#" class="<?php ativaMenu("principal") ?>"><i><img src="img/ico-principal.png" width="24" height="24" alt="Ícone principal"></i>Principal</a></li>
                    <li><a href="../pag/empresa.php" class="<?php ativaMenu("empresa") ?>"><i><img src="img/ico-empresa.png" width="20" height="24" alt="Ícone empresa"></i>Empresa</a></li>
                    <li><a href="../pag/atuacao.php" class="<?php ativaMenu("atuacao") ?>"><i><img src="img/ico-atuacao.png" width="23" height="23" alt="Ícone atuação"></i>Atuação</a></li>
                    <li><a href="../pag/portfolio.php" class="<?php ativaMenu("portfolio") ?>"><i><img src="img/ico-portfolio.png" width="22" height="18" alt="Ícone portif4olio"></i>Portfólio</a></li>
                    <li><a href="../pag/clientes.php" class="<?php ativaMenu("clientes") ?>"><i><img src="img/ico-clientes.png" width="22" height="18" alt="Ícone clientes"></i>Clientes</a></li>
                    <li><a href="../pag/qualidade.php" class="<?php ativaMenu("qualidade") ?>"><i><img src="img/ico-qualidade.png" width="21" height="21" alt="Ícone qualidade"></i>Qualidade</a></li>
                    <li><a href="../pag/fale-conosco.php" class="<?php ativaMenu("fale-conosco") ?>"><i><img src="img/ico-fale-conosco.png" width="24" height="24" alt="Ícone conosco"></i>Fale Conosco</a></li>
                </ul>
            </div><!-- COL ESQUERCA -->