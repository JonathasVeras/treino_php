<?php

$pagina = 'home';

if(isset($_GET['pagina']))
{
    $pagina = $_GET['pagina'];
}

include 'header.php';

switch ($pagina) {
    case 'hello_world':
        include '1_hello_world.php';
        break;
    case 'dados_e_variaveis':
        include '2_dados_e_variaveis.php';
        break;
    case 'conversao_de_tipos_de_dados':
        include '3_conversao_de_tipos_de_dados.php';
        break;
    case 'constantes':
        include '4_constantes.php';
        break;
    case 'formulario_post':
        include 'formulario_post.php';
        break;
    case 'formulario_get':
        include 'formulario_get.php';
        break;
    case 'formulario_sql':
        include 'formulario_sql.php';
        break;
    case 'check_formulario':
        include 'check_formulario.php';
        break;
    case 'check_formulario_filter':
        include 'check_formulario_filter.php';
        break;
    default:
        'home.php';
        break;
}

include 'footer.php';

?>