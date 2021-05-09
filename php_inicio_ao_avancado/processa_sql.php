<?php
/*CRIANDO UM BANCO DE DADOS, TABELA, ETC: Isso no terminal do MySQL
CREATE DATABASE banco_teste;
USE banco_teste;
CREATE TABLE Cadastro (NomeCliente VARCHAR (20), SobrenomeCliente VARCHAR (30), SEXO CHAR(1));
CREATE USER john@localhost;
GRANT ALL ON banco_teste.* TO john@localhost;
SET PASSWORD FOR 'fabio'@'localhost' = '123'; */

$nome = $_POST['NomeCliente'];
$sobrenome = $_POST['SobrenomeCliente'];
$sexo = $_POST['Sexo'];

/*Essa função retorna uma string de conexão, que deve ser armazenada em uma variável para uso posterior, quando formos executar as declarações SQL no banco de dados.*/
//                      #IP Server   #Login  #Senha #nome_banco_de_dados
$strcon = mysqli_connect('localhost','john', '123', 'banco_teste') or die('Erro ao conectar ao banco de dados requisitado');

if(!$strcon)
{
    /*Essa função é executada caso haja algum problema na execução das funções mostradas anteriormente, exibindo uma mensagem de erro, e finalizando o script PHP naquele ponto. Passe como parâmetro para esta função a mensagem a ser exibida.*/
    die('Não foi possível conectar ao MySQL');
}
/*Essa é a declaração SQL que será executada no servidor, ela pega a tabela Cadastro e suas colunas e coloca nela os respectivos valores... */
$sql = "INSERT INTO Cadastro(NomeCliente, SobrenomeCliente, Sexo) VALUES('$nome', '$sobrenome', '$sexo')";

//Função mysqli_query(): Executa uma declaração SQL no banco de dados.
//mysqli_query(string_conexão,código_SQL,modo_resultado)
$resultado = mysqli_query($strcon,$sql) or die('Erro ao executar a inserção de dados');

echo 'Conexão realizada com sucesso!';

//Função mysqli_close(): Fecha uma conexão a um banco de dados aberta previamente.
//mysqli_close(string_conexão);
mysqli_close($strcon);
?>