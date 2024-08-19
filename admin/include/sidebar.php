<?php if (function_exists(myAut)) {
    myAut();
} else {
    header('Location: nav/dashboard.php');
    die;
} ?>
<?php
$usuarioUser = $_SESSION['userlogin_cms']['login'];
$senhaUser = $_SESSION['userlogin_cms']['senha'];
$lerPerfil = read('usuarios', "WHERE login = '$usuarioUser' AND senha = '$senhaUser'");
if ($lerPerfil) {
    foreach ($lerPerfil as $perfil)
        ;
}
?>
<div class="sidebar">
    <div class="admin">
       <!-- <span>
            <img src="img/user_default.jpg">
        </span>-->
        <p>Logado como:<br/><strong><?php echo $perfil['nome']; ?></strong></p>
        <ul class="box_config">
            <li><a href="dashboard.php?exe=nav/perfil" class="btn btn_small tooltip" title="Perfil"><i class="ico_black ico_user"></i></a></li>
            <!--<li><a href="dashboard.php?exe=nav/config" class="btn btn_small tooltip" title="Configurações"><i class="ico_black ico_config"></i></a></li>-->
            <li><a href="index.php?sair=true" class="btn btn_small tooltip" title="Sair"><i class="ico_black ico_sair"></i></a></li>
        </ul><!-- BOX CONFIG -->
    </div>
    <div class="menu">
        <ul>
            <!--<li><a href="dashboard.php?exe=nav/home" class="ativo">Dashboard</a></li>-->
            <li class="parent"><a href="#">Principal<i class="ico_black ico_seta_down mark_menu"></i></a>
                <ul class="sub-menu">
                    <li><a href="dashboard.php?exe=nav/principal/gerenciando-seus-projetos">Gerenciando seus projetos</a></li>
                    <li><a href="dashboard.php?exe=nav/principal/qualidade-certificada">Qualidade certificada</a></li>
                </ul>
            </li>
            <li class="parent"><a href="#">Notícias<i class="ico_black ico_seta_down mark_menu"></i></a>
                <ul class="sub-menu">
                    <li><a href="dashboard.php?exe=nav/noticias/nova">Nova notícia</a></li>
                    <li><a href="dashboard.php?exe=nav/noticias/gerenciar">Gerenciar</a></li> 
                    <li><a href="dashboard.php?exe=nav/noticias/destaques">Destaques</a></li>  
                </ul>
            </li>
            <li class="parent"><a href="#">Empresa<i class="ico_black ico_seta_down mark_menu"></i></a>
                <ul class="sub-menu">
                    <li><a href="dashboard.php?exe=nav/empresa/objetivos">Objetivos</a></li>
                    <li><a href="dashboard.php?exe=nav/empresa/especializacao">Especialização</a></li>
                    <li><a href="dashboard.php?exe=nav/empresa/estrutura">Estrutura</a></li>
                    <li><a href="dashboard.php?exe=nav/empresa/social">Social</a></li>
                </ul>
            </li>
            <li><a href="dashboard.php?exe=nav/atuacao/atuacao">Atuação</a></li>
            <li><a href="dashboard.php?exe=nav/portifolio/portifolio">Portifólio</a></li>
            <li class="parent"><a href="#">Clientes<i class="ico_black ico_seta_down mark_menu"></i></a>
                <ul class="sub-menu">
                    <li><a href="dashboard.php?exe=nav/clientes/industrial">Industrial</a></li>
                    <li><a href="dashboard.php?exe=nav/clientes/estatal">Estatal</a></li>
                    <li><a href="dashboard.php?exe=nav/clientes/setor-privado">Setor Privado</a></li>
                    <li><a href="dashboard.php?exe=nav/clientes/construcao">Construção</a></li>
                    <li><a href="dashboard.php?exe=nav/clientes/administracao">Administração</a></li>
                    <li><a href="dashboard.php?exe=nav/clientes/outros">Outros</a></li>
                </ul>
            </li>
            <li><a href="dashboard.php?exe=nav/qualidade/qualidade">Qualidade</a></li>
        </ul>
    </div><!-- MENU -->
</div><!-- SIDEBAR -->