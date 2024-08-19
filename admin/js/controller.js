/* FUNCÇÃO BASE PARA ENVIO VIA AJAX */
function sendAjax(objeto, acao, url, refresh) {
    var dados = $(objeto).serialize() + '&acao=' + acao;

    $.ajax({
        data: dados,
        url: url,
        type: "POST",
        beforeSend: function() {
            $('.dialog').fadeIn(500, function() {
                $('.loadsistem').fadeIn(500);
            });
        },
        success: function(retorna) {
            $('.loadsistem').fadeOut(500, function() {
                $('.dialog').fadeOut(500, function() {
                    alert(retorna);
                    if (refresh != null) {
                        window.location.reload();
                    }
                });
            });
        }
    });
}

$(function() {
    /* SWITCHS */
    var perfil = 'switch/s_perfil.php';
    var config = 'switch/s_config.php';
    var conteudo = 'switch/s_conteudo.php';

    /* PERFIL */
    /*------- salvar perfil --------*/
    $('form[name=perfil]').submit(function() {
        var senha = $('input[name=senha]', this).val();
        var re_senha = $('input[name=re_senha]', this).val();
        if (senha != re_senha) {
            alert('As senhas não conferem.');
        } else {
            sendAjax(this, 'perfil', perfil)
        }
        return false;
    });


    /* CONFIGURAÇÕES */
    /*------- selecionar favicon --------*/
    $('.j_iconsend').click(function() {
        $('.j_file').click().change(function() {
            $('.j_iconfalse').text($(this).val().replace('C:\\fakepath\\', ""));
        });
        return false;
    });

    /*------- Servidor de e-mail --------*/
    $('form[name=mailserver]').submit(function() {
        sendAjax(this, 'serv_email', config)
        return false;
    });

    /*------- Redes sociais --------*/
    $('form[name=sociais]').submit(function() {
        sendAjax(this, 'redes_sociais', config)
        return false;
    });


    /*------- Analiticas --------*/
    $('form[name=analytics]').submit(function() {
        sendAjax(this, 'analytics', config)
        return false;
    });

    /* SIDEBAR */
    /*------- esquema de cores --------*/

    /*$('#colorpicker').click().change(function() {
     var cor = $(this).val();
     alert(cor);
     return false;
     });*/


    /* PRINCIPAL */
    $('form[name=principal_ger_projetos]').submit(function(e) {
        e.preventDefault();
        sendAjax(this, 'principal_ger_projetos', conteudo, null);
    });

    $('form[name=principal_qua_certificada]').submit(function(e) {
        e.preventDefault();
        sendAjax(this, 'principal_qua_cert', conteudo, null);
    });
    /* EMPRESA */
    $('form[name=empresa]').submit(function(e) {
        e.preventDefault();
        tinyMCE.triggerSave();
        var tipo = $(this).find('input[name=tipo]').val();
        sendAjax(this, tipo, conteudo, null);
    });
    /* ATUAÇÃO */
    $('form[name=atuacao]').submit(function(e) {
        e.preventDefault();
        tinyMCE.triggerSave();
        sendAjax(this, 'atuacao', conteudo, null);
    });
    /* QUALIDADE */
    $('form[name=qualidade]').submit(function(e) {
        e.preventDefault();
        tinyMCE.triggerSave();
        sendAjax(this, 'qualidade', conteudo, null);
    });
    /* PORTIFÓLIO */
    $('form[name=portifolio]').submit(function(e) {
        e.preventDefault();
        tinyMCE.triggerSave();
        sendAjax(this, 'portifolio', conteudo, null);
    });
    /* CLIENTES */
    $('form[name=clientes]').submit(function(e) {
        e.preventDefault();
        tinyMCE.triggerSave();
        var tipo = $(this).find('input[name=tipo]').val();
        sendAjax(this, tipo, conteudo, null);
    });

    /* NOTICIAS */
    $('form[name=noticia_add]').submit(function(e) {
        e.preventDefault();
        tinyMCE.triggerSave();
        sendAjax(this, 'noticia_add', conteudo, null);
    });
    $('form[name=noticia_edit]').submit(function(e) {
        e.preventDefault();
        tinyMCE.triggerSave();
        sendAjax(this, 'noticia_edit', conteudo, null);
    });
    $('form[name=destaqueadd]').submit(function(e) {
        e.preventDefault();
        sendAjax(this, 'destaqueadd', conteudo, true);
    });

    $('#tabeladestaque td a').click(function(e) {
        e.preventDefault();
        var id = $(this).attr("id");
        $.post(conteudo, {id: id, acao: 'deldestaque'}, function(retorno) {
            alert(retorno);
            window.location.reload();
        })
    });

    $("#tabelanoticias td a.delnews").click(function(e) {
        e.preventDefault();
        var id = $(this).attr("id");
        var r = confirm('Deseja deletar esta noticia?');
        if (r == true) {
            $.post(conteudo, {id: id, acao: 'delnoticia'}, function(retorno) {
                alert(retorno);
                window.location.reload();
            })
        }

    });

    
});
