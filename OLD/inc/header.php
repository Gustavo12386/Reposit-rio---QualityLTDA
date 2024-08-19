<?php
include_once 'admin/dts/configs.php';
?>
<!DOCTYPE html>

<html class="no-js" lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Quality | Engenharia e Consultoria</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100' rel='stylesheet' type='text/css'>
        <link href="css/geral.css" rel="stylesheet" type="text/css"/>
        <link href="css/jquery.jscrollpane.css" rel="stylesheet" type="text/css"/>

        <link rel="stylesheet" media="screen and (max-width:785px)" href="css/mobile.css">
        <link rel="stylesheet" media="screen and (min-width:786px)" href="css/default.css">
        <link rel="stylesheet" media="screen and (min-width: 1280px)" href="css/full.css"> 
        
        
        <script src="js/modernizr.custom.js" type="text/javascript"></script>
        <script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
        <script src="js/jquery-ui.min.js" type="text/javascript"></script>
        <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
        <script src="js/jquery.jscrollpane.min.js" type="text/javascript"></script>
        <script src="js/jquery.mousewheel.js" type="text/javascript"></script>
        <script src="js/jquery.form.min.js" type="text/javascript"></script>
        <script src="js/jquery.cycle.all.js" type="text/javascript"></script>
        <script src="js/mobile.js" type="text/javascript"></script>
        <script src="js/script.js" type="text/javascript"></script>

    </head>
    <body>
        <!--<div class="debug"></div>-->
        <div id="geral" class="limite">
            <div class="barmobile">
                <a href="#" class="logo"></a>
                <div class="menu_anchor">
                    MENU
                    <a href="#" class="toggle_menu_mobile"></a>
                </div>
                <ul class="menumobile">
                    <li><a href="principal" class="ativo"><i><img src="img/ico-principal.png" width="24" height="24" alt="Ícone principal"></i>Principal</a></li>
                    <li><a href="empresa"><i><img src="img/ico-empresa.png" width="24" height="24" alt="Ícone empresa"></i>Empresa</a></li>
                    <li><a href="atuacao"><i><img src="img/ico-atuacao.png" width="24" height="24" alt="Ícone atuação"></i>Atuação</a></li>
                    <li><a href="portifolio"><i><img src="img/ico-portfolio.png" width="24" height="24" alt="Ícone portifolio"></i>Portifólio</a></li>
                    <li><a href="clientes"><i><img src="img/ico-clientes.png" width="24" height="24" alt="Ícone clientes"></i>Clientes</a></li>
                    <li><a href="qualidade"><i><img src="img/ico-qualidade.png" width="24" height="24" alt="Ícone qualidade"></i>Qualidade</a></li>
                    <li><a href="fale-conosco"><i><img src="img/ico-fale-conosco.png" width="24" height="24" alt="Ícone conosco"></i>Fale Conosco</a></li>
                </ul>

            </div>
            <div class="col-esq">
                <a href="#" class="logo"></a>                
                <ul class="menu">
                    <li><a href="principal" class="<?php ativaMenu("principal") ?>"><i><img src="img/ico-principal.png" width="24" height="24" alt="Ícone principal"></i>Principal</a></li>
                    <li><a href="empresa" class="<?php ativaMenu("empresa") ?>"><i><img src="img/ico-empresa.png" width="24" height="24" alt="Ícone empresa"></i>Empresa</a></li>
                    <li><a href="atuacao" class="<?php ativaMenu("atuacao") ?>"><i><img src="img/ico-atuacao.png" width="24" height="24" alt="Ícone atuação"></i>Atuação</a></li>
                    <li><a href="portifolio" class="<?php ativaMenu("portifolio") ?>"><i><img src="img/ico-portfolio.png" width="24" height="24" alt="Ícone portifolio"></i>Portifólio</a></li>
                    <li><a href="clientes" class="<?php ativaMenu("clientes") ?>"><i><img src="img/ico-clientes.png" width="24" height="24" alt="Ícone clientes"></i>Clientes</a></li>
                    <li><a href="qualidade" class="<?php ativaMenu("qualidade") ?>"><i><img src="img/ico-qualidade.png" width="24" height="24" alt="Ícone qualidade"></i>Qualidade</a></li>
                    <li><a href="fale-conosco" class="<?php ativaMenu("fale-conosco") ?>"><i><img src="img/ico-fale-conosco.png" width="24" height="24" alt="Ícone conosco"></i>Fale Conosco</a></li>
                </ul>
            </div><!-- COL ESQUERCA -->