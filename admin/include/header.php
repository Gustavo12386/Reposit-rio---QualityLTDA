<?php if(function_exists(myAut)){ myAut(); }else{ header('Location: nav/home.php'); die;} ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Painel de controle | <?php echo SITENAME ?></title>
<link rel="stylesheet" type="text/css" href="css/geral.css">
<link rel="stylesheet" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/botoes.css">
<link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css" />
<link rel="stylesheet" type="text/css" href="css/elementos.css">

<link rel="stylesheet" type="text/css" href="css/paginas/perfil.css">

<!-- carrega esquema de cores -->
<?php
	echo '<pre class="pre">';
		print_r ($_SESSION['userlogin_cms']);
	echo '</pre>';


	include_once('include/cor.php');
?>


<script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="js/jquery.form.js" type="text/javascript"></script>
<script src="js/jquery-ui.js" type="text/javascript"></script>
<script src="js/jquery.dataTables.js" type="text/javascript"></script>
<script src="js/tinymce/tinymce.min.js" type="text/javascript"></script>
<script src="js/plugin.js" type="text/javascript"></script>
<script src="js/default.js" type="text/javascript"></script>
<script src="js/controller.js" type="text/javascript"></script>
</head>

<body>
	<?php
		include_once('include/dialog.php');
	?>
	<div id="topo">
    	<div class="topo_meio">
    	<img src="img/logo.png" class="logo">        
        <span id=tempo></span>
         
        </div><!-- TOPO MEIO -->        
    </div><!-- TOPO -->
    <div id="content">