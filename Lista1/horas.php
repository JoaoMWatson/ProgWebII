<?php
function converter_hora($hora, $periodo){
    if ($periodo == "AM"){
        return $hora;
    }elseif ($periodo == "PM"){
        return $hora + 12;
    }
}
$hora = 7;
$periodo = "AM";

?>