<?php
function arredonda($notas){
    for($i=0;$i<count($notas);$i++){
        if($notas[$i]>=38 and $notas[$i]%5 == 3){
            $notas[$i]+= 2;
        }
    }
    return print_r($notas);
}

echo arredonda([73, 67, 38, 33]);