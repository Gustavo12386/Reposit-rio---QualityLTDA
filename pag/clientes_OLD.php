<div class="box limite clientes">
    <h1 class="titulo titulo-branco">Clientes</h1>
    <div class="text-azul-normal texto-justficado box-single">        
        <ul class="menu_int float-left menu_int_default">
            <li>
                <a href="../clientes/industrial.php" class="ativo">INDUSTRIAL</a>
                <span></span>
            </li>
            <li>
                <a href="../clientes/estatal.php">ESTATAL</a>
                <span></span>
            </li>
            <li>
                <a href="../clientes/setor-privado.php">SETOR PRIVADO</a>
                <span></span>
            </li>
            <li>
                <a href="../clientes/construcao.php">CONSTRUÇÃO</a>
                <span></span>
            </li>
            <li>
                <a href="../clientes/administracao.php">ADMINISTRAÇÃO</a>
                <span></span>
            </li>
            <li>
                <a href="../clientes/outros.php">OUTROS</a>
                <span></span>
            </li>
        </ul>
        <div class="container container_clientes">

        </div>

        <?php
        $lerClientes = read('clientes', "WHERE id = 1");
        if ($lerClientes) {
            foreach ($lerClientes as $clientes)
                ;
            
        }
        ?>

        <div class="menu_int_mobile">
            <h3 class="item_um">INDUSTRIAL</h3>
            <div class="cont_mobile">
                <?php echo $clientes['industrial']; ?>
            </div>
            <h3 class="item_dois">ESTATAL</h3>
            <div class="cont_mobile">
                <?php echo $clientes['estatal']; ?>
            </div>
            <h3 class="item_tres">SETOR PRIVADO</h3>
            <div class="cont_mobile">
                <?php echo $clientes['setorprivado']; ?>
            </div>
            <h3 class="item_quatro">CONSTRUÇÃO</h3>
            <div class="cont_mobile">
                <?php echo $clientes['construcao']; ?>
            </div>
            <h3 class="item_cinco">ADMINISTRAÇÃO</h3>
            <div class="cont_mobile">
                <?php echo $clientes['administracao']; ?>
            </div>
            <h3 class="item_seis">OUTROS</h3>
            <div class="cont_mobile">
                <?php echo $clientes['outros']; ?>
            </div>
        </div>

        <div class="clear"></div>
    </div>
</div><!--  BOX -->


