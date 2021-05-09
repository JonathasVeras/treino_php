<?php
// Conectando ao banco de dados usando o script que criei chamado conectar.php
include_once("conectar.php");

//Pegando o nome e o sobrenome colocados no formulário
$nome_c = $_POST['nome'];
$sobrenome_c = $_POST['sobrenome'];

//Criando variável de checagem se existe:
$existe = False;

//Criando a tabela e o cabeçalho de dados:
echo "<table border=1>";
echo "<tr>";
echo "<th>NOME</th>";
echo "<th>SOBRENOME</th>";
echo "<th>SEXO</th>";
echo "</tr>";

// Selecionando cada coluna da tabela cadastro e colocando dentro da variável SQL
$sql = "SELECT * FROM cadastro";

// Executa a ação
$resultado = mysqli_query($strcon, $sql) or die('Erro ao retornar dados');

// E agora, para percorrer todos os dados, teremos que fazer um loop
// Função mysqli_fetch_array(): Permite obter os resultados de uma consulta SQL.
while($registro = mysqli_fetch_array($resultado))
{
    $nome = $registro['NomeCliente'];
    $sobrenome = $registro['SobrenomeCliente'];
    $sexo = $registro['SEXO'];

    if($nome_c == $nome && $sobrenome_c == $sobrenome)
    {
        $existe = True;
    }

    echo "<tr>";
    echo "<td>", $nome, "</td>";
    echo "<td>", $sobrenome, "</td>";
    echo "<td>", $sexo, "</td>";
    echo "</tr>";
}

// Fechando conexão com o banco
mysqli_close($strcon);
echo "</table><br>";
if($existe)
{
    echo "$nome_c $sobrenome_c existe em nosso registro<br>";
}
else
{
    echo "$nome_c $sobrenome_c NÃO existe em nosso registro<br>";
}
?>