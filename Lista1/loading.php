<?php

function barra_status($tarefas, $total){
    global $contagem;
    $porcentagem = floor($tarefas / $total * 100);
    $limite = floor($porcentagem / 10);
    $limite_= ($limite *-1) + 10;

    $limite = ($limite > 10)?10: $limite;
    $contagem = str_repeat("#", $limite);
    $contagem_ = str_repeat("_", $limite_);

    $porcentagem = ($porcentagem > 100)? 100 : $porcentagem;

    return "$contagem$contagem_ $porcentagem%";

}
$tarefas = 14;
$total = 100;
