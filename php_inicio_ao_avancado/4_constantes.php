<?php
/*Uma Constante é um valor que pode ser armazenado sob um nome, de forma parecida com uma variável, porém com uma diferença fundamental: esse valor não pode ser alterado após a constante ser definida e atribuída.*/
//Sintaxe: define(nome_constante, valor_constante[, ignora_caso]);

define("nome_adm", "Jonathas Veras");
echo nome_adm, "<br>"; //Saída -> Jonathas Veras

//Criando uma constante Array
define("const_array", array("nome1","nome2","nome3"));
print_r(const_array); //Saída -> Array ( [0] => nome1 [1] => nome2 [2] => nome3 ) 
?>