<?php
function arredonda($notas){
    for($i=0;$i<count($notas);$i++){
        if($notas[$i]>=38 and $notas[$i]%5 == 3){
            $notas[$i]+= 2;
            if ($notas[$i] % 5 != 0){
                $notas[$i]++;
            }
        }
    }
    return print_r($notas);
}

function arredondaForeache($notas){
    $r = [];
    foreach($notas as $nota){
      if ($nota > 38) $r[] = round($nota/5)*5;
      else $r[] = $nota;
    }
    return $r;
}
print_r (arredondaForeache([74, 67, 38, 33]));