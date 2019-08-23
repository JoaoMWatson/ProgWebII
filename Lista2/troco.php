<?php

function troco($valor){
    $notas=[0, 0, 0, 0, 0, 0];

    while (True){
        if($valor>=50){
            $valor -= 50;
            $notas[0] += 1;
        }
        elseif($valor>=20){
            $valor -= 20;
            $notas[1] += 1;
        }
        elseif($valor>=10){
                $valor -= 10;
                $notas[2] += 1;
        }
        elseif($valor>=5){
            $valor -= 5;
            $notas[3] += 1;
        }
        elseif($valor>=2){
            $valor -= 2;
            $notas[4] += 1;
        }
        elseif($valor>=1){
            $valor -= 1;
            $notas[5] += 1;
        }
        if($valor==0) break;
    }
    return print_r($notas);
}

function trocoV2($valor){
    $troco = [];
    $notas = [50, 20, 10, 5, 2, 1];
    for($i;$i<6;$i++){
        while($valor>=$notas[$i]){
            $valor-=$notas[$i];
            $troco[$i]++;
        }
    }
}

echo troco(89);