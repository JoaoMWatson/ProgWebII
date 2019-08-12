<?php

function causar_dano($pontos, $dano_causado, $personagem){    
    $pontos[$personagem] -= $dano_causado;
    if($pontos[$personagem] <= 0) return "$personagem morreu!!";
    else return "$personagem ficou com $pontos[$personagem]";
}
$pontos= [
    'montanha' => 10,
    'magneto' => 50,
    'rogerio' => 20,
    'aragorn' => 15
];

echo causar_dano($pontos, 10, 'montanha');