<?php

// Primeiro programa
/* 
Comentario em mutiplas linhas
*/
echo "Olá mundo\n"; // Ou "Frase".PHP_EOL 
$numero = readline("Digite uma frase: "); // Toda variavel começa com "$"
                                          // Fracamene tipada
                                          // gettype pega o tipo da variavel
                                          // Para concatenar se usa "."
echo "$numero \n";
echo gettype("$numero").PHP_EOL;

$idade = 20;
echo "A idade vale $idade\n";
echo 'A idade vale $idade\n'; // Se tem aspas simples ele não reconhece a variavel


?>
