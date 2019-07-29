<?php
$idade = readline("Digite a Idade: ");
$acompanhado = true;

if ($idade >= 18){
    echo "Bem vindo\n";
    echo "Pode Entrar :))\n";

}else if ($acompanhado and $idade >= 16)
    echo "Pode passar\n";

else
    echo "Não pode passar";

?>