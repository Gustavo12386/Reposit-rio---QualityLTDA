<div class="box limite ger-projeto">
    <h1 class="titulo titulo-branco">Gerenciando seus projetos</h1>
    <div class="texto text-azul-normal texto-justficado">       
        <?php
        $lerPrincipal = read('principal');
       if ($lerPrincipal) {
            foreach ($lerPrincipal as $principal)
                ;
            echo '<p>' . $principal['gerProjetos'] . '</p>';
       }
        ?>
        <a href="../pag/empresa.php" class="mais titulo-branco">conheça a quality</a>
    </div>
</div><!--  BOX -->
<div class="limite">
    <div class="box novidades float-left">
        <h1 class="titulo titulo-branco">Novidades</h1>
        <div class="texto text-azul-claro">
            <ul class="slide_news">
            <?php
              $lerDestaque = read('destaque', "ORDER BY ordem ASC LIMIT 5");
              if ($lerDestaque) {
                  foreach ($lerDestaque as $destaque):
                      $i++;
                      $lerNews = read("noticias", "WHERE id = '{$destaque['idNews']}'");
                      foreach ($lerNews as $news) {
                          echo '<li>';
                          echo '<h4>'.lmWord($news['titulo'], $words = '50').'</h4>';
                          echo '<p>'.lmWord($news['texto'], $words = '85').'</p>';                         
                          echo '<a href="../pag/novidades.php?link='.urlencode($news['link']).'" class="mais titulo-branco">saiba +</a>';
                          echo '</li>';
                      }
                  endforeach;
              }
            ?>               
            </ul>

        </div>
        <div class="clear"></div>
    </div><!--  BOX -->
    <div class="box qualidade float-right">
        <h1 class="titulo titulo-branco">Qualidade Certificada</h1>
        <div class="texto text-azul-forte texto-justficado">
            <?php
          $lerPrincipal = read('principal');
          if ($lerPrincipal) {
              foreach ($lerPrincipal as $principal)
                  ;
              echo '<p class=" float-left texto-justficado">' . $principal['quaCertificada'] . '</p>';
          }
            ?>

            <img class="float-right" src="../img/quality-certificado.png" width="157" height="115" alt="Qualidade Certificado">
            <a href="../pag/qualidade.php" class="mais titulo-branco">saiba +</a>
        </div>
        <div class="clear"></div>
    </div><!--  BOX -->
</div>
