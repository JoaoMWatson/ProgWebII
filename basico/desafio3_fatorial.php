<?php
$input = readline("Digite um numero: ");
$multiplicando = 1;
$cont = 1;

while ($cont <= $input){
    $multiplicando = $multiplicando * $cont;
    $cont++;
}
echo "O resultado do fatorial é $multiplicando"

?>