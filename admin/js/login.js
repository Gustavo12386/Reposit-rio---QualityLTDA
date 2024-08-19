$(function(){
	//CONTROLA O LOGIN	
	$('form[name=login]').submit(function(){
		var login = $(this).serialize() + '&acao=login';
		
		$.ajax({
			url: 	'switch/login.php',
			data: 	login,
			type: 	'POST',
			success: function(resposta){
				if(resposta == 'erroempty'){
					$('.msg').empty().html('<p class="aviso">Informe seu usuário e senha.</p>').fadeIn('slow');
				}else if(resposta == 'errosenha'){
					$('.msg').empty().html('<p class="erro">Erro ao logar! Dados não conferem!</p.</p>').fadeIn('slow');
				}else if(resposta == 'sucess'){
					$('.msg').empty().html('<p class="sucesso">Login efetuado, aguarde...</p>').fadeIn('slow');
					window.setTimeout( function(){
						$(location).attr('href','dashboard.php')
					}, 1000);
				}else{
					alert('Erro no sistema');
				}
			},
			beforeSend: function(){
				$('.loginbox .esqueceu img').fadeIn('fast');
			},
			complete: function(){
				$('.loginbox .esqueceu img').fadeOut('low');
			},
			error: function(){
				alert('Erro no sistema');
			}
		});
		return false;	
	})
	
	$('form[name=relembra]').submit(function(){
		var login = $(this).serialize() + '&acao=esqueceu_senha';
		$.ajax({
			url: 	'switch/login.php',
			data: 	login,
			type: 	'POST',
			success: function(resposta){
				//alert(resposta);
				if(resposta == 'erroempty'){
					$('.msg').empty().html('<p class="aviso">Informe o e-mail.</p>').fadeIn('slow');
				}else if(resposta == 'erromail'){
					$('.msg').empty().html('<p class="aviso">Informe um e-mail válido.</p>').fadeIn('slow');
				}else if(resposta == 'sucess'){
					$('.msg').empty().html('<p class="sucesso">Você receberá sua senha no e-mail informado.</p>').fadeIn('slow');
					window.setTimeout( function(){
						$(location).attr('href','index.php')
					}, 1000);
				}else if(resposta == 'errsend'){
					$('.msg').empty().html('<p class="aviso">Erro ao tentar enviar o email. Tente mais tarde.</p>').fadeIn('slow');						
				}else{
					alert('Erro no sistema');
				}
			},
			beforeSend: function(){
				$('form img.load').fadeIn('fast');
			},
			complete: function(){
				$('form img.load').fadeOut('low');
			},
			error: function(){
				alert('Erro no sistema');
			}
		});
		return false;	
	
	});
});