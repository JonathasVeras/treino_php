<?php
// Variáveis com as informações
$servidor = 'localhost';
$nome_banco = 'banco_teste';
$user = 'john';
$senha = '123';
//Fazendo a string de conexão
$strcon = mysqli_connect($servidor, $user, $senha, $nome_banco);

if(!$strcon)
{
    die('Não foi possível conectar ao MySQL');
}
?>