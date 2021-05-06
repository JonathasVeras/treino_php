<?php
//Uma variavel inteiro
$inteiro = 10;
//Uma variavel real/float
$real = 10.50;
//Uma variavel booleana
$booleana = True;
//Uma variavel tipo String
$string = 'Jonathas';
//Uma variavel global de tipo inteiro
global $inteiro_global;
$inteiro_global = 42;
//Uma variavel estática (Só serve dentro de uma função, porém seu valor fica salvo!)
static $inteiro_estatico;
$inteiro_estatico = 43;

/*OBS: Em uma saída, existe diferença entre aspas simples e duplas:
Strings com aspas simples:
Uma string definida usando-se aspas simples é tratada de forma literal, ou seja, 
o texto presente nela será impresso na tela exatamente da forma como foi escrito, 
incluindo nomes de variáveis, que serão impressos no lugar do conteúdo dessas variáveis.

Strings com aspas duplas:
Uma string definida com aspas duplas permite mostrar (expandir) o conteúdo das variáveis
presentes na string (em vez de somente mostrar seus nomes), e também interpreta determinados 
sequências de caracteres (caracteres especiais ou de escape) que são precedidos por uma barra invertida (\).
*/
//Exemplo:
echo "<table border=\"1\">";
echo "<tr>";
echo "<td>Com aspas duplas:</td> <td>$string é meu nome</td>";
echo "</tr>";
echo "<tr>";
echo '<td>Com aspas simples:</td><td>$string é meu nome</td>';
echo "</tr>";
echo "<tr><td>\$inteiro =</td><td>10</td></tr>";
echo "<tr><td>\$real =</td><td>10.50</td></tr>";
echo "<tr><td>\$booleano =</td><td>true</td></tr>";
echo "</table><br><br>";
echo "Existe também a sintaxe Here Doc:";
$texto = <<< FIM
  Texto atribuído a uma variável usando
  o formato de sintaxe <b>heredoc</b>, com a palavra
  escolhida para ser o delimitador de final de string.
  O delimitador deve aparecer na última linha, sozinho, sem espaços
  e apenas com o ponto-e-vírgula para finalizar.
FIM;
echo "<pre>$texto</pre><br><br>";
echo "Existem também as variáveis globais, que podem ser acessadas de qualquer parte do programa<br>Sua sintaxe é: global \$variavel;<br><br>";
echo "Existem também as variáveis estáticas, essas ficam dentro de funções e são salvas após a função fechar, logo se a função é chamada de novo, ela está lá com o mesmo valor:<br>";
echo "static \$variavel;";

function funcao()
{
  static $variavel_static;
  for($i=0; $i<10; $i++)
  {
    $variavel_static++;
  }
  return $variavel_static;
}
echo "Irei chamar a função 'funcao' e printar a variavel estatica: <br>";
echo "1°  ", funcao(), "<br>";
funcao();
echo "2°  ", funcao(), "<br><br>";
echo "E também temos as variáveis superGlobais, nesse caso é melhor ir dar uma pesquisada, visi.<br><br>";
echo "Mais detalhes em: <a href=\"http://www.bosontreinamentos.com.br/php-programming/curso-de-php-declaracao-e-atribuicao-de-variaveis/\">http://www.bosontreinamentos.com.br/php-programming/curso-de-php-declaracao-e-atribuicao-de-variaveis/</a><br><br>";
?>