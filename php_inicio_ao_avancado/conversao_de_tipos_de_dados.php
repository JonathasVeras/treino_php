<?php
//Podemos converter uma váriavel de 3 formas

//Automaticamente:
/*O PHP pode converter tipos automaticamente em alguns casos, quando ocorrem operações específicas entre dois valores que possuam tipos diferentes.*/

//Explicitamente, com o uso de tapeçaria:
echo "Explicitamente, com o uso de tapeçaria:<br>";
$variavel_1 = 12.50;
echo "Ponto flutuante: $variavel_1<br>";
$variavel_2 = (int)$variavel_1;
echo "Inteiro: $variavel_2<br><br>";

//settype(variável,”novo_tipo”);
echo "settype(variável,”novo_tipo”)<br>";
$variavel_3 = 12.69;
echo "float: $variavel_3<br>";
$variavel_4 = settype($variavel_3, "int");
echo "inteiro: $variavel_4<br><br>";

$texto = <<< FIM
Podemos testar o tipo de uma variável usando as funções a seguir:<br>

    is_int()<br>
    is_integer()<br>
    is_real()<br>
    is_long()<br>
    is_float()<br>
    is_string()<br>
    is_array()<br>
    is_object()<br><br>
FIM;
echo "$texto";
if(is_int($variavel_3))
{
    echo "A \$variavel_3 é inteira pois o teste is_int(\$variavel_3) passou no IF";
}


?>