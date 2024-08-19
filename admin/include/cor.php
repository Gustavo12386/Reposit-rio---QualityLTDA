<?php
	$lerCor = read('config_geral');
		foreach($lerCor as $cor);
		echo'
		<style>
		#topo{
			border-bottom:19px solid '.$cor['cor'].';
		}
		.menu ul li a:hover,.menu ul li a.ativo{
			background:'.$cor['cor'].';
		}
		#rodape{
			background: '.$cor['cor'].';
		}
		.titulo h1{
			color:'.$cor['cor'].';
		}
		.upload_file .btn{
			background:'.$cor['cor'].';
		}
		.tabela table thead{
			background:'.$cor['cor'].';
		}
		</style>	
	';
