<?php
function campeao($player1, $player2){
    $result = [];
    
    for($i=0;$i<count($player1);$i++){
        if($player1[$i] > $player2[$i]) $result[0]++;
        elseif($player1[$i] < $player2[$i]) $result[1]++;
    }

    return print_r($result);
}
// ======================================================================================
function campeaoV2($a, $b){
    $resultado = 0;

    for ($i=0;$i<3;$i++){
        if ($a[$i]>$b[$i]) $resultado[0]++;
        elseif ($a[$i]<$b[$i]) $resultado[1]++;
    }
    return print_r($resultado);
}

echo campeaoV2([0, 0, 0], 
             [0, 0, 0]);