<?php if(function_exists(myAut() || null)){ myAut(); }else{ header('Location: nav/home.php'); die;} ?>
<div class="titulo">
	<h1><i class="ico_black ico_seta_right"></i>Configurações</h1>
</div>

<?php
/**
* 
* @var object $lerConfig
*/
	$lerConfig = read('config_geral');
	foreach($lerConfig as $config);
?>

<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Gerais</a></li>
    <li><a href="#tabs-2">Servidor de e-mail</a></li>
    <li><a href="#tabs-3">Redes Sociais</a></li>
    <li><a href="#tabs-4">Analytics</a></li>
  </ul>
  <div id="tabs-1">
      <div class="load_bar">
            <div class="bar">
                100%
            </div>
        </div>
    <form name="config" method="post" enctype="multipart/form-data" action="switch/sem_ajax.php">
        <input type="text" name="titulo" placeholder="Título do site (70 caracteres)" class="input input-xxlarge" maxlength="70" value="<?php echo $config['titulo']; ?>">
        <input type="text" name="descricao" placeholder="Descrição do site (140 caracteres)" class="input input-xxlarge" maxlength="140" value="<?php echo $config['descricao']; ?>">
        <input type="text" name="endereco" placeholder="Endereço" class="input input-xlarge" value="<?php echo $config['endereco']; ?>">
        <input type="tel" name="telefone" placeholder="Telefone" class="input input-xlarge" value="<?php echo $config['telefone']; ?>"> 
        <label for="colorpicker">
        Esquema de cores
        <input type="color" list="colors" class="tooltip pikercolor" title="Cor" id="colorpicker" name="color"  value="<?php echo $config['cor']; ?>">
        <datalist id=colors>
        	<option value=#102c95>
        	<option value=#8f1419>
            <option value=#F00>
            <option value=#009966>
            <option value=#FF00FF>
            <option value=#FF6600>
            <option value=#0066CC>
            <option value=#366>
            <option value=#99F>
            <option value=#663300>
            <option value=#909>
            <option value=#9FA323>
                       
        </datalist>
        </label>
        <div class="upload_file">
            <input name="favicon" type="file" class="j_file" multiple accept="image/*" />  
            <?php if($config['favicon']){echo '<div class="favicon" style="float: left;margin: 10px 14px 0px 0px;"><img src="uploads/'.$config['favicon'].'"/></div>';} ?>          
            <div class="j_iconfalse">Selecione as imagens</div>
            <a href="#" class="j_iconsend btn tooltip" title="Selecionar favicon"><i class="ico_white ico_folder_open"></i></a>
             
        </div>
       
        
        
        
        <div class="clear"></div>
        <input type="submit" class="btn btn-success" value="Salvar" style="float:right;"> 
    </form>
  </div>
  <div id="tabs-2">
     <form name="mailserver">
        <input type="text" name="usuario" placeholder="Usuário" class="input input-xlarge" value="<?php echo $config['usuario']; ?>">
        <input type="text" name="senha" placeholder="Senha" class="input input-xlarge" value="<?php echo $config['senha']; ?>">
        <input type="text" name="porta" placeholder="Porta" class="input input-xlarge" value="<?php echo $config['porta']; ?>">
        <input type="text" name="smtp" placeholder="SMTP" class="input input-xlarge" value="<?php echo $config['smtp']; ?>">
        <div class="clear"></div>
        <input type="submit" class="btn btn-success" value="Salvar" style="float:right;"> 
    </form>
  </div>
  <div id="tabs-3">
     <form name="sociais">
        <input type="text" name="facebook" placeholder="Facebook" class="input input-xxlarge" value="<?php echo $config['facebook']; ?>">
        <input type="text" name="twitter" placeholder="Twitter" class="input input-xxlarge" value="<?php echo $config['twitter']; ?>">
        <input type="text" name="instagram" placeholder="Instagram" class="input input-xxlarge" value="<?php echo $config['instagram']; ?>">
        <input type="text" name="googleplus" placeholder="Google+" class="input input-xxlarge" value="<?php echo $config['googleplus']; ?>">
        <div class="clear"></div>
        <input type="submit" class="btn btn-success" value="Salvar" style="float:right;"> 
    </form>
  </div>
  <div id="tabs-4">
  	<form name="analytics">
    	<textarea rows="15" name="analytics" placeholder="Código Analytics" class="textarea"><?php echo $config['analytics']; ?></textarea>
    	<div class="clear"></div>
    	<input type="submit" class="btn btn-success" value="Salvar" style="float:right;"> 
    </form>
  </div>
</div>
