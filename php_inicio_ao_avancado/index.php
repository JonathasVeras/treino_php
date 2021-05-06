<?php

$pagina = 'home';

if(isset($_GET['pagina']))
{
    $pagina = $_GET['pagina'];
}

include 'header.php';

switch ($pagina) {
    case 'hello_world':
        include 'hello_world.php';
        break;
    case 'dados_e_variaveis':
        include 'dados_e_variaveis.php';
        break;
    case 'conversao_de_tipos_de_dados':
        include 'conversao_de_tipos_de_dados.php';
        break;
    default:
        'home.php';
        break;
}

include 'footer.php';

?>