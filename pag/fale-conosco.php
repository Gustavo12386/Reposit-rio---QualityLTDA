<?php
include('../admin/dts/configs.php');
include('../inc/header_html.php');
?>
<div class="col-esq2">
 <a href="#" class="logo"></a>                
  <ul class="menu">
    <li><a href="../index.php" class="<?php ativaMenu("principal") ?>"><i><img src="../img/ico-principal.png" width="24" height="24" alt="Ícone principal"></i>Principal</a></li>
    <li><a href="../pag/empresa.php" class="<?php ativaMenu("empresa") ?>"><i><img src="../img/ico-empresa.png" width="20" height="24" alt="Ícone empresa"></i>Empresa</a></li>
    <li><a href="../pag/atuacao.php" class="<?php ativaMenu("atuacao") ?>"><i><img src="../img/ico-atuacao.png" width="23" height="23" alt="Ícone atuação"></i>Atuação</a></li>
    <li><a href="../pag/portfolio.php" class="<?php ativaMenu("portfolio") ?>"><i><img src="../img/ico-portfolio.png" width="22" height="18" alt="Ícone portif4olio"></i>Portfólio</a></li>
    <li><a href="../pag/clientes.php" class="<?php ativaMenu("clientes") ?>"><i><img src="../img/ico-clientes.png" width="22" height="18" alt="Ícone clientes"></i>Clientes</a></li>
    <li><a href="../pag/qualidade.php" class="<?php ativaMenu("qualidade") ?>"><i><img src="../img/ico-qualidade.png" width="21" height="21" alt="Ícone qualidade"></i>Qualidade</a></li>
    <li><a href="#" class="<?php ativaMenu("fale-conosco") ?>"><i><img src="../img/ico-fale-conosco.png" width="24" height="24" alt="Ícone conosco"></i>Fale Conosco</a></li>
  </ul>
</div>
<div class="box box2 limite contato">  
 <h1 class="titulo titulo-branco">Fale conosco <a href="../inc/form_curriculo.php" class="btn_change envia_curriculo">Envie seu currículo</a></h1>    
    <div class="texto text-azul-normal texto-justficado box-single2">        
        <div class="box_form float-left">
            <p>Entre em contato conosco através do formulário abaixo. Teremos o maior prazer em lhe atender!</p>
            <div class="container_form">
                <form name="send_contato" method="post">

                    <input type="text" name="nome" placeholder="Nome" value="" required="required">
                    <input type="email" name="email" placeholder="E-mail" value="" required="required">
                    <input type="tel" name="tel" placeholder="Telefone" value="" required="required">                    
                    <select name="m_horario" required="required">
                        <option value="">Melhor horário de contato</option>  
                        <option value="Manhã">Manhã</option> 
                        <option value="Tarde">Tarde</option> 
                        <option value="Noite">Noite</option> 
                    </select>
                    <textarea name="msg" placeholder="Mensagem" rows="6" required="required"></textarea>
                    <div class="status float-left">                        
                    </div>
                    <input type="submit" value="Enviar" name="sendCont" class="float-right">
                </form>
                
            </div>
        </div>
        <div class="box_mapa float-right">
            <div id="mapa"></div>
            <p>
                Rua Dr. José Peroba, 275 - Sl 409, Edifício Metrópolis Empresarial<br/>
                Stiep - Salvador - Bahia - Brasil - Cep: 41.770-235<br/>
                Tel:(71) 3341-1414 
            </p>
        </div>
        <div class="clear"></div>
    </div>
</div><!--  BOX -->


