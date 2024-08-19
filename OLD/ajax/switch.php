<?php

$acao = $_POST['acao'];

switch ($acao) {
    case 'contato':
        $p['nome'] = $_POST['nome'];
        $p['email'] = $_POST['email'];
        $p['tel'] = $_POST['tel'];
        $p['hora'] = $_POST['m_horario'];
        $p['msg '] = $_POST['msg'];


        print_r($p);


        break;
    case 'curriculo':
        sleep(5);
        $p['nome'] = $_POST['nome'];
        $p['email'] = $_POST['email'];
        $p['tel'] = $_POST['tel'];

        $p['msg '] = $_POST['msg'];
        if ($_FILES['arq_curriculo']['tmp_name']) {
            print_r($_FILES['arq_curriculo']);
        }

        break;

    default:
        break;
}
?>