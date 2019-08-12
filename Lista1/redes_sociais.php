<?php
function likes($dias){
    $alcance = 5;
    $likesTotal = 0;

    for($i=1;$i = $dias;$i++){
        $likesDay = floor($alcance/2);
        $alcance = $likesDay * 3;
        $likesTotal += $likesDay;
    }
    return $likesTotal;
}
$dias = 3;

?>