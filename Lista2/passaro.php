<?php

function passaros($aparicoes){
    $maximo = 0;
    $i=1;
    foreach($aparicoes as $passaro => $num){
        if($num>$num[$i]){
            $maximo=$num;
        }
        $i++;
    } 
    return ; 
}

$aparicoes = [
    'Pardal' => 15,
    'Arara' => 16,
    'Codona' => 7,
    'cotovia' => 5,
];

echo passaros($aparicoes);
