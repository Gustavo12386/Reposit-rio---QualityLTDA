$(document).ready(function() {
    $('.tab').DataTable({
        "oLanguage": {
            "sLengthMenu": "Exibir _MENU_ por página",
            "sZeroRecords": "Nada encontrado",
            "sInfo": "Exibindo _START_ de _END_ total _TOTAL_ registros",
            "sInfoEmpty": "Exibindo 0 de 0 de 0 registros",
            "sInfoFiltered": "(filtered from _MAX_ total records)",
            "sSearch": "",
            "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior"
            }
        },
        "columnDefs": [
            {"width": "10px", "targets": 0},
            {"width": "520px", "targets": 1},
            {"width": "100px", "targets": 2},
            {"width": "60px", "targets": 3}
        ]
    });

    $("#tabs").tabs();

    tinymce.init({
        selector: ".editormce",
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste"
        ],
        height: 300,
        language: 'pt_BR',
        //menubar: false,
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link"
    });

    $(".sortable").sortable({
        placeholder: "ui-state-highlight",
        opacity: 0.8,
        cursor: 'move',
        axis: 'y',
        update: function() {
            var ordem = $(this).sortable('serialize') + '&acao=atuaordemdest';
            //alert(ordem);
           $.post('switch/s_conteudo.php', ordem, function(mostraResposta) {
                alert(mostraResposta);
                window.location.reload();
            });
        }
    });
    $(".sortable").disableSelection('fast');



});
