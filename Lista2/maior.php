<?php

function maior($pacotes)
{
    // V1
    return max($pacotes);
}

function maiorV2($pacotes){
    // V2
    $maior = 0;
    for($i=0; $i < count($pacotes);$i++){
        if($pacotes[$i] > $maior)
            $maior = $pacotes[$i];
    }
    return $maior;
}

function maiorV3($pacotes){
    // V3
    $maior = 0;
    foreach($pacotes as $p){
        if ($p > $maior) $maior = $p;
    }
    return $maior;
}
$pacotes = [0, 34, 12, 30, 10];

echo maior($pacotes);
