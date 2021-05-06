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
    default:
        'home.php';
        break;
}

include 'footer.php';

?>