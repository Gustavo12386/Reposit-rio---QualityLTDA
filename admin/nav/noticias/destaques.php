<?php
if (function_exists(myAut() || null)) {
    myAut();
} else {
    header('Location: nav/home.php');
    die;
}
?>
<div class="titulo">
    <h1><i class="ico_black ico_seta_right"></i>Notícias</h1>
</div>
<div class="sub-titulo">
    <h2>Destaques</h2>
</div>
<p>Selecione a notícia que dejesa para o destaque <i>(limíte de 5 notícias)</i>.</p>
<form name="destaqueadd" method="post">
    <select class="select select-xlarge" name="newsdestaque">
        <?php
        /**
         * 
         * @var object $lerNewNews
         */
        $lerNewNews = read('noticias', "WHERE id NOT IN (SELECT idNews FROM destaque)");
        if (!$lerNewNews) {
            echo '<option value="">Sem notícia cadastrada</option>';
        } else {
            echo '<option value="">Selecione uma notícia</option>';
            foreach ($lerNewNews as $newsNew) {
                echo '<option value="'.$newsNew['id'].'">' . $newsNew['titulo'] . '</option>';
            }
        }
        ?>
    </select>
    <input type="submit" class="btn btn-success" value="Adicionar">
</form>
<br/>
<hr>
<br/>
<div class="tabela">
    <table id="tabeladestaque" class="tab order-column row-border" width="100%" border="0" cellpadding="0" cellspacing="0">
        <thead>
        <td>#</td>
        <td>Titulo</td>
        <td>Data</td>
        <td>Ação</td>
        </thead>
        <tbody class="sortable">
            <?php
             /**
             * 
             * @var object $lerDestaque
             * 
             */
            $lerDestaque = read('destaque', "ORDER BY ordem ASC LIMIT 5");
            if ($lerDestaque) {
                foreach ($lerDestaque as $destaque):
                    $i++;
                    $lerNews = read("noticias", "WHERE id = '$destaque[idNews]'");
                     /**
                     * 
                     * @var object $lerNews
                     * 
                     */
                    foreach ($lerNews as $news) {
                        echo '<tr class="ui-state-default" id="id-'.$destaque['id'].'">';
                        echo '<td>' . $i . '</td>';
                        echo '<td>' . lmWord($news['titulo'], $words = '65') . '</td>';
                        echo '<td>' . date('d/m/Y', strtotime($news['data'])) . '</td>';
                        echo '<td>';
                        echo '<a href="#" id="'.$news['id'].'" class="btn btn_small tooltip" title="Remover destaque"><i class="ico_black ico_del"></i></a>';
                        echo '</td>';
                        echo '</tr>';
                    }
                    endforeach;
            }
            ?>
        </tbody>
    </table>

</div>