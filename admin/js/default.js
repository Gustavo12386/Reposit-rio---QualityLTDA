$(window).load(function() {
    redimensionar();
    DataHora();
});

function redimensionar() {
    var browserwidth = $(window).width();
    var browserheight = $(window).height();

    $('#content').css('min-height', (browserheight - 193) + 'px');
    $('.pagina').css('min-height', (browserheight - 213) + 'px');

}

window.onresize = function() {
    redimensionar();

}
window.onload = function() {
    redimensionar();
}
$(window).ready(function(e) {
    $('.loadsistem').fadeOut('slow', function() {
        $('.dialog').fadeOut('slow')
    });
});

/* DATA E HORA */
function DataHora() {
    var data = new Date();
    var dia = data.getDate();
    var dia_semana = data.getDay();
    var mes = data.getMonth();
    var ano = data.getFullYear();
    var hora = data.getHours();
    var min = data.getMinutes();
    var ms = data.getSeconds();
    switch (dia_semana) {
        case(0):
            dia_semana = 'Domingo';
            break;
        case(1):
            dia_semana = 'Segunda-feira';
            break;
        case(2):
            dia_semana = 'Terça-feira';
            break;
        case(3):
            dia_semana = 'Quarta-feira';
            break;
        case(4):
            dia_semana = 'Quinta-feira';
            break;
        case(5):
            dia_semana = 'Sexta-feira';
            break;
        case(6):
            dia_semana = 'Sábado';
            break;
    }
    switch (mes) {
        case(0):
            mes = 'Janeiro';
            break;
        case(1):
            mes = 'Fevereiro';
            break;
        case(2):
            mes = 'Março';
            break;
        case(3):
            mes = 'Abril';
            break;
        case(4):
            mes = 'Maio';
            break;
        case(5):
            mes = 'Junho';
            break;
        case(6):
            mes = 'Julho';
            break;
        case(7):
            mes = 'Agosto';
            break;
        case(8):
            mes = 'Setembro';
            break;
        case(9):
            mes = 'Outubro';
            break;
        case(10):
            mes = 'Novembro';
            break;
        case(11):
            mes = 'Dezembro';
            break;
    }
    tempo.innerHTML = dia_semana + ', ' + dia + ' de ' + mes + ' de ' + ano + ' | ' + hora + ':' + min + ':' + ms;
    setTimeout("DataHora()", 1000)
}

$(function() {
    //EFEITO MENU
    $('.menu ul li.parent > a').click(function() {

        $('i', this).removeClass('ico_seta_down').addClass('ico_seta_up');
        $('ul.sub-menu', $(this).parent()).slideToggle('fast', function() {
            $('i', $(this).parents('li.aberto')).removeClass('ico_seta_up').addClass('ico_seta_down');

            $(this).parent().toggleClass('aberto');

        });

        return false;
    });

    //TOOLTIP

    $(".tooltip").each(function() {

        var title = $(this).attr("title");

        $(this).hover(function(e) {
            $("body").append("<div class='tooltip_objeto'><div class='meio'><span class='seta_tooltip'></span>" + title + "</div></div>");
            var tipWidth = $('.tooltip_objeto').width(); //Find width of tooltip
            xOffset = 40;
            yOffset = (tipWidth / 2);
            $(this).attr("title", "");
            $("#tooltip").css({
                position: "absolute",
                top: (e.pageY - xOffset) + "px",
                left: (e.pageX - yOffset) + "px",
                display: "none"
            }).fadeIn("fast");
        }, function() {
            $(".tooltip_objeto").remove();
            $(this).attr("title", title);
        });
        $(".tooltip").mousemove(function(e) {
            $(".tooltip_objeto").css("top", (e.pageY - xOffset) + "px").css("left", (e.pageX - yOffset) + "px")
        });
        $(".tooltip").mousedown(function(e) {
            $(".tooltip_objeto").remove();
        });
    });
});

function mostrarResultado(box, num_max, campospan) {
    var contagem_carac = box.length;
    if (contagem_carac != 0) {
        $(campospan).text(contagem_carac);        
        if (contagem_carac >= num_max) {
            $(campospan).text(num_max);
        }
    } else {
        $(campospan).text("0");
    }
}
