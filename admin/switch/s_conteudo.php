<?php

ob_start();
session_start();

require_once('../dts/configs.php');

//$acao = mysql_real_escape_string($_POST['acao']);

switch ($acao) {
    // PRINCIPAL
    /* Gerenciando seus projetos  */
    case'principal_ger_projetos':
     //   $s['gerProjetos'] = mysql_real_escape_string($_POST['ger_proj']);

        $grava = update('principal', $s, "id = '1'");
        if ($grava) {
            echo 'Atualizado com sucesso.';
        } else {
            echo 'Erro ao atualizar.';
        }

        break;

    /* Qualidade Certificada  */
    case'principal_qua_cert':
    //    $s['quaCertificada'] = mysql_real_escape_string($_POST['qua_cert']);

        $grava = update('principal', $s, "id = '1'");
        if ($grava) {
            echo 'Atualizado com sucesso.';
        } else {
            echo 'Erro ao atualizar.';
        }

        break;

    /* Empresa  */
    case'objetivo':
     //   $s['objetivo'] = mysql_real_escape_string($_POST['objetivo']);
        $grava = update('empresa', $s, "id = '1'");
        if ($grava) {
            echo 'Atualizado com sucesso.';
        } else {
            echo 'Erro ao atualizar.';
        }
        break;

    case'especializacao':
     //   $s['especializacao'] = mysql_real_escape_string($_POST['especializacao']);
        $grava = update('empresa', $s, "id = '1'");
        if ($grava) {
            echo 'Atualizado com sucesso.';
        } else {
            echo 'Erro ao atualizar.';
        }
        break;

    case'estrutura':
     //   $s['estrutura'] = mysql_real_escape_string($_POST['estrutura']);
        $grava = update('empresa', $s, "id = '1'");
        if ($grava) {
            echo 'Atualizado com sucesso.';
        } else {
            echo 'Erro ao atualizar.';
        }
        break;

    case'social':
    //    $s['social'] = mysql_real_escape_string($_POST['social']);
        $grava = update('empresa', $s, "id = '1'");
        if ($grava) {
            echo 'Atualizado com sucesso.';
        } else {
            echo 'Erro ao atualizar.';
        }
        break;

    /* Atuação  */
    case'atuacao':
    //    $s['atuacao'] = mysql_real_escape_string($_POST['atuacao']);
        $grava = update('atuacao', $s, "id = '1'");
        if ($grava) {
            echo 'Atualizado com sucesso.';
        } else {
            echo 'Erro ao atualizar.';
        }
        break;

    /* Qualidade  */
    case'qualidade':
     //   $s['qualidade'] = mysql_real_escape_string($_POST['qualidade']);
        $grava = update('qualidade', $s, "id = '1'");
        if ($grava) {
            echo 'Atualizado com sucesso.';
        } else {
            echo 'Erro ao atualizar.';
        }
        break;

    /* Portifolio  */
    case'portifolio':
   //     $s['portifolio'] = mysql_real_escape_string($_POST['portifolio']);
        $grava = update('portifolio', $s, "id = '1'");
        if ($grava) {
            echo 'Atualizado com sucesso.';
        } else {
            echo 'Erro ao atualizar.';
        }
        break;

    /* Clientes  */
    case'industrial':
     //   $s['industrial'] = mysql_real_escape_string($_POST['industrial']);
        $grava = update('clientes', $s, "id = '1'");
        if ($grava) {
            echo 'Atualizado com sucesso.';
        } else {
            echo 'Erro ao atualizar.';
        }
        break;

    case'estatal':
     //   $s['estatal'] = mysql_real_escape_string($_POST['estatal']);
        $grava = update('clientes', $s, "id = '1'");
        if ($grava) {
            echo 'Atualizado com sucesso.';
        } else {
            echo 'Erro ao atualizar.';
        }
        break;

    case'setorprivado':
     //   $s['setorprivado'] = mysql_real_escape_string($_POST['setorprivado']);
        $grava = update('clientes', $s, "id = '1'");
        if ($grava) {
            echo 'Atualizado com sucesso.';
        } else {
            echo 'Erro ao atualizar.';
        }
        break;

    case'construcao':
     //   $s['construcao'] = mysql_real_escape_string($_POST['construcao']);
        $grava = update('clientes', $s, "id = '1'");
        if ($grava) {
            echo 'Atualizado com sucesso.';
        } else {
            echo 'Erro ao atualizar.';
        }
        break;

    case'administracao':
    //    $s['administracao'] = mysql_real_escape_string($_POST['administracao']);
        $grava = update('clientes', $s, "id = '1'");
        if ($grava) {
            echo 'Atualizado com sucesso.';
        } else {
            echo 'Erro ao atualizar.';
        }
        break;

    case'outros':
     //   $s['outros'] = mysql_real_escape_string($_POST['outros']);
        $grava = update('clientes', $s, "id = '1'");
        if ($grava) {
            echo 'Atualizado com sucesso.';
        } else {
            echo 'Erro ao atualizar.';
        }
        break;

    /* Notícias  */
    case'noticia_add':
     //   $s['titulo'] = mysql_real_escape_string($_POST['titulo']);
     //   $s['texto'] = mysql_real_escape_string($_POST['texto']);
        $s['data'] = date('Y-m-d H:i:s');
        $s['link'] = setUri($s['titulo']);

        $lerTitulo = read('noticias', "WHERE titulo = '$s[titulo]'");
        if ($lerTitulo) {
            echo "Já existe uma notícia com este título.";
        } else {
            /**
            * 
            * @var object $ordem
            */
            $ordem = read('noticias', "ORDER BY ordem ASC");
            if ($ordem) {
                foreach ($ordem as $or)
                    ;
                $s['ordem'] = $or['ordem'] + 1;
            }

            $grava = create('noticias', $s);
            if ($grava) {
                echo 'Notícia criada com sucesso.';
            } else {
                echo 'Erro ao criar notícias.';
            }
        }
        break;

    case'noticia_edit':
      //  $s['titulo'] = mysql_real_escape_string($_POST['titulo']);
      //  $s['texto'] = mysql_real_escape_string($_POST['texto']);
      //  $s['id'] = mysql_real_escape_string($_POST['id']);
        $grava = update('noticias', $s, "id = '$s[id]'");
        if ($grava) {
            echo 'Notícia atualizada com sucesso.';
        } else {
            echo 'Erro ao atualizar notícia.';
        }
        break;

    case'destaqueadd':
       // $s['idNews'] = mysql_real_escape_string($_POST['newsdestaque']);
        if (!$s['idNews']) {
            echo 'Selecione uma notícia.';
        } else {
            $lerNewNews = read('noticias', "WHERE id IN (SELECT idNews = '$s[idNews]' FROM destaque)");
            if ($lerNewNews) {
                echo 'Esta notícia já esta em destaque.';
            } else {
                /**
               * 
               * @var object $lerDestCont
               */
                $lerDestCont = read('destaque');
                if (count($lerDestCont) >= 5) {
                    echo 'O limíte de 5 destaques foi atingido, para adicionar um novo remova uma notícia da tabela de destaques.';
                } else {
                     /**
                     * 
                     * @var object $lerDest
                     */
                    $lerDest = read('destaque', "ORDER BY ordem DESC LIMIT 1");
					if($lerDest){
						foreach ($lerDest as $dest)
                        ;
						$s['ordem'] = $dest['ordem'] + 1;
					}else{
						$s['ordem'] = 1;
					}
                    
                    
                    $grava = create('destaque', $s);
                    if ($grava) {
                        echo 'Notícia adicionada ao destaque com sucesso.';
                    } else {
                        echo 'Erro ao adicionar notícia ao destaque.';
                    }
                }
            }
        }
        break;

    case'deldestaque':
      //  $s['id'] = mysql_real_escape_string($_POST['id']);
        $deleta = delete('destaque', "idNews = '$s[id]'");
        if (!$deleta) {
            echo 'Destaque removido com sucesso.';
        } else {
            echo 'Erro ao remover destaque.';
        }
        break;

    case'atuaordemdest':
        $lista = $_POST['id'];

        $atual = 1;

        foreach ($lista as $id) {

         //   mysql_query(" UPDATE destaque SET ordem = '" . $atual . "' WHERE id = '" . $id . "' ");

            $atual ++;
            if ($atual == count($lista)) {
                echo 'A ordem atualizada com sucesso!';
            }
        }
		break;
    case'delnoticia':
      //  $s['id'] = mysql_real_escape_string($_POST['id']);

        $deletaNot = delete('noticias', "id = '$s[id]'");
        $deletaDest = delete('destaque', "idNews = '$s[id]'");
        if (!$deletaNot) {
            echo 'Notícia deletada com sucesso.';
        } else {
            echo 'Erro ao deletar notícia.';
        }

        break;

    /* perfil  */
    case'perfil':
      //  $s['nome'] = mysql_real_escape_string($_POST['nome']);
        /* $grava = update('atuacao', $s, "id = '1'");
          if ($grava) {
          echo 'Atualizado com sucesso.';
          } else {
          echo 'Erro ao atualizar.';
          } */
        print_r($s);
        break;

    default:
        echo 'Error';
}

ob_end_flush();
?>