<?php
	ob_start();
	session_start();
	
	require_once('dts/configs.php');
	
	myAut();
	
	
	include_once('include/header.php');
	include_once('include/sidebar.php');
?>
    	
<div class="pagina">
<?php
	
	
	$exe = strip_tags(trim(($_GET['exe'])));
	if(!empty($exe)):
		if($exe == 'exit'):
			header('Location: index.php?sair=true');
		elseif(file_exists($exe.'.php')):
			require($exe.'.php');
		else:
			require('nav/404.php');	
		endif;
	else:
		header('Location: dashboard.php?exe=nav/home');
	endif;
	
?>
</div><!-- PAGINA -->

<?php
	include_once('include/footer.php');
	ob_end_flush();
?>



