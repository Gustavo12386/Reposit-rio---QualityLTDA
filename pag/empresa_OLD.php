<div class="box limite empresa">
    <h1 class="titulo titulo-branco">Empresa</h1>
    <div class="text-azul-normal texto-justficado box-single">        
        <ul class="menu_int float-left menu_int_default">
            <li>
                <a href="objetivo" class="ativo">OBJETIVOS</a>
                <span></span>
            </li>
            <li>
                <a href="especializacao">ESPECIALIZAÇÃO</a>
                <span></span>
            </li>
            <li>
                <a href="estrutura">ESTRUTURA</a>
                <span></span>
            </li>
            <li>
                <a href="social">SOCIAL</a>
                <span></span>
            </li>
        </ul>
        <div class="container container_empresa float-right">

        </div>

        <?php
        $lerEmpresa = read('empresa', "WHERE id = 1");
        if ($lerEmpresa) {
            foreach ($lerEmpresa as $empresa)
                ;
            
        }
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


