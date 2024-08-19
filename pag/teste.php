<?php
include('../inc/header_html.php');
?>

<div class="box limite empresa">
    <h1 class="titulo titulo-branco">Empresa</h1>
    <div class="text-azul-normal texto-justficado box-single"> 
           
        <ul id="tabs" class="menu_int float-left menu_int_default_teste">
            <li>
                <a href="#objetivo" class="ativo">OBJETIVOS</a>
                <span></span>
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
        <div id="tab-content" class="container container_empresa float-right">
			<div id="objetivo" class="tab active">
                <p>Com sede em Salvador-Bahia e atuando desde 1990 no desenvolvimento de atividades de engenharia em empreendimentos dos mais variados portes, a Quality Engenharia e Consultoria Ltda é&nbsp;uma empresa brasileira, capacitada a elaborar estudos de viabilidade econômica, estudos e projetos básicos, projetos de detalhamento e acompanhamento de obras e montagem.</p>
            </div>
            <div id="especializacao" class="tab">
                <h2>Engenharia Elétrica</h2><ul>
<li>Projetos industriais de alta, média e baixa tensão</li>
<li>Projetos de sistemas de iluminação pública</li>
<li>Projetos comerciais e de edificações especiais</li>
<li>Projeto de subestações de alta e média tensão</li>
<li>Projeto de geração de energia eólica</li>
<li>Projetos de sistemas de geração de energia termoelétrica</li>
<li>Estudos especializados de sistemas de potência
<ul>
<li>Projetos industriais de alta, média e baixa tensão</li>
<li>Projetos de sistemas de iluminação pública</li>
<li>Projetos comerciais e de edificações especiais</li>
<li>Projeto de subestações de alta e média tensão</li>
<li>Projeto de geração de energia eólica</li>
<li>Projetos de sistemas de geração de energia termoelétrica</li>
</ul>
</li>
</ul></div>
            <div id="estrutura" class="tab">
                <p>A QUALITY possui um escritório, com sede própria, área de 250m², localizado em moderno edifício comercial, dotado de dispositivos modernos de segurança e comunicações, no bairro do STIEP em Salvador, Bahia, inserido no principal Centro comercial e financeiro da cidade.</p>
            </div>
            <div id="social" class="tab">
                <p>Oferecer serviços e produtos de qualidade ao mercado, contribuindo para a melhoria da sociedade brasileira, fortalecendo seus clientes com aplicação de tecnologias inovadoras e propiciando novas oportunidades de trabalho e desenvolvimento para os seus colaboradores.</p>
            </div>
        </div>

        <?php
      //  $lerEmpresa = read('empresa', "WHERE id = 1");
      //  if ($lerEmpresa) {
      //      foreach ($lerEmpresa as $empresa)
     //           ;
            
      //  }
        ?>

        <div class="menu_int_mobile">
            <h3 class="item_um">OBJETIVOS</h3>
            <div class="cont_mobile">
                <?php echo $empresa['objetivo']; ?>
            </div>
            <h3 class="item_dois">ESPECIALIZAÇÃO</h3>
            <div class="cont_mobile">
                <?php echo $empresa['especializacao']; ?>
            </div>
            <h3 class="item_tres">ESTRUTURA</h3>
            <div class="cont_mobile">
                <?php echo $empresa['estrutura']; ?>
            </div>
            <h3 class="item_quatro">SOCIAL</h3>
            <div class="cont_mobile">
                <?php echo $empresa['social']; ?>
            </div>
        </div>

        <div class="clear"></div>
    </div>
</div><!--  BOX -->


