<?php
function campeao($player1, $player2){
    $result = [];
    $count1 = 0;
    $count2 = 0;
    
    for($i=0;$i<count($player1);$i++){
        if($player1[$i] > $player2[$i]) $count1++;
        elseif($player1[$i] < $player2[$i]) $count2++;
    }
    array_push($result, $count1, $count2);
    return print_r($result);
}

echo campeao([10, 20, 30], [10, 20, 40]);