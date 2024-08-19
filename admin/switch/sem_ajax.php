<?php

	require_once('../dts/configs.php');

	
	//	$g['titulo'] 		= mysql_real_escape_string($_POST['titulo']);
	//	$g['descricao']  	= mysql_real_escape_string($_POST['descricao']);
	//	$g['endereco']  	= mysql_real_escape_string($_POST['endereco']);
	//	$g['telefone']  	= mysql_real_escape_string($_POST['telefone']);
	//	$g['cor'] 			= mysql_real_escape_string($_POST['color']);
		
		if($_FILES['favicon']['tmp_name']){
			 /**
               * 
               * @var object $readImg
               */
			$readImg = read('config_geral',"WHERE id = '1'");
			foreach($readImg as $img);
			
			$favicon =	 $_FILES['favicon'];
			$pasta = '../uploads/';	
			
			if(file_exists($pasta.$img['capa']) && !is_dir($pasta.$img['capa'])): unlink($pasta.$img['capa']); endif;
			
			//gerador de pastas
			$m = date('m');
			$y = date('y');
			if(!file_exists($pasta.'favicon')){ mkdir($pasta.'favicon',0755);}
			if(!file_exists($pasta.'favicon/'.$y)){ mkdir($pasta.'favicon/'.$y,0755);}
			if(!file_exists($pasta.'favicon/'.$y.'/'.$m)){ mkdir($pasta.'favicon/'.$y.'/'.$m,0755);}
			
			$ext 		= strrchr($favicon['name'],'.');
			$ext 		= strtolower($ext);
			$baseDir 	= 'favicon/'.$y.'/'.$m.'/';
			$capaName 	= $baseDir.'favicon'.$ext;
			
			$extePerm 	= array('image/icon','image/png');
			
			if(!in_array($favicon['type'],$extePerm)){
				echo 'Apenas imagens ICO ou PNG.';
			}else{
				$g['favicon'] = $capaName;
				uploadImage($favicon['tmp_name'], $capaName, 16, $pasta);				
			}
		}
		
		$atualiza = update('config_geral',$g,"id = '1'");
		if(!$atualiza){
			echo '<script>alert("Erro ao tentar atualizar.<br/>Tente novamente mais tarde.");</script>';
		}else{
			echo '<script>alert("Atualizado com sucesso.");</script>';
		}
		header('Location: ../dashboard.php?exe=nav/config');
		

?>