<?php
// Conectando ao banco de dados:
include_once ("conectar.php");

//Recebendo os dados do filtro:
$filtro = $_POST['sexo'];
?>

<link href="estilos.css" rel="stylesheet" type="text/css">
<title>Resultado da pesquisa</title>

<!-- Criando tabela e cabeçalho de dados: -->
<table border="1" style='width:50%'>
 <tr>
 <th>NOME</th>
 <th>SOBRENOME</th>
 <th>SEXO</th>
 </tr>

  <!-- Preenchendo a tabela com os dados do banco: -->
<?php
// WHERE Sexo = '$filtro faz com que o que seja selecionado seja TODOS OS ELEMENTOS DE CADASTRO ONDE Sexo seja IGUAL ao filtro
$sql = "SELECT * FROM cadastro WHERE Sexo = '$filtro'";

// Aplicando a execução
$resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");

// Obtendo os dados por meio de um loop while
while ($registro = mysqli_fetch_array($resultado))
{
$nome = $registro['NomeCliente'];
$sobrenome = $registro['SobrenomeCliente'];
$sexo = $registro['SEXO'];
echo "<tr>";
echo "<td>".$nome."</td>";
echo "<td>".$sobrenome."</td>";
echo "<td>".$sexo."</td>";
echo "</tr>";
}
mysqli_close($strcon);
echo "</table>";
?>