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
    <h2>Gerenciar</h2>
</div>

<div class="tabela" id="tabelanoticias">
    <table class="tab order-column row-border" width="100%" border="0" cellpadding="0" cellspacing="0">
        <thead>
        <td>#</td>
        <td>Titulo</td>
        <td>Data</td>
        <td>Ação</td>
        </thead>
        <tbody>
            <?php
            /**
             * 
             * @var object $lerNews
             */
            $lerNews = read('noticias', "ORDER BY data DESC");
            if ($lerNews) {
                foreach ($lerNews as $news):
                    $i++;
                    echo '<tr>';
                    echo '<td>' . $i . '</td>';
                    echo '<td>' . lmWord($news['titulo'], $words = '65') . '</td>';
                    echo '<td>' . date('d/m/Y',strtotime($news['data'])) . '</td>';
                    echo '<td>';
                    echo '<a href="dashboard.php?exe=nav/noticias/editar&id='.$news['id'].'" class="btn btn_small tooltip" title="Editar"><i class="ico_black ico_edit"></i></a>';
                    echo '<a href="#" id="'.$news['id'].'" class="btn btn_small tooltip delnews" title="Excluir"><i class="ico_black ico_del"></i></a>';
                    echo '</td>';
                    echo '</tr>';
                endforeach;
            }
            ?>
        </tbody>
    </table>

</div>