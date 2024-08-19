$(window).resize(function(e) {
    redimensiona();

});

$(window).load(function(e) {
    redimensiona();
    $('.loadsite').fadeOut('fast', function() {
        $('.dialog').fadeOut('slow')
    });
});


$(window).scroll(function() {
    var aAtivo = $("ul.menu_int_default li a.ativo").width();
    $("ul.menu_int_default li a.ativo").css({"left": -(aAtivo - 185)});


});

$(document).ready(function(e) {
    redimensiona();
    var stilo = "easeOutQuint";

    $(".menu_int_mobile").accordion({
        heightStyle: "content"
    });


    $('.box_scroll').jScrollPane({
        showArrows: true,
        horizontalGutter: 30,
        verticalGutter: 30
    });


    $('.slide_news').before('<div id="nav">').cycle({
        fx: 'fade',
        speed: 500,
        timeout: 5000,
        pager: '#nav',
        containerResize: true,
        slideResize: true,
        width: '100%',
        height: '100%',
        fit: 1,
    });

    /* curriculo */
    var curr = 0;
    $("a.envia_curriculo").on("click", function(e) {
        e.preventDefault();
        if (curr == 0) {
            $(this).text("Envie uma mensagem");
            $(".box_form p").slideUp("fast", function() {
                $(".box_form p").text("Se você se indentificou com a nossa empresa e deseja enviar seu currículo, preencha o formulario abaixo.").slideDown("fast");
            });
            $(".container_form").fadeOut("fast", function() {
                $(this).empty().load("inc/form_curriculo.php").fadeIn("fast");
                curr = 1;
            });

        } else {
            $(this).text("Envie seu currículo");
            $(".box_form p").slideUp("fast", function() {
                $(".box_form p").text("Entre em contato conosco através do formulário abaixo. Teremos o maior prazer em lhe atender!").slideDown("fast");
            })
            $(".container_form").fadeOut("fast", function() {
                $(this).empty().load("inc/form_contato.php").fadeIn("fast");
                curr = 0;
            });
        }
    });

    $("body").on("submit", "form[name=send_contato]", function(e) {
        e.preventDefault();
        var dados = $(this).serialize() + "&acao=contato";
        $.ajax({
            type: "POST",
            data: dados,
            url: "ajax/switch.php",
            success: function(retorna) {
                alert(retorna);
            }
        })
    });

    $("body").on("submit", "form[name=send_curriculo]", function(e) {
        e.preventDefault();
        var forma = $(this);
        var bar = $('.progress');
        var per = $('.progress .bar');
        $(this).ajaxSubmit({
            url: "ajax/switch.php",
            data: {acao: 'curriculo'},
            beforeSubmit: function() {
                bar.fadeIn('fast');
            },
            uploadProgress: function(evento, posicao, total, completo) {
                var porcento = completo + '%';
                per.width(porcento).text(porcento);
            },
            success: function(respostas) {
                alert(respostas);
            },
            complete: function() {
                bar.fadeOut('fast', function() {
                    $(".status").empty().html('<span class="ok">Currículo enviado com sucesso.</span>')
                });
            }
        });
    });

    /* HOVER INT */
    var aAtivo = $("ul.menu_int_default li a.ativo").width();
    $("ul.menu_int_default li a.ativo").css({"left": -(aAtivo - 185)});
    $("ul.menu_int_default li").hover(function() {
        var aWisth = $(this).find("a:not(.ativo)").width();
        $(this).find("a:not(.ativo)").stop().animate({"left": -(aWisth - 185)}, 900, stilo);
        $(this).find("a:not(.ativo)").next("span").stop().animate({"right": 15}, 900, stilo);
    }, function() {
        $(this).find("a:not(.ativo)").stop().animate({"left": 15}, 900, stilo);
        $(this).find("a:not(.ativo)").next("span").stop().animate({"right": -15}, 900, stilo);
    });
    $("ul.menu_int_default li").click(function(e) {
        e.preventDefault();
        $("ul.menu_int_default li a.ativo").next("span").stop().animate({"right": -15}, 900, stilo);

        $("ul.menu_int_default li a").removeClass("ativo");
        $(this).find("a").addClass("ativo");
        $("ul.menu_int_default li a").not('.ativo').animate({"left": 15}, 900, stilo);

    });
    var urlPath = window.location.pathname;
    var pathArray = urlPath.split('/');
    var cont = pathArray.length;
    if (pathArray[cont - 1] === "empresa") {
        loagPage("objetivo", "empresa", "container_empresa");
        $(".empresa ul.menu_int_default li").click(function() {
            var pag = $(this).find("a").attr("href");
            loagPage(pag, "empresa", "container_empresa");
        });
    }

    if (pathArray[cont - 1] === "clientes") {
        loagPage("industrial", "clientes", "container_clientes");
        $(".clientes ul.menu_int_default li").click(function() {
            var pag = $(this).find("a").attr("href");
            loagPage(pag, "clientes", "container_clientes");
        });
    }


});

/* REDIMENCIONAR DIVS */
function redimensiona() {
    var altTela = $(window).height();// ALTURA DO BROWSER
    var larTela = $(window).width();// LARGURA DO BROWSER
    var altMenu = $('.menu').height();
    //$(".debug").text(larTela);

    if (larTela > 785) {
        $('.col-dir').css("width", larTela - 215 + "px");
    } else {
        $('.col-dir').css("width", "100%");

    }
    $('.box_scroll').jScrollPane({
        showArrows: true,
        horizontalGutter: 30,
        verticalGutter: 30
    });

    var widNav = $("#nav").width();
    $("#nav").css({"margin-left": -(widNav / 2)});
}

function loagPage(pagina, pasta, container) {
    $.ajax({
        url: 'pag/' + pasta + '/' + pagina + '.php',
        type: "html",
        beforeSend: function(xhr) {
            $("." + container).fadeOut(300, function() {
                $(this).empty().append('<div class="load">Carregando...</div>').fadeIn(300);
            })
        },
        success: function(retorna) {
            $("." + container).fadeOut(300, function() {
                $(this).empty().append(retorna).fadeIn(300, function() {
                    var api = $('.box_scroll').jScrollPane({
                        showArrows: true,
                        horizontalGutter: 30,
                        verticalGutter: 30
                    }).data('jsp');
                    api.reinitialise();
                });

            })
        }
    });
}

function initialize() {
    var myLatlng = new google.maps.LatLng(-12.9842883, -38.450374);
    var mapOptions = {
        zoom: 15,
        center: myLatlng,
        scrollwheel: false
    }
    var map = new google.maps.Map(document.getElementById('mapa'), mapOptions);
    var image = 'img/maker.png';
    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        icon: image

    });
}

google.maps.event.addDomListener(window, 'load', initialize);



