<?php
include('../admin/dts/configs.php');
include('../inc/header_html.php');
$lerQualidade = read('qualidade', "WHERE id = 1");
if ($lerQualidade) {
    foreach ($lerQualidade as $qualidade)
      ;
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
    <li><a href="#" class="<?php ativaMenu("qualidade") ?>"><i><img src="../img/ico-qualidade.png" width="21" height="21" alt="Ícone qualidade"></i>Qualidade</a></li>
    <li><a href="../pag/fale-conosco.php" class="<?php ativaMenu("fale-conosco") ?>"><i><img src="../img/ico-fale-conosco.png" width="24" height="24" alt="Ícone conosco"></i>Fale Conosco</a></li>
  </ul>
</div>
<div class="box limite">
    <h1 class="titulo titulo-branco">Qualidade</h1>
    <div class="texto text-azul-normal">        
        <div id="qualiade-texto" class="">
        <h3>Certificação ISO 9001: versão 2015</h3>  
        </div>  
        <p class="paragrafo1">A QUALITY mantém um sistema de qualidade dentro dos requisitos da norma ISO 9001, versão 2015, comprovado através
        do Bureau Veritas e reconhecido pelo INMETRO para o escopo: PROJETOS E CONSULTORIA NA ÁREA DE ENGENHARIA.    
        </p>
        <br>
        <div id="qualiade-texto" class="">
        <h3>Politica de Qualidade</h3>  
        </div>  
        <p class="paragrafo2">Elaborar projetos e prestar serviços de consultoria de forma inovadora e sempre buscando a melhoria da qualidade
        visando atender a satisfação dos nossos clientes e colaboradores.    
        </p>
        <br>
        <img src="../img/certificado.jpg" alt="Certificado de Qualidade Quality" class="certificado-qualidade">
        <div class="clear"></div>
    </div>
</div><!--  BOX -->


